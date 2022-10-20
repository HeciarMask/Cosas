<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : Trabajar con bases de datos en PHP -->
<!-- Ejemplo: Consultas preparadas con MySQLi -->
<!-- A partir de la página web obtenida en el ejercicio anterior,(mostrar_resultado.php) añade
 la opción de modificar el número de unidades del producto en cada una de las tiendas. Utiliza una consulta preparada
para la actualización de registros en la tabla stock. No es necesario tener en cuenta las tareas
de inserción (no existían unidades anteriormente) y borrado (si el número final de unidades
es cero
-->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Ejercicio Tema 10: Consultas preparadas en MySQLi</title>
<link href="dwes.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
@ $dwes = new mysqli("localhost", "root", "", "dwes");
$error=0;
if (!isset($_POST['enviar']) && !isset($_POST['actualiz']) )
{	
	
	echo "<div id=\"encabezado\">
<h1>Ejercicio: Consultas preparadas con MySQLi</h1>
<form id=\"form_seleccion\" action=\"preparadas.php\" method=\"post\">
<span>Producto: </span>
<select name=\"producto\">
";
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
		$resultado->close();
	}
	echo"</select><input type=\"submit\" value=\"Mostrar stock\" name=\"enviar\"/>
</form>
</div>";

}else
{
// Si se recibió un código de producto y no se produjo ningún error
//  mostramos el stock de ese producto en las distintas tiendas
if (! isset($_POST['actualiz'])) 
{
echo "<div id=\"contenido\">";
$producto = $_POST['producto'];
echo "<h2>Stock del producto ". $producto." en las tiendas:</h2>";
// Ahora necesitamos también el código de tienda
	$sql = <<<SQL
	SELECT tienda.cod, tienda.nombre, stock.unidades
	FROM tienda INNER JOIN stock ON tienda.cod=stock.tienda
	WHERE stock.producto='$producto'
SQL;
	$resultado = $dwes->query($sql);
	if($resultado) 
	{
	// Creamos un formulario con los valores obtenidos
		echo '<form id="form_actualiz" action="preparadas.php" method="post">';
		$row = $resultado->fetch_assoc();
		while ($row != null)
		{
			// Metemos ocultos el código de producto y los de las tiendas
			echo "<input type='hidden' name='producto' value='$producto'/>";
			echo "<input type='hidden' name='tienda[]' value='".$row['cod']."'/>";
			echo "<p>Tienda ${row['nombre']}: ";
			// El número de unidades ahora va en un cuadro de texto
			echo "<input type='text' name='unidades[]' size='4' ";
			echo "value='".$row['unidades']."'/> unidades.</p>";
			$row = $resultado->fetch_assoc();
		}
		$resultado->close();
		echo "<input type='submit' value='Actualizar' name='actualiz'/>";
		echo "</form>";
	}
}
else
{
	// Preparamos la consulta
		$tienda = $_POST['tienda'];
		$unidades = $_POST['unidades'];
		$producto=$_POST['producto'];
		$consulta = $dwes->stmt_init();
		$sql    =    "UPDATE    stock    SET    unidades=?    WHERE    tienda=?    AND
					producto='$producto'";
		$consulta->prepare($sql);
		// La ejecutamos dentro de un bucle, tantas veces como tiendas haya
		for($i=0;$i<count($tienda);$i++)
		{
			$consulta->bind_param('ii', $unidades[$i], $tienda[$i]);
			$consulta->execute();
		}
		
		$mensaje = "Se han actualizado los datos. Otra  consulta  ";
		$consulta->close();
		echo "<h2>$mensaje<a href=\"preparadas.php\"> aqu&iacute;</a></h2>";
		
}
}	
echo"
</div>";
unset($dwes);


?>

</body>
</html>
