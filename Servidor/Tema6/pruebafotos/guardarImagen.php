<?xml version="1.0" encoding="iso-8859-1">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 </head>
 <body>
<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<pre>";
print_r($_FILES);
echo "</pre>";

//connect to MySQL 
$db = mysqli_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'pruebafotos') or die(mysqli_error($db));

//en esta ruta especificamos el directorio para las imágenes
$dir="images";
//asegurarse que la transferencia del archivo cargado se ha efectuado correctamente
    if ($_FILES['ficheroFoto']['error'] != UPLOAD_ERR_OK)
    {
        switch ($_FILES['ficheroFoto']['error']) {
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
    $image_id = $_POST["comboDni"];
    list($width, $height, $type, $attr) =
        getimagesize($_FILES['ficheroFoto']['tmp_name']);

    // asegurarse de que el archivo cargado es un tipo de imagen admitido
    $error = 'El archivo que vd. ha subido no es de un tipo soportado';
    switch ($type) {
    case IMAGETYPE_GIF:
        $image = imagecreatefromgif($_FILES['ficheroFoto']['tmp_name']) or
            die($error);
		$ext='.gif';
        break;
    case IMAGETYPE_JPEG:
        $image = imagecreatefromjpeg($_FILES['ficheroFoto']['tmp_name']) or
            die($error);
			$ext='.jpg';
        break;
    case IMAGETYPE_PNG:
        $image = imagecreatefrompng($_FILES['ficheroFoto']['tmp_name']) or
            die($error);
			$ext='.png';
        break;
    default:
        die($error);
    }

    $image_filename = $image_id.$ext;

    //insertar información en la tabla  image 
    $query = "INSERT INTO images
        (image_id, image_caption, image_username, image_filename, image_date)
    VALUES
        ('$image_id','$image_caption','$image_username', '$image_filename','$image_date')";

        //echo $query;
        
    
    $result = mysqli_query( $db,$query) or die (mysqli_error($db));
    
    //recuperar el  image_id generado automáticamente por MySQL al insertar
    //el nuevo registro
    $last_id = mysqli_insert_id($db);
    
    //como el id es único, podemos  utilizarlo como nombre de imagen así como para asegurarnos
	// de no sobreescribir ninguna imagen existente
    $image_id = $last_id;
   $image_filename=$last_id.$ext;
// actualizar la tabla imagen ahora que conocemos el nombre del archivo final
  $query='UPDATE images
  SET image_filename="'.$image_filename.'"
  WHERE image_id='.$last_id;
  $result = mysqli_query( $db,$query) or die (mysqli_error($db));
 // Guardar la imagen en su destino final
   switch ($type) {
    case IMAGETYPE_GIF:
         imagegif($image, $dir.'/'.$image_filename);
         break;
    case IMAGETYPE_JPEG:
        imagejpeg($image, $dir.'/'.$image_filename,100);
         break;
    case IMAGETYPE_PNG:
       imagepng($image, $dir.'/'.$image_filename);
         break;
    
    }
	imagedestroy($image)
  
?>


  
  <p>Esta es la foto que has subido al servidor:</p>
   <img src="<?php echo $dir.'/'.$image_filename; ?>" style="float:left;">
  <table>
   <tr><td>Imagen Salvada como: </td><td><?php echo $image_id  . $ext; ?></td></tr>
   <tr><td>Height: </td><td><?php echo $height; ?></td></tr>
   <tr><td>Width: </td><td><?php echo $width; ?></td></tr>
   <tr><td>Upload Date: </td><td><?php echo $image_date; ?></td></tr>
  </table>
 
 </body>
</html>
