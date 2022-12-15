<?php
session_cache_limiter('nocache,private');
session_name('inmo');
session_start();
$_SESSION["entrada"]="0";
?>
<html>

<head>
<title>Ejercicio fotos personas</title>
</head>
<body bgcolor=#FFFF66>

<CENTER><H1> Ejercicio fotos personas</H1></CENTER><BR>


<table bgcolor=#FFFFCC width=100% border=2 height=50%>
<tr>
<td align=center ><b><a href="formulario.php">Subir imágenes</a></b></td>
</tr>
<tr>
	<td align=center ><b><a href="verimagen.php">Ver tabla</b></td>
</tr>
</table>
</body>
</html>
