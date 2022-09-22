<?php
    $cadena = $_POST['cadena'];

    for($i = 1; $i <= 7; $i++){
        echo "<h$i>$cadena</h$i><br>";
    }
?>