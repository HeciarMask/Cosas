<?php 
require_once("../Model/base.php");
	$modulo = $_POST['modulo'];
	$profe=$_POST["profe"];
	$alumnos = Base::listarAlumnos($modulo);
	$elModulo=Base::obtenerModulo($modulo);
	include("../View/listarAlumnos.php");
?>