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

echo "<h4> Asignar trabajos. Usuario:</h4>";
echo '<form method="POST" action=espaciodirectivo.php>';
echo "<br><br><input type=submit value='Asignar' name='enviar'></form>";
echo "<br><br><a href=espaciodirectivo.php>Volver a espacio directivo</a>";


?>