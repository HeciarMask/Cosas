<?php
session_start();

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
if(isset($_SESSION['conectado'])){
   if($_SESSION['conectado'] == "operario"){

   

   /* nos envía a la siguiente dirección en el caso de no poseer autorización 
   header("location:index.php"); */


echo "<table align=center border=2 bgcolor='#F0FFFF'>"; 
echo "<tr bgcolor='#ffffff'><td  align=center><b>Trabajos pendientes  del operario: </b></td><tr bgcolor='#ffffff'>"; 



echo '<form  action="cerrarsesion.php" method="post">';
 
    
   echo '<input type="submit" value="Cerrar sesión" ></td></tr></table>
 
</form>';
}else echo "Usuario no autorizado.";
}else echo "Usuario no conectado.";

?>