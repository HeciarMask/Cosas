
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lineas</title>
<link href="examen.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="encabezado">
<h1>Seleccione la línea.Consulta nº </h1>
</div>
<div id="contenido">
<form  action="parte2.php" method="post">
<b>Linea: <br></b>
<?php
require_once("funcionesBD.php");

$arrOpciones = array();
$conexion = new mysqli("localhost", "root", "", "parte2");
$cadSql = "SELECT cod_linea, desc_linea FROM lineas";
$resultado = $conexion->query($cadSql);
while($fila = $resultado->fetch_assoc()){
    $arrOpciones[$fila["cod_linea"]] = $fila["desc_linea"];
}
echo pintarRadio($arrOpciones, "opcion");

?>
<input type="submit" value="Mostrar" name="enviar"/>
</form>
</div>
</body>
</html>