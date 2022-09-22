<?php
	$nota = $_POST['nota'];

	switch($nota){
		case 0 <= $nota && $nota <= 4:
			echo "SUSPENSO";
			break;
		case 5 <= $nota && $nota <= 6;
			echo "APROBADO";
			break;
		case 7 <= $nota && $nota <= 8;
			echo "NOTABLE";
			break;
		case 9 <= $nota && $nota <= 10;
			echo "SOBRESALIENTE";
			break;
		default:
			echo "VALOR INCORRECTO";
	}
?>