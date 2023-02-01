<?php
require_once("base.php");
require_once("CestaCompra.php");
session_start();
echo '<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Tarea 5: Listado de Productos con Plantillas</title>
    <link href="tienda.css" rel="stylesheet" type="text/css">
  </head><body>';
  if (!isset($_SESSION["usuario"]))
	die("debe <a href=login.php>Iniciar sessión</a>");
  $cesta=CestaCompra::carga_cesta();
  if ($cesta->vacia())
	die ("<a href=productos.php>Cesta vacía</a>");
  $productosCesta=$cesta->get_productos();
  echo "<p>Compra realizada</p>";
  foreach ($productosCesta as $valor)
  {
	echo "<li>".$valor->getnombrecorto(). " ".$valor->getPVP();
	
  }
  echo "</ol>";
  $costeTotal=$cesta->get_coste();
  echo "<p>Total a pagar: ".$costeTotal;
  echo "<p><a href=logoff.php>Salir</a>";