<?php 
//tras hacer los inserts vuelve a formulario.php
$conexion = new mysqli("localhost", "root", "", "preparadasb");


extract($_POST);
foreach($alumnos as $año => $lista){
    foreach($lista as $curso => $lista2){
        foreach($lista2 as $id){
            $sql1 = "INSERT INTO alumnos_cursos VALUES ('$curso', '$id', '$año')";
        mysqli_query($conexion, $sql1);
        }
    }
}

header ("Location:formulario.php"); 
?> 


