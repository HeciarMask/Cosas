<?php
	//Langosta 50, Angula 70, Caviar 500
	$langosta = $_POST['langosta'];
	$angula = $_POST['angula'];
	$caviar = $_POST['caviar'];
	$precios = 0;

	if($langosta > 50)
		$precios++;
	if($angula > 70)
		$precios++;
	if($caviar > 500)
		$precios++;
	if($precios >= 2)
		echo "cierto";
	else
		echo "falso";
?>