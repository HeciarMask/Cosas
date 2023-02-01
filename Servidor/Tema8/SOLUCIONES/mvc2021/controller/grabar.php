<?php
require_once("../model/base.php");
if ($_POST["accion"]=="Enviar")
{
	$errores=array();
	if (empty($_POST["dni"]))
	{
		$errores[]="El Dni no puede estar vacio";
	}
	if (!isset($_POST["idiomas"])) 
	{
		$errores[]="Debe seleccionar al menos un idioma...";
	}
	if (!isset($_POST["sexo"])) 
	{
		$errores[]="Debe especificar el sexo";
	}
	if (count($errores)==0)
	{
	if (!ClaseExamen::compruebaCandidato($_POST["dni"]))
		{
			$micandidato=new Candidato($_POST["dni"],$_POST["nombre"],$_POST["apellidos"],$_POST["sexo"],$_POST["idiomas"]);
			ClaseExamen::insertDatos($micandidato);
			header ("Location:index.php");
		}
	else
		{
		$mensaje="Ya existe ese DNI en la base de datos";
		
		}
	}
		else
		$mensaje=implode("<br>",$errores);
}
else
	$mensaje="Alta cancelada";
require_once("../View/resultado.php")
?>
		