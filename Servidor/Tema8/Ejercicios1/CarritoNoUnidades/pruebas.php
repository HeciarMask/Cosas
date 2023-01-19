<?php 
require_once('Producto.php');
require_once('base.php');
$losProductos=base::obtieneProductos();
foreach ($losProductos as $valor)
{
echo $valor->getNombreCorto()."<br>";
}
echo "<pre>";
print_r($losProductos);
echo "</pre>";
$elProducto=base::obtieneProducto("ARCLPMP32GBN");
echo $elProducto->getPvp()."<br>";
echo "<pre>";
print_r($elProducto);
echo "</pre>";
if (base::verificaCliente('Administrador','admin'))
	echo "existe";
else
	echo "no existe";
?>