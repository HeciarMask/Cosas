<?php
    /*5. Escriba un Script que pida un número y un carácter mediante un formulario, una vez
que se procese debe de aparecer el carácter introducido en el formulario tantas veces
como indique el número introducido. (el carácter debe aparecer en negrita). */

    $numero = $_POST['numero'];
    $caracter = $_POST['caracter'];

    for($i = 1; $i <= $numero;$i++){
        echo "<b> $caracter </b>";
    }
?>
