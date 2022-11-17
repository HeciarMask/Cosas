<?php
# identicos comentarios a los anteriores
session_cache_limiter('nocache,private');
session_name('ejemplo_sesion');
session_start();
# este bucle nos confirmará que se han propagado
# los nuevos valores y que la tercera variable ha sido destruida
foreach($_SESSION as $indice=>$valor){
	print("Variable: ".$indice." Valor: ".$valor."<br>");
}
?>
