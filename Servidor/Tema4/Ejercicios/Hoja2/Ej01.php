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
    echo "
        <tr>
            <th>$nombre</th>
            <td>
                <table border='solid'>
                    <tr>
                        <th>Clave</th>
                        <th>Valor</th>
                    </tr>
        ";
    foreach($datos as $tipo => $dato){
        echo "
            <tr>
                <td width = '65'>$tipo</td>
                <td width = '180'>$dato</td>
            </tr>
            ";
        }
        echo "
                </table>
            </td>
        </tr>
        ";
}
echo "</table>"
?>