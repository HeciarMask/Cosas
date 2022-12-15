<?php
	/*comprueba que el usuario haya abierto sesión o redirige*/
	
	require 'sesiones.php';
	require_once 'bd.php';
	comprobar_sesion();
?>	
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Pedidos</title>		
	</head>
	<body>
	<?php 
	require 'cabecera.php';		

	
	$resul = insertar_pedido($_SESSION['carrito'], $_SESSION['usuario']["codRes"]);
	if($resul === FALSE){
		$_SESSION["realizado"]= "No se ha podido realizar el pedido<br>";			
	}
	else{
	$_SESSION["realizado"]="Pedido nº".$resul." almacenado correctamente";}
	$_SESSION['carrito'] = [];
	header("Location:categorias.php");

		
	?>		
	</body>
</html>
	