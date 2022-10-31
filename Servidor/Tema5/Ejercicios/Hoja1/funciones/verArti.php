<?php
include('funciones.php');
cabecera('Ver precios');
echo "<div id=\"contenido\">\n";
$conexion=mysqli_connect("localhost","root","","ejercicio6");
mysqli_set_charset($conexion,"utf8");
if (!isset($_POST["envio"])){
//combo de artículos
	$sqlArti="SELECT A.codart, ";
	$sqlArti.="CONCAT(A.CODART,\" \",A.DESCRIPCION) AS muestra";
	$sqlArti.=" FROM ARTICULOS A";
	$resultadoArti=mysqli_query($conexion,$sqlArti);
// formulario
	echo "<form action='#' method='POST'>";
	echo "Artículo:<select name='articulo'>";
	while ($fila=mysqli_fetch_assoc($resultadoArti)){
		extract($fila);
		echo "<option value='".$codart."'>".$muestra."</option>";
	}
	echo "</select><br>";
	echo "<input type='submit' name='envio' value ='Enviar'>";
	echo "</form>";
}
else{
	$codArticulo=$_POST["articulo"];
	//pARA LA CABECERA
	$sql1="SELECT descripcion FROM articulos WHERE CODART='".$codArticulo."'";
	$resultado1=mysqli_query($conexion,$sql1);
	$fila1=mysqli_fetch_assoc($resultado1);
	echo "<h3>Listado de precios de: ".$fila1["descripcion"]."</h3>";
	//para sacar los precios
	$sql = "SELECT s.COD_SUPER,s.DENOMINACION,s.DIRECCION,p.PRECIO";
    $sql.= " FROM super S INNER JOIN precios p ON s.COD_SUPER=p.super";
	$sql.= " WHERE p.cod_art='".$codArticulo."' ORDER BY p.precio";
	$resultado=mysqli_query($conexion,$sql);
	if (mysqli_num_rows($resultado)>0){
		while ($fila=mysqli_fetch_assoc($resultado)){
			extract($fila);
			echo "<p> $COD_SUPER,$DENOMINACION,$DIRECCION,$PRECIO</p>";
		}
	}
	else{
		echo "sin datos";
	}
	
}

echo "</div>";
pie();
?>




