<?php
	$op1 = $_POST['op1'];
	$op2 = $_POST['op2'];
	$tipo = $_POST['tipo'];
	
	if($tipo == "Suma"){
		echo "$op1 + $op2 = ".($op1+$op2);
	}
	if($tipo == "Resta"){
		echo "$op1 - $op2 = ".($op1-$op2);
	}
	if($tipo == "Producto"){
		echo "$op1 x $op2 = ".($op1*$op2);
	}
?>