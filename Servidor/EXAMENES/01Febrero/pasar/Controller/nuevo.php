<?php
require_once("../Model/base.php");
//crea las combos y llama a la vista

$estudios = Base::obtenerCombo("estudios", "id", "denominacion");
$postres = Base::obtenerCombo("postres", "id", "nombre");
require_once("../View/nuevo.php");
?>