<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
</head>
<body>
    <form name="miForm" action="control.php" method="post">
        Introduzca su DNI:
        <input type='text' name='dni' />
        
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>