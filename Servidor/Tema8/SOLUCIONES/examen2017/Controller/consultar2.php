<?php 
require_once("../Model/base.php");
if (!isset($_POST["actividad"]))
{
	header("Location:index.php");
}
$nombreActividad=Base::obtieneDescripcion($_POST["actividad"]);
$codigoActividad=$_POST["actividad"];


$losAlumnos=Base::obtieneMatriculados($codigoActividad);

include("../View/consultar2.html");
?>