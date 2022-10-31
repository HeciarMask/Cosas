<?php
include('funciones.php');
cabecera('Introducir precios');
echo "<div id=\"contenido\">\n";
$conexion=mysqli_connect("localhost","root","","ejercicio6");
mysqli_set_charset($conexion,"utf8");
//combo de artículos
$sqlArti="SELECT A.codart, ";
$sqlArti.="CONCAT(A.CODART,\" \",A.DESCRIPCION) AS muestra";
$sqlArti.=" FROM ARTICULOS A";

$resultadoArti=mysqli_query($conexion,$sqlArti);
//COMBO DE SUPERMERCADOS
$sqlSuper = "SELECT S.cod_super,";
$sqlSuper.=" CONCAT(S.COD_SUPER,\" \",S.DENOMINACION) AS muestra";
$sqlSuper.=" FROM SUPER S";
$resultadoSuper=mysqli_query($conexion,$sqlSuper);

echo "<form action='procesoPrecio.php' method='POST'>";
echo "Supermercado:<select name='supermercado'>";
while ($fila=mysqli_fetch_assoc($resultadoSuper)){
	extract($fila);
	echo "<option value='".$cod_super."'>".$muestra."</option>";

}
echo "</select><br>";
echo "Artículo:<select name='articulo'>";
while ($fila=mysqli_fetch_assoc($resultadoArti)){
	extract($fila);
	echo "<option value='".$codart."'>".$muestra."</option>";

}
echo "</select><br>";
echo "Precio: <input type='text' name='precio'><br>";
echo "<input type='submit' value ='Enviar'>";
echo "</form>";
echo "</div>";
pie();
?>




