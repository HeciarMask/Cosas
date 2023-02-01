<?php 
include("../Model/contactos.php");
include("../Model/base.php");
extract($_POST);
$contacto = new Contacto($dni,$nombre,$apellido1,$apellido2,$domicilio,$telefono);
$resultado = Base::insertarContacto($contacto);


include("../View/resultadoGrabacion.php");
?>