<?php
require_once("../model/base.php");
if ($_POST["respuesta"]=="Si"){
ClaseExamen::borrarCandidato($_POST["dni"]);
header ("Location:index.php");

}
else
	{$mensaje="Operación de borrado cancelada";
require_once("../View/resultado.php");}
?>
		