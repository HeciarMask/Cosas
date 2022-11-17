<?php
$value = 'Juan';
setcookie("nombre", $value, time()+3600);  /* expira en una hora */
echo '¡Hola ' . $_COOKIE["nombre"] . '!';; 
?>
