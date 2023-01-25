<?php 
/*comprueba que el usuario haya abierto sesión o redirige*/
require_once 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();
$cod = $_POST['cod'];
$unidades = (int)$_POST['unidades'];
/*si existe el código sumamos las unidades*/
if(isset($_SESSION['carrito'][$cod])){
	$_SESSION['carrito'][$cod]["unidades"] += $unidades;
}else{
	$_SESSION['carrito'][$cod]["unidades"] = $unidades;
	$_SESSION['carrito'][$cod]["precio"] = recibePrecio($cod);
}
header("Location: carrito.php");
