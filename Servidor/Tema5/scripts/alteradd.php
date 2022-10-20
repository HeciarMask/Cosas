
<?php
	 $base="ejemplos";
	 $tabla="noticias"; 
	 $anadir="ALTER TABLE ";
	 $anadir.=$tabla;
	 $anadir.=" ADD nuevocampo TINYINT(12) ";
	 $conexion=mysqli_connect ("localhost","root","",$base);
	 if(mysqli_query ($conexion,$anadir))
		{echo "<h2> A la tabla $tabla se le ha añadido un campo</h2><br>";}
	else
		{ echo "<h2> No ha podido añadir</h2><br>";}
	 mysqli_close($conexion); 
?> 


