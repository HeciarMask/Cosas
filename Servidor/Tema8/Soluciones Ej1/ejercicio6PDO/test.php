<?php
require_once('./include/base.php');
require_once ('./include/articulo.php');
echo "<html><head></head><body>";
/* primer test*/
echo "<p><b>probar obtieneArticulos</b></p>";
$mis_articulos=miclase::obtieneArticulos();

echo "<table border='1'>";
	echo "<tr><th>codigo</th><th>nombre</th><th>descripcion</th><th>precio</th><tr>";
foreach ($mis_articulos as $valor)

{echo "<tr><td>".$valor->getcodigobarras()."</td><td>".$valor->getnombre()."</td><td>".$valor->getdescripcion()."</td><td>".$valor->getprecio()."</td></tr>";}
echo "</table>";
/* segundo test*/
echo "<p><b>probar obtieneArticulos(codigo)</b></p>";
$mi_articulo=miclase::obtieneArticulo(1234567890123);

echo "<table border='1'>";
echo "<tr><th>codigo</th><th>nombre</th><th>descripcion</th><th>precio</th><tr>";


{echo "<tr><td>".$mi_articulo->getcodigobarras()."</td><td>".$mi_articulo->getnombre()."</td><td>".$mi_articulo->getdescripcion()."</td><td>".$mi_articulo->getprecio()."</td></tr>";}

echo"</table>";
/* tercer test*/
echo "<p><b>probar verificausuario(usuario,contrasena)</b></p>";
echo miclase::verificausuario('admin','admin');
/* cuarto test*/
echo "<p><b>probar insertar</b></p>";
$fila=array();
$fila['codigobarras']='934459090';
$fila['nombre']='consola ll';
$fila['descripcion']='la nueva';
$fila['precio']=120;
$mi_articulo=new Articulo($fila);
echo miclase::InsertaArticulo($mi_articulo);
/*muestro todos de nueo para comprobar la insercion correcta*/
$mis_articulos=miclase::obtieneArticulos();
echo "<table border='1'>";
	echo "<tr><th>codigo</th><th>nombre</th><th>descripcion</th><th>precio</th><tr>";
foreach ($mis_articulos as $valor)

{echo "<tr><td>".$valor->getcodigobarras()."</td><td>".$valor->getnombre()."</td><td>".$valor->getdescripcion()."</td><td>".$valor->getprecio()."</td></tr>";}
echo "</table>";
echo "</body></html>";
?>
