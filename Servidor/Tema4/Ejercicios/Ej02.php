<?php
/*
2. Crea un array bidimensional que contenga los nombres de cinco alumnos y las calificaciones de tres
materias (biología, física y latín por ejemplo). El primer índice puede ser el número de lista y los segundos
pueden ser de tipo asociativo (nombre, biologia, fisica, latin, por ejemplo). Asígnales valores a los elementos
del array y completa el script de forma que se visualice un listado con los nombres de los alumnos y las
calificaciones de cada una de las materias. 
*/

$notas = array(
    "Antonio" => array(
        "Filosofia" => 9,
        "Matematicas" => 5,
        "Fisica" => 4
    ),
    "Carlos" => array(
        "Filosofia" => 6,
        "Matematicas" => 10,
        "Fisica" => 8
    ),
    "Pablo" => array(
        "Filosofia" => 7,
        "Matematicas" => 9,
        "Fisica" => 8
    )
    );

    foreach($notas as $alumno => $lista){
        echo "$alumno: <br>";
        foreach($lista as $asignatura => $nota){
            echo " - ".$asignatura.": $nota <br>"; 
        }
    }
?>