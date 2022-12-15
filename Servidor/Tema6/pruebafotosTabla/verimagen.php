<?php
$db = mysqli_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'fotosentabla') or die(mysqli_error($db));
$dir="images/";
$sql = "SELECT personas.dni,personas.nombre,fotos.num_ident"

    . " FROM personas LEFT JOIN fotos ON personas.dni=fotos.num_ident ";
//echo $sql;
$resultado=$db->query($sql);
while ($fila=$resultado->fetch_assoc()){

	extract($fila);
	$cadena="<p>".$dni.",".$nombre;
	echo $cadena;
	if ($num_ident==NUll)
		echo "<img src='images/sinfoto.gif'>";
	else
		echo "<img src='ver.php?n=".$fila['num_ident']."'>";
	echo "</p>";

}

?>