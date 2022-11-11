
<?php 
include('funciones.php');
cabecera('Resultado de la inserción');
echo "<div id=\"contenido\">\n";
/* Así tenemos en la variable $lafecha la fecha introducida en meter_faltas.php
en el formato para grabarlo correctamente en mysql:
echo "<pre>";
print_r($_POST);
echo "</pre>";*/
$lafecha=date ("Y-m-d", mktime (0, 0, 0, $_POST['dia'],$_POST['mes'],$_POST['anno']));

echo "</div>";
pie();
?>
