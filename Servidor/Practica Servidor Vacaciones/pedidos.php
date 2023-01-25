<?php 
	/*comprueba que el usuario haya abierto sesión o redirige*/
	require_once 'sesiones.php';
	require_once 'bd.php';
	comprobar_sesion();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Mis Pedidos</title>		
	</head>
	<body>
		<?php 
		require 'cabecera.php';			
		$pedidos = recibePedidos($_SESSION["usuario"]);

		?>
		<hr>
		<a href = "procesar_pedido.php">Realizar pedido</a>		
	</body>
</html>
