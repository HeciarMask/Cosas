<?php
session_cache_limiter('nocache,private');
session_name('pruebas');
session_start();

foreach($_SESSION as $indice=>$valor){
	print("Variable: ".$indice." Valor: ".$valor."<br>");
}

$_SESSION['valor1']+=87;
$_SESSION['valor2'] .=" bonito nombre";

unset($_SESSION['variable3']);

?> 
<A Href="ejemploC.php">Propagar la sesion</A>


