<?php
	$nombre = $_POST['nombre']." ".$_POST['apellido1']." ".$_POST['apellido2'];
	$edad = $_POST['edad'];
	$domicilio = $_POST['domicilio'];
	echo "Me llamo <i>$nombre</i>, tengo $edad años y vivo en $domicilio.";
?>