<?php
if (isset($_COOKIE['colorines']))$color=$_COOKIE['colorines'];
else $color="white";

if(isset($_POST['fondo']))$color=$_POST['fondo'];
setcookie("colorines",$color,time()+86400);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
    <style>
        <?php
        echo "body{
            background-color: ".$_COOKIE['colorines'].";
        }";
        ?>
    </style>
</head>
<body>
    <form name="miForm" action="Ej01.php" method="post">
        Seleccione el color que le gustaría tener como fondo en la página:
        <input type="radio" name="fondo" value="red">Rojo</input>
        <input type="radio" name="fondo" value="green">Verde</input>
        <input type="radio" name="fondo" value="blue">Azul</input>
        <button type="submit">Cambiar</button>
    </form>
</body>
</html>