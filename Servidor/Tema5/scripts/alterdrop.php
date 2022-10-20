
<?php
 	 $base="ejemplos";
	 $tabla="noticias"; 
	 $campo="FECHA"; 
	 $borrar="ALTER TABLE ";
	 $borrar.=$tabla;
	 $borrar.=" DROP $campo";
	 $conexion=mysqli_connect ("localhost","root","",$base);
	 
	 if(mysqli_query ($conexion,$borrar ))
		 { echo "<h2> A la tabla $tabla se le ha BORRADO el campo 			$campo</h2><br>";}
	 else
		 { echo "<h2> No ha podido BORRAR</h2><br>"; }
	 mysqli_close($conexion); 
?>

