<?php
include('funciones.php');
cabecera('Seleccione curso');
echo "<div id=\"contenido\">\n";

$dwes=new mysqli("localhost","root","","examen2");
$sql="SELECT DISTINCT CURSO FROM alumnos ORDER BY curso";
$resultado=$dwes->query($sql);
echo "<form id=\"form_seleccion\" action=\"meter_faltas.php\" method=\"post\">";
echo "Curso:";
echo '<select name="curso">';
while ($fila=$resultado->fetch_assoc())
{
	echo "<option value=".$fila['CURSO'].">".$fila["CURSO"];
}
echo "</select>";
echo "<input type=submit value='Introducir faltas' name='enviar'></form>";
echo "</div>";
pie();
?>
