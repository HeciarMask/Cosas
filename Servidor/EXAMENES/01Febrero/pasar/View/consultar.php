<?php
require_once('..\view\funciones.php');
cabecera('Práctica 4');

echo "<div id=contenido>";
echo "<h2>Nuevo usuario</h2>";
echo '<form name="alta" action="listausuarios.php" method="POST" >';
echo '<table bgcolor="#E9FFFF" align=center border=2>';
echo '<tr>';
echo "<td colspan='2' align='center'>Búsqueda:</td></tr>";
echo '<tr><td align="left">Introduzca el Nombre o parte de él: </td>';
echo '<td align="left"> <input type="text" name="nombre"></td></tr>';
echo "<tr><td>" . "Estudia" . "</td>";
echo "<td><select name=estudia>";
echo "<option value=0>Selecciona</option>";

foreach ($estudios as $id => $den) {
	echo "<option value='" . $id . "'>" . $den . "</option>";
}

echo "</td></select></tr>";
echo '<tr><td align="left" colspan=2><input type=submit name ="Consultar" value="Consultar">';
echo '<input type=reset value="Borrar"></td></tr></table></form>';
echo "</div>";
pie();
?>