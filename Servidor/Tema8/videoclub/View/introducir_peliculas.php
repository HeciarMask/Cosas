<?php
require_once('funciones.php');
cabecera('Alta de películas');
echo "<h1>Gestión de videoclub</h1>";
echo '<form name="altapeliculas" action="introducir_peliculas.php" method="POST" >';
echo '<table bgcolor="#E9FFFF" align=center border=2>';
echo '<tr>';
echo '<td align="left">Título: </td>';
echo '<td align="left"> <input type="text" name="000" size=35></td></tr>';

foreach ($puestos as $puesto) {
    echo "<tr>
            <td>" . $puesto . "</td>";
    $personas = miclase::obtenerPersonas($puesto);
    foreach ($personas as $persona) {
        echo "<td><select name=000>";
        echo "<option value='0'>Seleccione..</option>";
        echo "</td></select>";
    }

    echo "</tr>";
}

echo '<tr><td align="left" colspan=2><input type=submit name ="Insertar" value="Insertar">';
echo '<input type=reset value="Borrar"></td></tr></table></form>';
pie();
?>