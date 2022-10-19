<?php
include("arrays1.php");

$solucion = array();

foreach($notas as $indice1 => $lista1){
    $media = 0;
    $aprobados = 0;
    $suspensos = 0;
    $notas = 0;
    foreach($lista1 as $indice2 => $valor1){
        if($valor1 >= 5)
            $aprobados++;
        else
            $suspensos++;

        $media += $valor1;
        $notas++;
    }
    $media = $media / $notas;

    $solucion[$indice1]["media"] = number_format($media ,2);
    $solucion[$indice1]["aprobados"] = $aprobados;
    $solucion[$indice1]["Suspensos"] = $suspensos;
}

ksort($solucion);

/* print_r($solucion); */

echo "
    <table border='solid'>
        <tr>
            <th>Nombre de Alumno</th>
            <th>Nota Media</th>
            <th>Aprobados</th>
            <th>Suspensos</th>
        </tr>";

        foreach($solucion as $indice10 => $lista10){
            echo "
                <tr>
                    <td>$indice10</td>
            ";
            foreach($lista10 as $valor10){
                echo "
                    <td>$valor10</td>
                ";
            }
            echo "
                </tr>
            ";
        }

echo "
    </table>
";
?>