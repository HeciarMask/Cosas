<?php
function mostrarVector($v){
    echo "
        <table border = '1'>
            <tr>
    ";
    foreach($v as $numero){
        echo "
                <td>$numero</td>
        ";
    }
    echo "
            </tr>
        </table>
    ";
}
function generarVector($dimension){
    for($i = 0; $i < $dimension; $i++){
        $v[$i]=rand(1,15);
    }
    return $v;
}

#main
$a = array(8, 10, 15, 6);
mostrarVector($a);
?>