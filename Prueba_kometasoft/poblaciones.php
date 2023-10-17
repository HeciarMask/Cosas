<?php
extract($_POST);

$bd=mysqli_connect("localhost","root","","francisco_kometasoft");

$sql = "SELECT nombre FROM poblaciones WHERE id_provincia='".$id_provincia."'";
$resul = mysqli_query($bd, $sql);

$lista = array();
while($fila = mysqli_fetch_assoc($resul)){
    $lista[] = $fila;
}

echo json_encode($lista);