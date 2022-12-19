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
	function crear_correo($carrito,$pedido,$correo){
	/* Envia un email a la direccion $correo con los datos del pedido nº $pedido cuyas lineas están en
	$carrito*/
	$tema= "nº de pedido".$pedido." almacenado";
	$texto= "Restaurante".$correo."<br>Productos:<br>";
	$headers = array();
	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset="utf-8"' ;
	$headers[] ='Content-Transfer-Encoding: 7bit' ;
	$headers[] = 'From: tienda@2daw.com' ;
	$texto="<h3>Pedido nº $pedido del Restaurante: $correo</h3>";
	$productos=cargar_productos(array_keys($carrito));
	while  ($fila=mysqli_fetch_assoc($productos)){
		extract ($fila);
		$texto.= $CodProd.",".$Nombre.",".$Descripcion."<br>";

	}
	mail($correo,$tema,$texto,join("\r\n",$headers));
	echo $texto;
}
	$resul = insertar_pedido($_SESSION['carrito'], $_SESSION['usuario']["codRes"]);
	if($resul === FALSE){
		$_SESSION["realizado"]= "No se ha podido realizar el pedido<br>";			
	}
	else{
		crear_correo($_SESSION['carrito'],$resul,$_SESSION['usuario']["codRes"]);
	$_SESSION["realizado"]="Pedido nº".$resul." almacenado correctamente";}
	$_SESSION['carrito'] = [];
	header("Location:categorias.php");

		
	?>		
	</body>
</html>
	