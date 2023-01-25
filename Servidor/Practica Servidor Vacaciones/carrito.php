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
		<title>Carrito de la compra</title>		
	</head>
	<body>
		
		<?php 
		
		require 'cabecera.php';			
		$productos = cargar_productos(array_keys($_SESSION['carrito']));
		if($productos === FALSE){
			echo "<p>No hay productos en el pedido</p>";
			exit;
		}
		echo "<h2>Carrito de la compra</h2>";
		echo "<table border='1'>"; //abrir la tabla
		echo "<tr><th>Nombre</th><th>Descripción</th><th>Unidades</th><th>Eliminar</th></tr>";
		while ($producto=mysqli_fetch_assoc ($productos)){
			$cod = $producto['CodProd'];
			$nom = $producto['Nombre'];
			$des = $producto['Descripcion'];
			$unidades = $_SESSION['carrito'][$cod]["unidades"];								
			
			//print_r($producto);				
			echo "<tr><td>$nom</td><td>$des</td><td>$unidades</td>
			<td><form action = 'eliminar.php' method = 'POST'>
			
			<input type = 'submit' value='Eliminar'>
			<input name = 'cod' type='hidden' value = '$cod'>  </form></td></tr>";	
		}
		echo "</table>";	

		?>
		<hr>
		<a href = "procesar_pedido.php">Realizar pedido</a>		
	</body>
</html>
