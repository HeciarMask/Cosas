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
		<title>Tabla de productos por categoría</title>		
	</head>
	<body>
		<?php 
		require 'cabecera.php';
		$cat = cargar_categoria($_GET['categoria']);
		$productos = cargar_productos_categoria($_GET['categoria']);		
		if($cat=== FALSE or $productos === FALSE){
			echo "<p class='error'>Error al conectar con la base datos</p>";
			exit;
		}
		echo "<h1>". $cat['Nombre']. "</h1>";
		echo "<p>". $cat['Descripcion']."</p>";		
		echo "<table border=1>"; //abrir la tabla
		echo "<tr><th>Articulo</th><th>Nombre</th><th>Descripción</th><th>Comprar</th></tr>";
		while($producto= $productos->fetch_assoc()){

			$cod = $producto['CodProd'];
			$tieneFoto=cargar_foto($cod);
			$nom = $producto['Nombre'];
			$des = $producto['Descripcion'];
			echo "<tr><td>";
			if ($tieneFoto== 0)	{
				echo "<img src='IMAGENES DISCOS/sinfoto.gif' width='52' height='52'>";
			}	
			else {
				echo "<img src='ver.php?n=".$cod."' width='52' height='52'>";
			}						
			echo "</td><td>$nom</td><td>$des</td>
			<td><form action = 'anadir.php' method = 'POST'>
			<input name = 'unidades' type='number' min = '1' value = '1'>
			<input type = 'submit' value='Comprar'><input name = 'cod' type='hidden' value = '$cod'>
			</form></td></tr>";
		}
		echo "</table>"			
		?>				
	</body>
</html>