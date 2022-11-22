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


echo "<form action='actualiza.php' method='POST'>";
echo "<h4> Trabajos terminados. Usuario:</h4>";
echo "<table border=1><tr><th>Matrícula</th><th>Tiempo</th><th>¿Terminado?</th></tr>";
echo "</table><br><br><input type=submit value='Enviar' name='enviar'></form>";
echo "</form>";
echo "<br><br><a href=espaciodirectivo.php>Volver a espacio directivo</a>";
?>