<?php
/*conectarme al servidor mysql a la b.d.*/
$c=@mysqli_connect("localhost","root","","ejemplos") or die ("imposible conectar");

/* variable tipo string con el contenido de la select */
$consulta="select * from noticias where categoria='promociones'";
/* ejecutar la consulta */
$resultado=mysqli_query($c,$consulta);
/* variable para obtener el nº de filas devuelto por la consulta*/
$nfilas=mysqli_num_rows($resultado);
if ($nfilas>0)
	{
	for ($i=0;$i<$nfilas;$i++)
		{
		$fila=mysqli_fetch_array($resultado);
		/*print "Titulo: ".$fila[1];
		print "Fecha: ".$fila[4]."<br>";*/		foreach ($fila as $indice=>$valor)		{			echo "Indice...".$indice." Valor:".$valor."<br>";		}		echo "<hr>";
		}		
	}
else
	print "La consulta no ha devuelto ninguna fila";
/*cerrar la conexion*/
mysqli_close($c);
?>

	
	