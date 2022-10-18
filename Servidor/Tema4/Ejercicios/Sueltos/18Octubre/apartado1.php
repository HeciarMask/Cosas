<?php
include("datos1.php");
$alumnos = array();

foreach($datos as $indice1 => $lista1){
    if(in_array($lista1[0],$alumnos) == NULL){
        $alumnos[] = $lista1[0];
    }
}
if(isset($_POST['alumno'])){
    $alumno = $_POST['alumno'];
    $creditos = 0;

    echo "Informe del alumno $alumno:";

    echo "
        <table border='solid'>
            <tr>
                <th>Módulo</th>
                <th>Calificación</th>
                <th>Creditos Obtenidos</th>
            <tr>
    ";

    foreach($datos as $lista2){
        if($lista2[0] == $alumno){
            echo "
                <tr>
                    <td>".$modulos[$lista2[1]]["Nombre"]."</td>
                    <td>".$lista2[2]."</td>
            ";
            if($lista2[2] >= 5){
                echo "
                    <td>".$modulos[$lista2[1]]["Creditos"]."</td>
                ";
                $creditos += $modulos[$lista2[1]]["Creditos"];
            }else{
                echo "
                    <td>0</td>
                ";
            }
            echo "</tr>";
        }
    }

    echo "
        <tr>
            <td colspan='2'>Total Creditos</td>
            <td>$creditos</td>
        </tr>
    </table
    ";
}else{
    echo "Seleccione Alumno a Consultar:";

    echo "
        <form name='alumnos' action='apartado1.php' method='post'>
            <select name='alumno'>
    ";
    asort($alumnos);
    foreach($alumnos as $valor2){
        echo "
            <option>$valor2</option>
        ";
    }

    echo "
            </select>
            <input type='submit' value='Mostrar Resultado'>
        </form>
    ";
}
?>