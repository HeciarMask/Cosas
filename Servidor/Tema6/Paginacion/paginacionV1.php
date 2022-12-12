<html>
<head>
<title>Paginacion</title>
</head>
<body>
<?php
$conexion=new mysqli("localhost","root","") ;
if (isset($_GET["inicio"]))
	{$posicion_inicio=$_GET["inicio"];}
else
	{$posicion_inicio=0;}
$longitud_pagina=16;
$cadena="SELECT nombre,apellido1,apellido2 FROM demo4";
$cadena.=" LIMIT $posicion_inicio,$longitud_pagina";
$conexion->select_db("ejemplos");
$conexion->set_charset("utf8");
$resultado=$conexion->query($cadena) or die ("fallo al ejecutar la SELECT");
echo "<table border='1' >";
$impresos=0;
//cada fila un array escalar
while  ($registro=$resultado->fetch_array(MYSQLI_NUM))
	{echo "<tr>";
	foreach ($registro as $clave)
	{
	echo "<td>$clave</td>";
	}
	$impresos++;
	echo "</tr>";
	}
echo "</table>";
$conexion->close();
if ($posicion_inicio!=0)
	{
	$anterior=$posicion_inicio-$longitud_pagina;
	echo "<a href=inicial_paginacion.php?inicio=".$anterior.">Pag Ant </a>";
	}
else 
	{echo "Pag Ant ";}
if ($impresos==$longitud_pagina)
	{
	$siguiente=$posicion_inicio+$longitud_pagina;
	echo "<a href=inicial_paginacion.php?inicio=".$siguiente.">Pag Sig </a>";
	}
else
	{echo "Pag Sig ";}
?>