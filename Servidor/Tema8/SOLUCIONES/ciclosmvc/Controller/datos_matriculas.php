<?php 
require_once("../Model/base.php");
extract($_POST);
if (Base::existe($idAlumno, $idModulo))
	{
	Base::actualiza($idAlumno,$idModulo);
	 $mensaje="Datos de Matrícula actualizados";
	}
else
	{
	 Base::inserta($idAlumno,$idModulo);
	 $mensaje="Alumno Matriculado";
	}

require_once('../View/resultadoInsercion.php');
?>
