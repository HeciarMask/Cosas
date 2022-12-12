<?xml version="1.0" encoding="iso-8859-1">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 </head>
 <body>
<?php
//connect to MySQL
$db = mysqli_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

//en esta ruta especificamos el directorio para las imágenes
$dir="images";
//change this path to match your thumbnail directory
$thumbdir = $dir . '/thumbs';
//Controlar la imagen cargada

//asegurarse que la transferencia del archivo cargado se ha efectuado correctamente
     if ($_FILES['uploadfile']['error'] != UPLOAD_ERR_OK)
    {
        switch ($_FILES['uploadfile']['error']) {
        case UPLOAD_ERR_INI_SIZE:
            die('El tamaño del archivo excede el permitido por la directiva  upload_max_filesize establecida en php.ini. ' );
            break;
        case UPLOAD_ERR_FORM_SIZE:
            die('El tamaño  del archivo cargado excede el permitido por la directiva  MAX_FILE_SIZE establecida en  el formulario HTML.');
            break;
        case UPLOAD_ERR_PARTIAL:
            die('El archivo se ha cargado parcialmente ');
            break;
        case UPLOAD_ERR_NO_FILE:
            die('No ha cargado ningún archivo');
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            die('No se encuentra el directorio temporal del servidor ');
            break;
        case UPLOAD_ERR_CANT_WRITE:
            die('El servidor ha fallado al intentar escribir el archivo en el disco');
            break;
        case UPLOAD_ERR_EXTENSION:
            die('Subida detenida por la extensión');
            break;
        }
    }
    
//obtener información de la imagen que se acaba de cargar
    $image_caption = $_POST['caption'];
    $image_username = $_POST['username'];
    $image_date = @date('Y-m-d');
    list($width, $height, $type, $attr) =
        getimagesize($_FILES['uploadfile']['tmp_name']);

    // asegurarse de que el archivo cargado es un tipo de imagen admitido
    $error = 'El archivo que vd. ha subido no es de un tipo soportado';
    switch ($type) {
    case IMAGETYPE_GIF:
        $image = imagecreatefromgif($_FILES['uploadfile']['tmp_name']) or
            die($error);
        break;
    case IMAGETYPE_JPEG:
        $image = imagecreatefromjpeg($_FILES['uploadfile']['tmp_name']) or
            die($error);
        break;
    case IMAGETYPE_PNG:
        $image = imagecreatefrompng($_FILES['uploadfile']['tmp_name']) or
            die($error);
        break;
    default:
        die($error);
    }


    //insertar información en la tabla  images
    $query = 'INSERT INTO images
        (image_caption, image_username, image_date)
    VALUES
        ("' . $image_caption . '", "' . $image_username . '", "' . $image_date .
        '")';
    
    $result = mysqli_query( $db,$query) or die (mysqli_error($db));
    
    //recuperar el  image_id generado automáticamente por MySQL al insertar
    //el nuevo registro
    $last_id = mysqli_insert_id($db);
    $image_id = $last_id;
   imagejpeg($image, $dir . '/' . $image_id  . '.jpg');
	
 


$imagename = 'images/' . $image_id  . '.jpg';

//miniatura
 //set the dimensions for the thumbnail
    $thumb_width = $width * 0.10;
    $thumb_height = $height * 0.10;

    //create the thumbnail
    $thumb = imagecreatetruecolor($thumb_width, $thumb_height);
    imagecopyresampled($thumb, $image, 0, 0, 0, 0, $thumb_width, $thumb_height,
        $width, $height);
    imagejpeg($thumb, $thumbdir . '/' . $image_id . '.jpg', 100);
    imagedestroy($thumb);
	   imagedestroy($image);
?>
 
  

 </body>
</html>


  <p>Esta es la foto que has subido al servidor:</p>

   <img src="<?php echo $imagename; ?>" style="float:left;">
  <table>
   <tr><td>Image Saved as: </td><td><?php echo $image_id  . '.jpg'; ?></td></tr>
   <tr><td>Height: </td><td><?php echo $height; ?></td></tr>
   <tr><td>Width: </td><td><?php echo $width; ?></td></tr>
   <tr><td>Upload Date: </td><td><?php echo $image_date; ?></td></tr>
  </table>
  
 </body>
</html>
