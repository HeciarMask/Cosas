<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 1</title>        
        <link href="examen.css" rel="stylesheet" type="text/css">
    </head>
    <body>
  
		<div id="encabezado">

<?php
session_start();
if (!isset($_POST["codigolinea"])){

if($_SESSION["contador"]>0)
	$_SESSION["contador"]--;
    header("location:parte1.php");

}
require_once("funcionesBD.php");
$conexion=new mysqli('localhost', 'root', '', 'parte2');
$conexion->set_charset("utf8");
$cod=$_POST["codigolinea"];
$nombrelinea= obtenerValorColumna("lineas","cod_linea",$cod,"desc_linea");
echo "<h3>Consulta de la línea: ".$nombrelinea."</h3><div>";
echo '<div id="contenido">';


$sql = "SELECT * FROM productos WHERE linea_producto='".$cod."'";
$resultado = $conexion->query($sql);
while($row = $resultado->fetch_assoc()) {
	extract($row);
	echo "<p>".$cod_producto." ".$descripcion."  </b>Precio:<b>  ".$precio."</b>  ";
	echo "<a href=insertar.php?codigo=".$cod_producto.">Nueva Venta</a></p>";
	$sql = "select clientes.nif,clientes.nombre,venta_prod.unidades,venta_prod.fecha
		from clientes inner join venta_prod on clientes.nif=venta_prod.nif
		where venta_prod.cod_producto=$cod_producto";
        $resultSet = $conexion->query($sql);
	echo "<center>".mostrarSelect($resultSet)."</center>";
		
 }

?>
<a href="parte1.php">Otra Consulta </a>		