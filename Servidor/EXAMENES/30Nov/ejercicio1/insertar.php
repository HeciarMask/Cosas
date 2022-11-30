<?php
$conexion = new mysqli("localhost", "root", "", "parte2");
mysqli_set_charset($conexion,"utf8");

if(isset($_POST["actualiza"])){
    echo "<div id='encabezado'>
    <h1>  Insertar Venta</h1>
    </div>";
    extract($_POST);
    if($cliente == "" || $unidades == "")
        echo "Debe seleccionar un cliente, y las unidades deben ser mayor que 0.";
    else{
	    mysqli_query($conexion, "INSERT INTO venta_prod VALUES ('$cliente','$producto','$unidades','$fecha')");

        echo "Insert Realizado";
    }

    echo "<br><a href='parte1.php'>Página Inicial </a>";
}else{
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
<h1>  Nueva venta</h1>
</div>
<h1>
    Producto:<?php
    require_once("funcionesBD.php");
    extract($_GET);
    echo obtenerValorColumna("productos", "cod_producto", $producto, "descripcion");
    
    ?>
</h1>
	
<form method='post'><fieldset><legend>Cliente: </legend>

<?php
    $arrayClientes = obtenerArrayOpciones("clientes", "nif", "nombre");
    $cadCombo = pintarCombo($arrayClientes, "cliente");
    echo $cadCombo;
?>

<legend>Unidades: </legend>
<input type='text' name='unidades' /><br>
<legend>Fecha: </legend>
<input type='text' style='color: #F00;background-color: #ccc;' name='fecha' value='<?=date("Y/m/d")?>'  />
<?php
echo "<input type='hidden' name='producto' value='$producto'>"
?>
<input type='submit' value='Selección' name='actualiza' />
<input type='submit' value='cancelar' name='cancela' />
</fieldset>
<form>

<br><a href="parte1.php">Página Inicial </a>
</div>		
<?php
}
?>