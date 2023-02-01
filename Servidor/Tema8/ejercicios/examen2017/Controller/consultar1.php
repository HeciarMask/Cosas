<?php 
require_once("../Model/base.php");
$lasActividades=Base::obtieneActividades();

/*
echo "<pre>";
print_r($lasActividades);
echo "</pre>";
echo "<pre>";
print_r($losCursos);
echo "</pre>";
*/
include("../View/consultar1.html");
?>