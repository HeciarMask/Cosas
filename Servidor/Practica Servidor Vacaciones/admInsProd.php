<?php
/*comprueba que el usuario haya abierto sesión o redirige*/

require 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
</head>

<body>
    <?php
    require 'admCabecera.php';

    extract($_POST);
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $bd = mysqli_connect("localhost", "root", "", "pedidosejemplo");
    $bd->set_charset("utf8");

    // prod - desc - stock - categoria - precio - imagen
    if ($prod == "" || $stock == "" || $precio = "") {
        die("Faltan datos importantes por ingresar");
    } else {
        $sqlPro = "INSERT INTO productos ( Nombre, Descripcion, Stock, precio, CodCat) VALUES('$prod', '$desc', '$stock', '$precio', '$categoria')";
        //echo $sqlPro;
        $resul1 = insertar($sqlPro);
        if ($resul1 !== FALSE) {
            $image_id = $resul1;
        }
    }

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

    if ($_FILES['uploadfile']["error"] != UPLOAD_ERR_NO_FILE) {
        $foto_temporal = $_FILES['uploadfile']['tmp_name'];
        $image_username = $_POST['prod'];
        $foto_type =  $_FILES['uploadfile']['type'];
        $foto_size = $_FILES['uploadfile']['size'];
        if ($foto_type == "image/x-png" or $foto_type == "image/png") {
            $formato = "image/png";
        }
        if ($foto_type == "image/pjpeg" or $foto_type == "image/jpeg") {
            $formato = "image/jpeg";
        }
        if ($foto_type == "image/gif" or $foto_type == "image/gif") {
            $formato = "image/gif";
        }

        $f1 = fopen($foto_temporal, "rb");
        $foto_reconvertida = fread($f1, $foto_size);
        $foto_reconvertida = addslashes($foto_reconvertida);

        $sqlFoto = "INSERT INTO fotos (num_ident, imagen, nombre, tamano, formato)
        VALUES ('$image_id', '$foto_reconvertida', '$image_username', '$foto_size','$formato')";
        echo $sqlFoto;
        $resul2 = insertar($sqlFoto);
    }

    if ($resul1 === FALSE) {
        $_SESSION["realizado"] = "No se ha podido realizar la inserción<br>";
    } else if ($resul2 === FALSE) {
        $_SESSION["realizado"] = "No se ha podido realizar la inserción de la foto<br>";
    } else {
        $_SESSION["realizado"] = "Pedido nº" . $resul . " almacenado correctamente<br>";
    }

    header("Location:admin.php");
    ?>
</body>

</html>