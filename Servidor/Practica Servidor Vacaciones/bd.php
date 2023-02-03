<?php

function comprobar_usuario($nombre, $clave)
{
	$bd = mysqli_connect("localhost", "root", "", "pedidosejemplo");
	$bd->set_charset("utf8");
	$ins = "SELECT NUM_CLIENTE, EMAIL FROM clientes WHERE EMAIL = '$nombre' 
			AND PASSWORD = '$clave'";
	$resul = mysqli_query($bd, $ins);
	if ($fila = mysqli_fetch_assoc($resul)) {
		return $fila;
	} else {
		return FALSE;
	}
}
function cargar_categorias()
{
	$bd = mysqli_connect("localhost", "root", "", "pedidosejemplo");
	$bd->set_charset("utf8");
	$ins = "SELECT CodCat, Nombre FROM categoria";
	$resul = mysqli_query($bd, $ins);
	if (!$resul) {
		return FALSE;
	}
	if (mysqli_num_rows($resul) == 0) {
		return FALSE;
	}
	//si hay 1 o más
	return $resul;
}
function cargar_categoria($codCat)
{
	$bd = mysqli_connect("localhost", "root", "", "pedidosejemplo");
	$bd->set_charset("utf8");
	$ins = "SELECT Nombre, Descripcion FROM categoria WHERE CodCat = $codCat";
	$resul = mysqli_query($bd, $ins);
	if (!$resul) {
		return FALSE;
	}
	if (mysqli_num_rows($resul) == 0) {
		return FALSE;
	}
	//si hay 1 
	return mysqli_fetch_assoc($resul);
}
function cargar_productos_categoria($codCat)
{
	$bd = mysqli_connect("localhost", "root", "", "pedidosejemplo");
	$bd->set_charset("utf8");
	$sql = "SELECT * FROM productos WHERE CodCat  = $codCat";
	$resul = $bd->query($sql);
	if (!$resul) {
		return FALSE;
	}
	if (mysqli_num_rows($resul) == 0) {
		return FALSE;
	}
	//si hay 1 o más
	return $resul;
}
// recibe un array de códigos de productos
// devuelve un cursor con los datos de esos productos
function cargar_productos($codigosProductos)
{
	$bd = mysqli_connect("localhost", "root", "", "pedidosejemplo");
	$bd->set_charset("utf8");
	$texto_in = implode("','", $codigosProductos);
	$ins = "SELECT * FROM productos WHERE CodProd IN ('" . $texto_in . "')";
	$resul = mysqli_query($bd, $ins);
	if (!$resul) {
		return FALSE;
	}
	return $resul;
}
function insertar_pedido($carrito, $cliente)
{
	$bd = mysqli_connect("localhost", "root", "", "pedidosejemplo");
	$bd->set_charset("utf8");
	$hora = date("Y-m-d H:i:s", time());
	// insertar el pedido
	$sql = "INSERT INTO pedidos(CLIENTE, FECHA) 
			values($cliente, '$hora')";
	$resul = mysqli_query($bd, $sql);
	if (!$resul) {
		return FALSE;
	}
	// coger el id del nuevo pedido para las filas detalle
	$pedido = mysqli_insert_id($bd);

	// insertar las filas en pedidoproductos
	foreach ($carrito as $codProd => $tipo) {
		//Recogemos el precio de nuestro producto
		$precio = $carrito[$codProd]["precio"];
		$unidades = $carrito[$codProd]["unidades"];

		$sql = "SELECT Stock FROM productos WHERE CodProd = $codProd";
		$resultado = $bd->query($sql);
		$unFila = $resultado->fetch_assoc();
		$stock = $unFila["Stock"];

		if ($unidades > $stock) {
			return "agotado";
		}

		$stock -= $unidades;

		$sql = "UPDATE productos SET Stock = $stock WHERE CodProd = $codProd";
		$resultado = mysqli_query($bd, $sql);

		$sql = "INSERT INTO lineas(NUM_PEDIDO, COD_PRODUCTO, PRECIO, CANTIDAD) 
		             VALUES($pedido, $codProd, $precio, $unidades)";
		$resul = mysqli_query($bd, $sql);
	}
	//ALTER TABLE pedidos AUTO_INCREMENT = 1

	return $pedido;
}

function cargar_foto($codProducto)
{
	$bd = mysqli_connect("localhost", "root", "", "pedidosejemplo");
	$bd->set_charset("utf8");
	$sql = "SELECT * FROM fotos WHERE num_ident=$codProducto";
	$resultado = $bd->query($sql);

	if ($unicaFila = $resultado->fetch_assoc())
		$fichero = $unicaFila["num_ident"];
	else
		$fichero = 0;

	return $fichero;
}

function recibePrecio($codProd)
{
	$bd = mysqli_connect("localhost", "root", "", "pedidosejemplo");
	$bd->set_charset("utf8");
	$sql = "SELECT precio FROM productos WHERE CodProd = $codProd";
	$resul = $bd->query($sql);
	$unFila = $resul->fetch_assoc();
	$precio = $unFila["precio"];
	return $precio;
}

function recibePedidos($usuario)
{
	$bd = mysqli_connect("localhost", "root", "", "pedidosejemplo");
	$bd->set_charset("utf8");

	$tabla = array();

	$sql = "SELECT NUM_PEDIDO, FECHA FROM pedidos WHERE CLIENTE = $usuario";
	$res1 = $bd->query($sql);
	while ($fila1 = $res1->fetch_assoc()) {
		$sql = "SELECT COD_PRODUCTO, NUM_LINEA, PRECIO, CANTIDAD FROM lineas WHERE NUM_PEDIDO = " . $fila1["NUM_PEDIDO"];
		$res2 = $bd->query($sql);
		while ($fila2 = $res2->fetch_assoc()) {
			$sql = "SELECT Nombre FROM productos WHERE CodProd = '" . $fila2["COD_PRODUCTO"] . "'";
			$res3 = $bd->query($sql);
			$unaFila = $res3->fetch_assoc();

			$nombre = $unaFila["Nombre"];
			$precio = $fila2["PRECIO"];
			$cantidad = $fila2["CANTIDAD"];
			$fecha = $fila1["FECHA"];
			$numPed = $fila1["NUM_PEDIDO"];
			$numLin = $fila2["NUM_LINEA"];

			$tabla[$numPed][$numLin]["nombre"] = $nombre;
			$tabla[$numPed][$numLin]["precio"] = $precio;
			$tabla[$numPed][$numLin]["fecha"] = $fecha;
			$tabla[$numPed][$numLin]["cantidad"] = $cantidad;
		}
	}
	return $tabla;
}
