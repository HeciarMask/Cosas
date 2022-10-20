<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : Trabajar con bases de datos en PHP -->
<!-- Ejemplo: Conjuntos de datos con MySQLi -->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Ejercicio Tema 3: Conjuntos de resultados en MySQLi</title>
<link href="dwes.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="encabezado">
<h1>Ejercicio: Conjuntos de resultados en MySQLi</h1>
<form id="form_seleccion" action="mostrar_resultado.php" method="post">

<?php
if (!isset($_POST['enviar']))
{ // Rellenamos el desplegable con los datos de todos los productos
	echo "<span>Producto: </span>
	<select name=\"producto\">";
	@ $dwes = new mysqli("localhost", "root", "", "dwes");
	$sql = "SELECT cod, nombre_corto FROM producto";
	$resultado = $dwes->query($sql);
	if($resultado) 
		{
			$row = $resultado->fetch_assoc();
			while ($row != null)
			{
				echo "<option value='${row['cod']}'";
				echo ">${row['nombre_corto']}</option>";
				$row = $resultado->fetch_assoc();
			}
			echo "</select>";
			echo "<input type=submit value='Mostrar stock' name='enviar'></form></div>";
			$resultado->close();
			unset($dwes);
		}
	
}
else
{ 
    $producto=$_POST['producto'];
	echo "<div id=\"contenido\">";
	echo "<h2>Stock del producto en las tiendas:</h2>";
	$sql = "
	SELECT tienda.nombre, stock.unidades
	FROM tienda , stock WHERE tienda.cod=stock.tienda
	AND stock.producto='$producto'";
	@ $dwes = new mysqli("localhost", "root", "", "dwes");
	$resultado = $dwes->query($sql);
	if($resultado) 
	{
		$row = $resultado->fetch_assoc();
		while ($row != null)
		{
			echo "<p>Tienda ${row['nombre']}: ${row['unidades']} unidades.</p>";
			$row = $resultado->fetch_assoc();
		}
		$resultado->close();
		$dwes->close();
		unset($dwes);
	}
}
echo "</div>";
?>
</div>
</body>
</html>

