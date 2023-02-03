<?php
/*comprueba que el usuario haya abierto sesión o redirige*/
require_once 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Mis Pedidos</title>
</head>

<body>
	<?php
	require 'cabecera.php';
	$pedidos = recibePedidos($_SESSION["usuario"]);
	echo "
		<table border='solid'>
			<tr>
				<th>Pedido</th>
				<th>Linea</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Fecha</th>
				<th>Cantidad</th>
			</tr>
	";

	foreach ($pedidos as $numPed => $lineas) {
		echo "
			<tr>
				<td>$numPed</td>
		";
		foreach ($lineas as $linea => $datos) {
			echo "
				<td>$linea</td>
			";
			foreach ($datos as $dato) {
				echo "
					<td>$dato</td>
				";
			}
		}

		echo "</tr>";
	}
	echo "</table>";

	?>
	<hr>
	<a href="procesar_pedido.php">Realizar pedido</a>
</body>

</html>