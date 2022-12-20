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
	function crear_correo($carrito, $pedido, $correo){
		$tema = "nº Pedido $pedido<br>";
		$texto = "Restaurante $correo <br> Productos:<br>";
		
		$headers = array();
		$headers[] = 'MIME-Version: 1.0';
		$headers[] = 'Content-type: text/html; charset="iso-8859-1"' ;
		$headers[] ='Content-Transfer-Encoding: 7bit' ;
		$headers[] = 'From: ' . $from_address;
		$texto = "<h3>Pedido nº $pedido del Restaurante: $correo</h3>";
		$productos = cargar_productos(array_keys($carrito));
		
		while($fila = mysqli_fetch_assoc($productos)){
			extract($fila);
			echo $CodProd."<br>";
		}
		mail($correo, $tema, $texto,join("\r\n", $headers));
		echo($texto);
	}

	
	$resul = insertar_pedido($_SESSION['carrito'], $_SESSION['usuario']["codRes"]);
	
	if($resul === FALSE){
		$_SESSION["realizado"]= "No se ha podido realizar el pedido<br>";			
	}else{
	$_SESSION["realizado"]="Pedido nº".$resul." almacenado correctamente";}
	$_SESSION['carrito'] = [];
	header("Location:categorias.php");

		
	?>		
	</body>
</html>
	