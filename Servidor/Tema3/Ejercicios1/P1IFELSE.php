<?php
	$op1 = $_POST['op1'];
	$op2 = $_POST['op2'];
	
	if($tipo == "Suma"){
		echo "$op1 + $op2 = ".($op1+$op2);
	}elseif($tipo == "Resta"){
		echo "$op1 - $op2 = ".($op1-$op2);
	}
	else{
		echo "$op1 x $op2 = ".($op1*$op2);
	}
?>