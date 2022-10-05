<?php
    $a[4] = 1;
    $a[-3] = 2;
    $a[2] = 3;
    $a[] = 4;

    foreach($a as $indice => $valor){
        echo $indice." => ".$valor."<br>";
    }
?>