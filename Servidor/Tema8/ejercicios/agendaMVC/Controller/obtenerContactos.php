<?php
include("../Model/base.php");

extract($_POST);

$sql = "SELECT * FROM contactos WHERE nombre LIKE '%".$nombre."%' AND apellido1 LIKE '%".$apellido."%' AND tfno LIKE '%".$telefono."%' ORDER BY '$orden'";
echo $sql;
$resultado2 = Base::mostrarContactos($sql);


include("../View/obtenerContactos.php");
?>