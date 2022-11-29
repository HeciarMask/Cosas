<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html> 
<head> 
<title>Roles y sesiones</title> 
</head> 

<body> 
<form  action="manejadorsesiones.php" method="post">
 
   <input name="usuario" type="text" placeholder="Usuario" />
 
   <input name="password"  type="password" placeholder="Contraseña" />
 
   <input type="submit" value="Acceder" class="enviar">
 
</form>
</body> 
</html>
