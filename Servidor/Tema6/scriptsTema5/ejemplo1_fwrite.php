<?php
$file = fopen("archivo.txt", "w");
fwrite($file, "Esto es una  linea de texto" . "\n");
fwrite($file, "Otra mas" . PHP_EOL);
fwrite($file, "Y otra" . PHP_EOL);
fclose($file);
?>
