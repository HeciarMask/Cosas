<html> 
<head> 
<title>Formulario para añadir datos a la tabla demo4</title> 
</head> 
<body> 
<?php 

$base="examen"; 
$conexion=new mysqli ("localhost","root","",$base); 
$conexion->set_charset("utf8");
$resultado=$conexion->query("SELECT departamento,curso,descripcion,num_creditos FROM modulos  "); 
echo "<table align=center border=2 bgcolor='#F0FFFF'>"; 
echo "<td colspan=4 align=center>Para modificar escribe en la casilla correspondiente</td><tr>"; 
echo "<td colspan=3 align=center>Datos de los módulos</td>"; 
echo "<td align=center>Número de créditos</td><tr>"; 
echo "<form name='modificar' method=\"POST\" action='scriptactualizacionb.php'>"; 
while($salida =$resultado-> fetch_assoc())
{ 
	extract($salida);
	echo "<td>".$departamento."</td>"; 
	echo "<td>".$curso."</td>"; 
	echo "<td>".$descripcion."</td>"; 
	echo "<td><input type=text size=8 name=creditos[$departamento][$curso] value=$num_creditos></td><tr>"; 
			 
}    
 
$conexion->close(); 
?> 
<td colspan=5 align=center><br><input type=submit value='Modificar'>&nbsp;<input type=reset value='Borrar'> 
</form></table> 
</body> 
</html>