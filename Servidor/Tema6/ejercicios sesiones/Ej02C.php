<?php
    session_start();
    if(isset($_SESSION["nombreCorrecto"])){
        echo "Bienvenido ".$_SESSION["nombreCorrecto"];
    }else {
        echo "Acceso no autorizado";
    }
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
<a href="Ej02A.php">Ir a la primera página</a>
</body>
</html>