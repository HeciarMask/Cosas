<?php
	$op1 = $_POST['op1'];
	$op2 = $_POST['op2'];
	$tipo = $_POST['tipo'];
	
	switch($tipo){
		case 'Suma':
			echo "$op1 + $op2 = ".($op1+$op2);
			break;
		case 'Resta':
			echo "$op1 - $op2 = ".($op1-$op2);
			break;
		default:
			echo "$op1 x $op2 = ".($op1*$op2);
	}
?>