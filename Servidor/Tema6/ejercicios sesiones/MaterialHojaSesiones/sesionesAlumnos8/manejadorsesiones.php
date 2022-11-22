<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html> 
<head> 
<title>Roles y sesiones</title> 
</head> 

<body> 
<?php

 
//Recibimos las dos variables
$usuario=$_POST["usuario"];
$password=$_POST["password"];

/* Realizamos una consulta por cada tabla para buscar en que tabla se encuentra 
el usuario que está intentando acceder 
si es operario

    header("Location: espacioOperario.php");
si es directivo
  header("Location: espaciodirectivo.php");



   /* Si no el usuario no se encuentra en ninguna de las dos tablas 
   imprime el siguiente mensaje */
   $mensajeaccesoincorrecto = "El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.";
  
   echo "<a href='index.php'>". $mensajeaccesoincorrecto."</a>"; 
   

?>
</body></html>