<?php
$bd=mysqli_connect("localhost","root","","francisco_kometasoft");

$sql = "SELECT * FROM provincias";
$resul = mysqli_query($bd, $sql);

$lista = array();
while($fila = mysqli_fetch_assoc($resul)){
    $lista[] = $fila;
}

echo json_encode($lista);

?>