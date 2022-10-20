
<?php
$base="ejemplos";
$tabla="ejemplo1";
$borrar="DROP TABLE ";
$borrar .=$tabla; 
$conexion=mysqli_connect ("localhost","root","",$base);

if(mysqli_query($conexion,$borrar)) 
	{
		echo "<h2> Tabla $tabla borrada con EXITO</h2><br>";
	}
else
	{
		echo "<h2> La tabla $tabla NO HA PODIDO BORRARSE</h2><br>";
	}
 mysqli_close($conexion); 
?>
