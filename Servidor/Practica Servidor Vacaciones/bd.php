<?php

function comprobar_usuario($nombre, $clave){
	$bd=mysqli_connect("localhost","root","","pedidosejemplo");
	$bd->set_charset("utf8");
	$ins = "SELECT NUM_CLIENTE, EMAIL FROM clientes WHERE EMAIL = '$nombre' 
			AND PASSWORD = '$clave'";
	$resul = mysqli_query($bd,$ins);	
	if ($fila=mysqli_fetch_assoc($resul)){		
		return $fila;		
	}else{
		return FALSE;
	}
}
function cargar_categorias(){
	$bd=mysqli_connect("localhost","root","","pedidosejemplo");
	$bd->set_charset("utf8");
	$ins = "SELECT CodCat, Nombre FROM categoria";
	$resul = mysqli_query($bd,$ins);		
	if (!$resul) {
		return FALSE;
	}
	if (mysqli_num_rows($resul) == 0) {    
		return FALSE;
    }
	//si hay 1 o más
	return $resul;	
}
function cargar_categoria($codCat){
	$bd=mysqli_connect("localhost","root","","pedidosejemplo");
	$bd->set_charset("utf8");
	$ins = "SELECT Nombre, Descripcion FROM categoria WHERE CodCat = $codCat";
	$resul = mysqli_query($bd,$ins);
	if (!$resul) {
		return FALSE;
	}
	if (mysqli_num_rows($resul) == 0) {    
		return FALSE;
    }	
	//si hay 1 
    return mysqli_fetch_assoc($resul);
	
}
function cargar_productos_categoria($codCat){
	$bd=mysqli_connect("localhost","root","","pedidosejemplo");
	$bd->set_charset("utf8");
	$sql = "SELECT * FROM productos WHERE CodCat  = $codCat";	
	$resul = mysqli_query($bd,$sql);
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
function cargar_productos($codigosProductos){
	$bd=mysqli_connect("localhost","root","","pedidosejemplo");
	$bd->set_charset("utf8");
	$texto_in = implode(",", $codigosProductos);
	$ins = "SELECT * FROM productos WHERE codProd IN($texto_in)";
	$resul = mysqli_query($bd,$ins);	
	if (!$resul) {
		return FALSE;
	}
	return $resul;	
}
function insertar_pedido($carrito, $cliente){
	$bd=mysqli_connect("localhost","root","","pedidosejemplo");
	$bd->set_charset("utf8");
	$hora = date("Y-m-d H:i:s", time());
	// insertar el pedido
	$sql = "INSERT INTO pedidos(CLIENTE, FECHA) 
			values($cliente, '$hora')";
	$resul=mysqli_query($bd,$sql);	
	if (!$resul) {
		return FALSE;
	}
	// coger el id del nuevo pedido para las filas detalle
	$pedido = mysqli_insert_id($bd);
	// insertar las filas en pedidoproductos
	foreach($carrito as $codProd=>$unidades){
		$sql = "insert into pedidosproductos(CodPed, CodProd, Unidades) 
		             values( $pedido, $codProd, $unidades)";	
				 
		 $resul = mysqli_query($bd,$sql);	
		
	}
	
	return $pedido;
}

function cargar_foto($codProducto){
	$bd = mysqli_connect("localhost","root","","pedidosejemplo");
	$bd->set_charset("utf8");
	$sql = "SELECT * FROM fotos WHERE num_ident=$codProducto";
	$resultado = $bd->query($sql);

	$fichero = "images/";

	if($unicaFila = $resultado -> fetch_array())
		$fichero .= $unicaFila["imagen"];
	else
		$fichero .= "sinfoto.gif";
	
	return $fichero;
}

