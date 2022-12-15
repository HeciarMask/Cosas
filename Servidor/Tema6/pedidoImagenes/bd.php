<?php

function comprobar_usuario($nombre, $clave){
	$bd=mysqli_connect("localhost","root","","pedidos");
	$ins = "select codRes, correo from restaurantes where correo = '$nombre' 
			and clave = '$clave'";
	$resul = mysqli_query($bd,$ins);	
	if ($fila=mysqli_fetch_assoc($resul)){		
		return $fila;		
	}else{
		return FALSE;
	}
}
function cargar_categorias(){
	$bd=mysqli_connect("localhost","root","","pedidos");
	$ins = "select codCat, nombre from categoria";
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
	$bd=mysqli_connect("localhost","root","","pedidos");
	$ins = "select nombre, descripcion from categoria where codcat = $codCat";
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
	$bd=mysqli_connect("localhost","root","","pedidos");
	$sql = "select * from productos where codCat  = $codCat";	
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
	$bd=mysqli_connect("localhost","root","","pedidos");
	$texto_in = implode(",", $codigosProductos);
	$ins = "select * from productos where codProd in($texto_in)";
	$resul = mysqli_query($bd,$ins);	
	if (!$resul) {
		return FALSE;
	}
	return $resul;	
}
function insertar_pedido($carrito, $codRes){
	$bd=mysqli_connect("localhost","root","","pedidos");
	$hora = date("Y-m-d H:i:s", time());
	// insertar el pedido
	$sql = "insert into pedidos(fecha, enviado, restaurante) 
			values('$hora',0, $codRes)";
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
	$bd = mysqli_connect("localhost","root","","pedidos");
	$sql = "SELECT count(*) FROM fotos WHERE num_ident=$codProducto";
	$resultado = $bd->query($sql);

	$unicaFila = $resultado -> fetch_array();
	$numero = $unicaFila[0];
	
	return $numero;
}

