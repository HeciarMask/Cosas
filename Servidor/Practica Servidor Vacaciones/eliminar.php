<?php 
/*comprueba que el usuario haya abierto sesión o redirige*/
require_once 'sesiones.php';
comprobar_sesion();
$cod = $_POST['cod'];
unset($_SESSION['carrito'][$cod]);
header("Location: carrito.php");
?>