<html>
<head>
<title>Paginacion</title>
</head>
<body>
<?php
$conexion=new mysqli("localhost","root","") ;
$conexion->select_db("ejemplos");
$conexion->set_charset("utf8");
//obtener número de registros
$sql1="SELECT count(*) FROM demo4";
$resultadoCuenta=$conexion->query($sql1);
$fila1=$resultadoCuenta->fetch_array(MYSQLI_NUM);
$numero_registros=$fila1[0];
//el nº de registros está en $numero_registros
$longitud_pagina=16;
$numero_paginas= (int)($numero_registros/$longitud_pagina);
$resto=$numero_registros-$numero_paginas*$longitud_pagina;
if ($resto!=0)
	$numero_paginas++;
//el nº total de páginas está en $numero_paginas
$pos_ultima=$numero_registros-$resto;
if (isset($_GET["inicio"]))
	{$posicion_inicio=$_GET["inicio"];}
else
	{$posicion_inicio=0;}
$pagina_actual=$posicion_inicio/$longitud_pagina+1;
$cadena="SELECT nombre,apellido1,apellido2 FROM demo4";
$cadena.=" LIMIT $posicion_inicio,$longitud_pagina";


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
echo "<table cellspacing=5 cellpadding=4><tr>";
echo "<td><a href=paginacion.php?inicio=0 style= 'text-decoration:none '> << </a></td>";
if ($posicion_inicio!=0)
	{
	$anterior=$posicion_inicio-$longitud_pagina;
	echo "<td><a href=paginacion.php?inicio=".$anterior." style= 'text-decoration:none '> < </a></td>";
	}
else 
	{echo "<td>Pag Ant</td> ";}
if ($impresos==$longitud_pagina)
	{
	$siguiente=$posicion_inicio+$longitud_pagina;
	echo "<td><a href=paginacion.php?inicio=".$siguiente." style= 'text-decoration:none '> > </a></td>";
	}
else
	{echo "<td>Pag Sig</td> ";}
echo "<td><a href=paginacion.php?inicio=".$pos_ultima." style= 'text-decoration:none '> >> </a></td>";
echo "</tr><td colspan='2'>Mostrando página:$pagina_actual de $numero_paginas páginas</td></tr></table>";
?>