<?php
require_once("../Model/base.php");

extract($_POST);

$alumnos = Base::listarAlumnos($mod);

include("../View/listarAlumnos.php");
?>