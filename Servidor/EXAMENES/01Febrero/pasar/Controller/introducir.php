<?php
require_once("../Model/base.php");

//DATOS nombre - estudia - platos[]
/*
Controlar 
"Debe seleccionar algún estudio"
"Debe especificar el estudio (no vale "Seleccione"
"Debe seleccionar algún postres";
"Selección errónea en los postres
"El nombre no puede estar vacío"
y 
Si todo va bien crea un nuevo objeto de la clase persona e inserta los datos en la b.d.
en la vista muestra los errores si ha ido mal o el mensaje encuesta grabada*/

extract($_POST);

$errores = "";

if ($estudia == "")
    $errores .= "Debe seleccionar un estudio<br>";

if ($nombre == "")
    $errores .= "Debe de introducir el nombre<br>";

if (count($platos) == 0)
    $errores .= "Debe seleccionar algún postre<br>";

if ($errores == "") {
    $persona = new Persona($nombre, $estudia, $platos);
    $res = Base::introducirPersona($persona);
    $errores .= "Se han insertado los datos correcetamente.";
}

require_once("../View/mensaje_insercion.php");
?>