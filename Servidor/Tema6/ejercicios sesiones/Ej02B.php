<?php
    session_start();
    $conexion = new mysqli("localhost","root", "", "emails");
    $conexion->set_charset("utf8");
    $cadenaSql = "SELECT nombre FROM alumnos WHERE email='";
    $cadenaSql .= $_POST["email"]."'";
    $resultado = $conexion->query($cadenaSql);

    if($fila = $resultado->fetch_assoc()){
        $_SESSION["nombreCorrecto"] = $fila["nombre"];
    }else{
        unset($_SESSION["nombreCorrecto"]);
    }

    $resultado->close();
    $conexion->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02</title>
</head>
<body>
    <a href="Ej02C.php">Ir a la tercera página</a>
</body>
</html>