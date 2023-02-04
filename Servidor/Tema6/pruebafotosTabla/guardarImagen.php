<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
        die('Unable to connect. Check your connection parameters.');
    mysqli_select_db($db, 'fotosentabla') or die(mysqli_error($db));

    //en esta ruta especificamos el directorio para las imágenes
    $dir = "images";
    //asegurarse que la transferencia del archivo cargado se ha efectuado correctamente
    if ($_FILES['uploadfile']['error'] != UPLOAD_ERR_OK) {
        switch ($_FILES['uploadfile']['error']) {
            case UPLOAD_ERR_INI_SIZE:
                die('El tamaño del archivo excede el permitido por la directiva  upload_max_filesize establecida en php.ini. ');
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
    $image_id = $_POST['comboDni'];
    $foto_type =  $_FILES['uploadfile']['type'];
    $foto_temporal = $_FILES['uploadfile']['tmp_name'];
    $foto_size = $_FILES['uploadfile']['size'];
    /////////////////////////////
    if ($foto_type == "image/x-png" or $foto_type == "image/png") {
        $formato = "image/png";
    }
    if ($foto_type == "image/pjpeg" or $foto_type == "image/jpeg") {
        $formato = "image/jpeg";
    }
    if ($foto_type == "image/gif" or $foto_type == "image/gif") {
        $formato = "image/gif";
    }

    //preparar el fichero subido para meterlo en la tabla
    $f1 = fopen($foto_temporal, "rb");
    $foto_reconvertida = fread($f1, $foto_size);
    $foto_reconvertida = addslashes($foto_reconvertida);
    ////insert    
    $query = "INSERT INTO fotos
        (num_ident,imagen,image_caption, image_username,formato)
    VALUES
        ('$image_id','$foto_reconvertida','$image_caption','$image_username','$formato')";

    //echo  $query;

    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    ?>