<?php

include_once ("../Model/base.php");

extract($_POST);
$empleados = miclase::obtenerempleados($localidad, $horario);

require_once ("../View/ver_empleados.php");
?>