<?php 
require_once("../Model/base.php");
$lasActividades=Base::obtieneActividades();
$losCursos=Base::obtieneCursos();
/*
echo "<pre>";
print_r($lasActividades);
echo "</pre>";
echo "<pre>";
print_r($losCursos);
echo "</pre>";
*/
include("../View/matricular1.html");
?>