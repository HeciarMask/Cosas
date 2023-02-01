<?php 
	require_once("../Model/base.php");
	extract($_POST);
	$modulos = Base::visualizarModulos($nombreProfesor);
	$numero=count($modulos);
	if ($numero>0)
		{include("../View/visualizarModulos.php");}
	else
		{include("../View/sinDatos.php");}


?>