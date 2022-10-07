<?php
/*
7. Cree una función que reciba un par de números a y b como argumento y devuelva como resultado un
vector asociativo en que en la posición de índice 'suma' se colocará el resultado de la suma de a y b, en la
posición de índice 'resta' la diferencia entre el mayor y el menor, en la posición de índice 'producto' la
multiplicación y en la de índice 'division' la división el mayor y el menor salvo que el menor sea 0 en cuyo
caso devolverá un mensaje.
Haga uso de esta función para crear una página web en que se muestren los resultados de las distintas
operaciones indicadas para las combinaciones de los número de 5 al 9, tal y como se muestra a continuación: 
*/

function calculo($a, $b){
    $lista = array(
        "suma" => 0,
        "resta" => 0,
        "producto" => 0,
        "division" => 0
    );

    $lista["suma"] = $a + $b;

    $lista["resta"] = max($a, $b) - min($a, $b); //Tambien: $lista["resta"] = abs($a-$b)
    
    $lista["producto"] = $a * $b;

    if($a == 0 || $b == 0)
        $lista["division"] = "Division por cero";
    else
        $lista["division"] = max($a, $b) / min($a, $b);
    
    return $lista;
}
echo "
    <table border='solid'>
";
for($i = 5; $i <= 9; $i++){
    for($j = 5; $j <= 9; $j++){
        $aux = calculo($i,$j);
        echo "
            <tr>
                <td>$i , $j</td>
                <td> Suma: ".$aux["suma"]."</td>
                <td> Resta: ".$aux["resta"]."</td>
                <td> Producto: ".$aux["producto"]."</td>
                <td> Division: ".$aux["division"]."</td>
            </tr>
        ";
    }
}
echo "
    </table>
";
?>