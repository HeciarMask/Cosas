<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<body>
<?php
if($conexion=mysqli_connect ("localhost","root",""))
	{     echo "id. de conexion: <br>";			echo"<pre>";			print_r($conexion);			echo "</pre>";echo "<h2> Conexión establecida con el servidor</h2><br>";
      $sql = 'CREATE DATABASE midb';
      if (mysqli_query( $conexion,$sql))		
	{echo "<h2> Base de datos creada</h2><br>"; }
      else
	{echo "<h2> No ha sido posible crear la base de datos</h2><br>";}        
      if(mysqli_close($conexion))
         {echo "<h2> Conexión cerrada con exito</h2><br>"; 
         }
      else
	{echo "<h2> No se ha cerrado la conexión</h2>";} 
}
else
{ 
      echo "<h2> NO HA SIDO POSIBLE ESTABLECER LA CONEXIÓN</h2>"; 
} 
?>
</body>
</html>