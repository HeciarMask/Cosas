<?php
require_once("../Model/base.php");

$estudios = Base::obtenerCombo("estudios", "id", "denominacion");

/* echo "<pre>";
print_r($estudios);
echo "</pre>"; */

require_once("../View/consultar.php");
?>