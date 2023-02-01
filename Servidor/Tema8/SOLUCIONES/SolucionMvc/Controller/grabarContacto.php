<?php 
require_once("../Model/contactos.php");
require_once("../Model/base.php");
extract($_POST);
$nuevoContacto=new Contacto($dni,$nombre,$apellido1,$apellido2,$domicilio,$telefono);
$resultadoInsert=Base::insertarContacto($nuevoContacto);

if  ($resultadoInsert==1)
	$correcto=true;
else
	$correcto=false;
include("../View/resultadoGrabacion.php");


?>