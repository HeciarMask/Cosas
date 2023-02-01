<?php
//Llamada al modelo
require_once("../Model/personas_model.php");
$per=new personas_model();
$datos=$per->get_personas();
//Llamada a la vista
require_once("../view/personas_view.php");
?>
