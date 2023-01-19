<?php
//Llamada al modelo
require_once("../Model/base.php");
//require_once("../Vista/consultar.php");

$lasCalles = Base::obtieneCalles();
echo "<pre>";
print_r($lasCalles);
echo "</pre>";
?>
