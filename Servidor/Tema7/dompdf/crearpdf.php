<?php
ini_set("memory_limit", "80M");
require_once("dompdf/dompdf_config.inc.php");
$base = "pedidosejemplo";
$consulta = "SELECT CLIENTE, FECHA FROM pedidos";
$consulta .= " WHERE NUM_PEDIDO='1'";
$c = mysqli_connect("localhost", "root", "", $base);
$resultado = mysqli_query($c, $consulta);
$mivar = "<html><body><h1><center>Listado de puntuaciones</center></h1>";
$mivar .= "<table align=center border=2><tr>";
$mivar .= "<td colspan=4 align=center> Datos personales</td>";
$mivar .= "<td align=center>Prueba 1</td>";
$mivar .= "<td align=center>Prueba 2</td>";
$mivar .= "<td align=center>Prueba 3</td>";
$mivar .= "<td align=center>Puntos Totales</td>";
$salida = mysqli_fetch_assoc($resultado);

$mivar = $salida["CLIENTE"] . " + " . $salida["FECHA"];

$dompdf = new DOMPDF();
$dompdf->load_html($mivar);
$dompdf->render();
$dompdf->stream("formulario.pdf", array("Attachment" => 0));
