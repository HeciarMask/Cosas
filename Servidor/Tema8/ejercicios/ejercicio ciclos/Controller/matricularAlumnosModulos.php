<?php
require_once("../Model/base.php");

$alumnos = Base::obtenerComboAlumnos();
$modulos = Base::obtenerComboModulos();
include("../View/matricularAlumnosModulos.php");
?>