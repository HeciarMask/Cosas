<?php
include("arrayliguilla.php");

if(isset($_POST['equipo'])){
    extract($_POST);
    $casa = $a[$equipo];

    echo "
        <table border='solid'>
            <tr>
                <th colspan='3'>Casa</th>
            </tr>";

    foreach($casa as $indice2 => $valor2){
        if($valor2 != " "){
            echo "
                <tr>
                    <td>$equipo</td>
                    <td>$indice2</td>
                    <td>$valor2</td>
                </tr>
            ";
        }
    }
    echo "
        </table><br>
    ";

    echo "
        <table border='solid'>
            <tr>
                <th colspan='3'>Fuera</th>
            </tr>";

    foreach($a as $indice3 => $tabla1){
        foreach($tabla1 as $indice4 => $valor3){
            if($indice4 == $equipo && $valor3 != " "){
                echo "
                    <tr>
                        <td>$indice3</td>
                        <td>$indice4</td>
                        <td>$valor3</td>
                    </tr>
                ";
            }
        }
    }
    echo "
        </table><br>
        <a href='13OCT.php'>Otra Consulta</a>
    ";
}else{
    echo "
        <h2>EJERCICIO 13 oct. 22</h2>
        <form name='liga' action='13OCT.php' method='post'>
            <p>
                <select name='equipo'>";
    
            foreach($a as $indice1 => $valor1){
                echo "
                    <option>$indice1</option>
                ";
            }

            echo "                            
                </select>
                <input type='submit' value='Mostrar Resultado'>
            </p>
        </form>
    ";
}
?>