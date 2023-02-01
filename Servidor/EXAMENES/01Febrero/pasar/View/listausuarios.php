<?php
require_once('funciones.php');
cabecera('Resultado de la consulta');

echo "<table border = '1'>";
echo "
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Curso</th>
        <th>Postres</th>
    </tr>
";

foreach ($consultadas as $persona) {
    echo "
        <tr>
            <td>" . $persona->getId() . "</td>
            <td>" . $persona->getNombrePersona() . "</td>
            <td>" . $persona->getNombreTrabajo() . "</td>
            <td>";

    foreach ($persona->getNombresPostres() as $postre) {
        echo "$postre<br>";
    }

    echo "</td>
        </tr>
    ";
}

echo "</table>";
pie();
?>