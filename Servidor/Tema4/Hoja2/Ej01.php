<?php
$tabla = array(
    "pablo" => (array(
        "Nombre" => "PABLO RAMOS",
        "Profesion" => "ministro",
        "Edad" => 50)),
    "roberto" => (array(
        "Nombre" => "ROBERTO MARTÍNEZ",
        "Profesion" => "agricultor",
        "Edad" => 25)));
echo "<table border = 'solid'>
        <tr>
            <th>Clave</th>
            <th colspan = '2'>Valor</th>
        </tr>";

foreach($tabla as $nombre => $datos){
    echo "<tr>
            <th rowspan = '4'>$nombre</th>
            <th>Clave</th>
            <th>Valor</th>
        </tr>";
        foreach($datos as $tipo => $dato){
            echo "<tr>
                    <td>$tipo</td>
                    <td>$dato</td>
                </tr>";
        }
}
echo "</table>"
?>