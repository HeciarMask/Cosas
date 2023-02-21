<?php 
foreach($empleados as $uno){
    echo "<p>";
    echo $uno->nombre. ", ";
    foreach($uno->idiomas as $idioma){
        echo $idioma->nombre. ", ";
    }
    echo $uno->departamento->nombre;
    echo "</p>";
}
?>