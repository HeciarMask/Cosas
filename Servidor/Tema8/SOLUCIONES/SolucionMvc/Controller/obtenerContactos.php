<?php
require_once("../Model/base.php");
require_once("../Model/contactos.php");
$sql="SELECT * FROM contactos ";
$filtro=" WHERE true ";
if (strlen(trim($_POST["nombre"]))>0)
	$filtro.= " AND nombre LIKE '%".$_POST["nombre"]."%'";
if (strlen(trim($_POST["apellido"]))>0)
	$filtro.= " AND apellido1 LIKE '%".$_POST["apellido"]."%'";
if (strlen(trim($_POST["telefono"]))>0)
	$filtro.= " AND tfno LIKE '%".$_POST["telefono"]."%'";
$orden=" ORDER BY ".  $_POST["orden"];
//echo $sql.$filtro.$orden;
$arrayContactos=Base::ejecutaSelect($sql.$filtro.$orden);
$numRegistros=count($arrayContactos);
/*
echo "<pre>";
print_r($arrayContactos);
echo "</pre>";
*/
include("../View/obtenerContactos.php");
?>