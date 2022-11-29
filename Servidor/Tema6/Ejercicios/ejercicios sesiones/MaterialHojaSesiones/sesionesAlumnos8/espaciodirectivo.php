<?php

 echo
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html> 
<head> 
<title>Roles y sesiones</title> 
</head> 

<body> ';

   /* nos envía a la siguiente dirección en el caso de no poseer autorización 
   header("location:index.php"); */

echo "<h1>Espacio directivo</h1>";

echo "<table  border=1 bgcolor='#F0FFFF'>"; 
echo "<tr bgcolor='#ffffff'><td colspan=2 align=center>Datos</td><tr bgcolor='#ffffff'>"; 
echo "</table><p>";

echo "</p><p>Opciones Disponibles:<br><ul>";
echo "<li><a href=terminados.php>Marcar trabajos terminados</a>";
echo "<li><a href=asignar.php>Asignar Trabajo a operario</a><br>";

/////////

echo '<form  action="cerrarsesion.php" method="post">
 
    
   <p> <input type="submit" value="Cerrar sesión" ></p>
 
</form>';
?>