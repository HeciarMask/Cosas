<?php
//Llamada al modelo
require_once("../Model/base.php");

$lasCalles=Base::obtieneCalles();
$losTipos=Base::obtieneTipos();
/* echo "<pre>";
print_r($losTipos);
echo "</pre>"; */


require_once("../Vista/consultar.php");
?>
