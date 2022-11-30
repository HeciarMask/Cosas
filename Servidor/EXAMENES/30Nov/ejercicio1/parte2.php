<?php
if (!isset($_POST['opcion']))header("Location:parte1.php");

require_once("funcionesBD.php");

extract($_POST);

$conexion = new mysqli("localhost", "root", "", "parte2");
mysqli_set_charset($conexion,"utf8");
$cadSql1 = "SELECT desc_linea FROM lineas WHERE cod_linea='$opcion'";
$resultado1 = $conexion->query($cadSql1);
$fila1 = $resultado1->fetch_assoc();
$nombrePet = $fila1["desc_linea"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ejercicio 1</title>        
<link href="examen.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="encabezado">
<h3>Consulta de la línea: <?php echo $nombrePet;?></h3></div>
<div id="contenido">
<table>
<?php
$cadItems = array();
$cadSql2 = "SELECT cod_producto, descripcion, precio FROM productos WHERE linea_producto = '$opcion'";
$resultado2 = $conexion->query($cadSql2);
while($fila2 = $resultado2->fetch_assoc()){
    extract($fila2);
echo "
<tr>
    <td>$cod_producto $descripcion Precio: $precio <a href='insertar.php?producto=$cod_producto'>Nueva Venta</a></td>";
    
    $cadSql3 = "SELECT nif, unidades, fecha FROM venta_prod WHERE cod_producto='$cod_producto'";
    $resultado3 = $conexion->query($cadSql3);
    if($fila3 = $resultado3->fetch_assoc()){
    echo "<td><table border='solid'>
    <tr>
        <td>NIF</td><td>NOMBRE</td><td>UNIDADES</td><td>FECHA</td>
    </tr>";
    
        while($fila3){
            extract($fila3);
            $nombreNif = obtenerValorColumna("clientes", "nif", $nif, "nombre");
            echo "<tr><td>$nif</td><td>$nombreNif</td><td>$unidades</td><td>$fecha</td></tr>";
            $fila3 = $resultado3->fetch_assoc();
        }
        
        echo "</table></td></tr>";
    }else{
        echo "<td>No tiene ninguna fila.</td>";
    }
    



}
?>
</table>


<a href="parte1.php">Otra Consulta </a>	</div>	