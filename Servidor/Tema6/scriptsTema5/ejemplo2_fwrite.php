<?php 
$file = fopen("archivo.txt", "a");
fwrite($file, utf8_decode("Añadimos línea 1") . PHP_EOL);
fwrite($file, utf8_decode("Añadimos línea 2" ). PHP_EOL);
fclose($file);
?>