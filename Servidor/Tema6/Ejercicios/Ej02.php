<?php
if (isset($_COOKIE['nombres']))$nombre=$_COOKIE['nombres'];
else $nombre="default";

if(isset($_POST['nombre']))$nombre=$_POST['nombre'];

setcookie("nombres",$nombre,time()+86400);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
</head>
<body>
    <form name="miForm" action="Ej02.php" method="post">
        Introduzca su nombre:
        
        <?php
        echo "<input type='text' name='nombre'";
        if (isset($_COOKIE['nombres'])){
            if($_COOKIE['nombres'] != "default"){
                echo " value='".$_COOKIE['nombres']."'";
            }
        }
        

        echo "/>";
        ?>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>