<?php
include('funciones.php');
cabecera('Seleccione curso');
echo "<div id=\"contenido\">\n";

echo "<form id=\"form_seleccion\" action=\"meter_faltas.php\" method=\"post\">";
echo "Curso:";

echo "<input type=submit value='Introducir faltas' name='enviar'></form>";
echo "</div>";
pie();
?>
