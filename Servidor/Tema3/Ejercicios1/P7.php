<?php
    $pri = $_POST['pri'];
    $seg = $_POST['seg'];
    $count = 1;

    echo "<table border=2 width=400 align=center>"; 
    for($filas = 1; $filas <= $pri; $filas++){
        echo "<tr>";
        for($col = 1; $col <= $seg; $col++){
            echo "<td>".$count++."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>