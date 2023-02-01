<?php
include_once ("../Model/base.php");

$localidades = miClase::obtenerLocalidades();

require_once ("../View/consultar_empleados.php");
?>	

