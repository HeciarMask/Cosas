<?php
require 'sesiones.php';
comprobar_sesion();
include_once "./vendor/autoload.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$html=$_SESSION["hecho"];
$dompdf->loadHtml($html);
$dompdf->render();

/*
$dompdf->stream("pedido.pdf");

$contenido = $dompdf->output();
$nombreDelDocumento = "pedido.pdf";
$bytes = file_put_contents($nombreDelDocumento, $contenido);
*/

header("Content-type:application/pdf");
?>
