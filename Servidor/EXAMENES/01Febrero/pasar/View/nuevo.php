<?php
require_once('..\view\funciones.php');
cabecera('Práctica 4');

echo "<div id=contenido>";
echo "<h2>Nuevo usuario</h2>";
echo '<form name="alta" action="introducir.php" method="POST" >';
echo '<table bgcolor="#E9FFFF" align=center border=2>';
echo '<tr>';
echo "<td colspan='2' align='center'>Introduzca los datos:</td></tr>";
echo '<tr><td align="left">Nombre: </td>';
echo '<td align="left"> <input type="text" name="nombre"></td></tr>';
echo "<tr><td>" . "Estudia" . "</td>";
echo "<td><select name=estudia>";

foreach ($estudios as $id => $valor) {
	echo "<option value='" . $id . "'>" . $valor . "</option>";
}

echo "</td></select></tr>";
echo "<tr><td>" . "Colores" . "</td>";
echo "<td><select multiple name=platos[]>";

foreach ($postres as $id => $valor) {
	echo "<option value='" . $id . "'>" . $valor . "</option>";
}

echo '<tr><td align="left" colspan=2><input type=submit name ="Insertar" value="Insertar">';
echo '<input type=reset value="Borrar"></td></tr></table></form>';
echo "</div>";

pie();
?>