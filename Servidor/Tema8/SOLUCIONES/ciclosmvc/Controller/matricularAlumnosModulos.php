<?php
require_once("../Model/base.php");
$losAlumnos=Base::obtenerComboAlumnos();
$losModulos=Base::obtenerComboModulos(); 
include("../View/matricularAlumnosModulos.php");
?>