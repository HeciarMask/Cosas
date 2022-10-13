<?php
include("array.php");

echo "
    <table border='solid'>
        <tr>
            <th>Clave</th>
            <th colspan='2'>Valor</th>
        </tr>";

foreach($tab_persona as $indice1 => $tabla1){
    $l = count($tabla1) + 1;
    
    echo "
            <tr>
                <td rowspan='$l'>$indice1</td>
                <td>Clave</td>
                <td>Valor</td>
            </tr>
        ";
    foreach($tabla1 as $indice2 => $valor1){
        echo "
            <tr>
                <td>$indice2</td>
                <td>$valor1</td>
            </tr>
        ";
    }
}

echo "
    </table>
";
?>