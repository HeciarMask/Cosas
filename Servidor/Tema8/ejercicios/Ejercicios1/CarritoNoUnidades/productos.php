<?php
require_once("base.php");
require_once("CestaCompra.php");
session_start();
echo '<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Tarea 5: Listado de Productos con Plantillas</title>
    <link href="tienda.css" rel="stylesheet" type="text/css">
  </head>';
// Recuperamos la información de la sesión
// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION["usuario"]))
	die("debe <a href=login.php>Iniciar sessión</a>");
// Recuperamos la cesta de la compra
$cesta=CestaCompra::carga_cesta();
// Comprobamos si se ha pulsado el botón de vaciar  cesta
if (isset($_POST["vaciar"]))
{
	unset ($_SESSION["cesta"]);
	$cesta=new CestaCompra();
}
// Comprobamos si se quiere añadir un producto a la cesta
if (isset($_POST['enviar']))
	{
	$cesta->nuevo_articulo($_POST["cod"]);
	$cesta->guarda_cesta();
	}
//mostrar los productos que hay en la cesta
$productosCesta=$cesta->get_productos();
echo '
  <body class="pagproductos">
    <div id="contenedor">
      <div id="encabezado">
        <h1>Listado de productos</h1>
      </div>
<div id="cesta" style="text-align:center">  ';    
echo "<h3><img src='cesta.png' alt='Cesta' width='24' height='21'> Cesta</h3>
<hr />";
//echo "aqui sale la cesta";
foreach ($productosCesta as $valor)
{
echo $valor->getCodigo()."<br>";
}
if (!$cesta->vacia())
	echo "Suma....".$cesta->get_coste();	
echo "<form action='productos.php' method='post'>";
echo "<input type='submit' name='vaciar' class='boton' value='Vaciar Cesta'".
 "/></form>";
 echo "<form id='comprar' action='cesta.php' method='post'>";
 echo "<input type='submit' name='comprar' class='boton' value='Comprar'".
 "/></form>";

echo "</div>";
echo '<div id="productos">';
//listado de productos
//echo "aqui salen los productos";
 $productos=base::obtieneProductos();
  echo '<table cellspacing="5" cellpadding="5" >';
 foreach ($productos as $producto)
 {
 echo "<tr><form action='productos.php' method='post'>";
 echo "<input type='hidden' name='cod' value='".$producto->getCodigo()."'>";
 echo "<td><input type='submit' class='boton' name='enviar' value='Añadir'></td><td>";
      echo $producto->getnombrecorto();      
      echo "</td><td>".$producto->getPVP()."€</form></td></tr>";
 }  
 echo "</table>";
 /*
 echo "<pre>";
 print_r($_SESSION["cesta"]);
 echo "</pre>";
 echo "<pre>";
 print_r($productosCesta);
 echo "</pre>";*/
echo '</div>
  
      <br class="divisor" />
      <div id="pie">';
      echo "  <form action='logoff.php' method='post'>
        
          <input type='submit' name='desconectar' class='boton' style='width:100%;' value='Desconectar usuario '/>
        </form>        
      </div>
    </div>
  </body>
</html>";
?>