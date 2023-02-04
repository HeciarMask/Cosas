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

    // nombre - desc
    if ($nombre == "" || $desc == "") {
        die("Faltan datos importantes por ingresar");
    } else {
        $sql = "INSERT INTO categoria ( Nombre, Descripcion) VALUES('$nombre', '$desc')";
        //echo $sql;
        $resul = insertar($sql);
    }


    if ($resul === FALSE) {
        $_SESSION["realizado"] = "No se ha podido realizar la inserción<br>";
    } else {
        $_SESSION["realizado"] = "Categoría nº" . $resul . " almacenado correctamente<br>";
    }

    header("Location:admin.php");
    ?>
</body>

</html>