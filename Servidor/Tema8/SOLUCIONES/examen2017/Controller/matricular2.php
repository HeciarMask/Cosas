<?php 
require_once("../Model/base.php");
//$lasActividades=Base::obtieneActividades();
if (!isset($_POST["curso"]))
{
	header("Location:index.php");
}
$losAlumnos=Base::obtieneAlumnos($_POST["curso"]);
$nombreActividad=Base::obtieneDescripcion($_POST["actividad"]);
$codigoActividad=$_POST["actividad"];
include("../View/matricular2.html");
?>