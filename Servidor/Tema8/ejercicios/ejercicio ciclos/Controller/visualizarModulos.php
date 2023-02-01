<?php
require_once("../Model/base.php");

extract($_POST);
$modulos = Base::visualizarModulos($prof);

include("../View/visualizarModulos.php");
?>