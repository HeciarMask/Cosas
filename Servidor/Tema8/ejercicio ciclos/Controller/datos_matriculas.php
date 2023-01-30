<?php
require_once("../Model/base.php");

extract($_POST);
$respuesta = "";
$existe = Base::existe($alumno, $modulo);
if ($existe) {

}

require_once('../View/resultadoInsercion.php');
?>