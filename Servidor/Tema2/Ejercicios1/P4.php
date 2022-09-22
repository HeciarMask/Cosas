<?php
	$segundos = $_POST['segundos'];
	$minutos = $_POST['minutos'];
	$horas = $_POST['horas'];
	$total = $segundos + $minutos*60 + $horas*3600;
	echo $horas.":".$minutos.":".$segundos." => ".$total." segundos.";
?>