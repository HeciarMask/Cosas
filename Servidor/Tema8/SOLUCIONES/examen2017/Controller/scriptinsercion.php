<?php 
require_once("../Model/base.php");


extract($_POST);
/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
if  (Base::compruebaAlumno(2,5))
	echo "existe";
else
	echo "no";
echo "<p>";*/
$mensajeSi=array();
$mensajeNo=array();
foreach ($nombres as $clave=>$nombre){

	if (Base::compruebaAlumno($clave,$actividad)){
				
		$mensajeSi[]="El alumno ".$nombre. " ya estaba inscrito";
	}
	else{
		
		$mensajeNo[]="Inscrito el alumno: ".$nombre;
		Base::Insertaalumno($clave,$actividad);
	}
}
include("../View/scriptinsercion.html");

?>