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
<div id="contenido">	
<?php
session_start();
if (isset($_POST["cancela"]))
	header("location:parte1.php");
require_once("funcionesBD.php");
$conexion=new mysqli('localhost', 'root', '', 'parte2');
$conexion->set_charset("utf8");
if (!isset($_POST["nif"]))
	{$clientes=obtenerArrayOpciones("clientes","nif","nombre");		
	$codigo=$_GET["codigo"];
	$nombreproducto= obtenerValorColumna("productos","cod_producto",$codigo,"descripcion");
	echo'
		<div id="contenido">
		<h2>Producto:'.$nombreproducto.'</h2>';
	echo "<form   method='post'><fieldset><legend>Cliente: </legend>";
	pintarComboMensaje($clientes,"nif","Seleccione",0);			
	$fecha=date("Y/m/d");
	?>
	<br>
	<legend>Unidades: </legend>
	<input type='text' name='unidades' /><br>
	<legend>Fecha: </legend>
	<input type='text' style='color: #F00;background-color: #ccc;' name='fecha' 
	value=<?= $fecha?> />
	<input type="hidden" name='producto' value=<?php echo $codigo;?>>
	<input type='submit' value='Selección' name='actualiza' />
	<input type='submit' value='cancelar' name='cancela' />
	</fieldset>
	<form>
	</div>
<?php
	}
else{
	$errores=array();
	extract($_POST);
	if ($nif==0) 
		$errores[]="Debe seleccionar un cliente";
	if ( ($unidades==null) || ($unidades==0) )
		$errores[]="las unidades han de ser >0";
	if (count($errores)==0)	{			
			$sqlExiste="SELECT nif FROM venta_prod where nif='$nif' AND cod_producto='$producto' AND fecha='$fecha'";
			$resultado = $conexion->query($sqlExiste);
			if ($fila=$resultado->fetch_assoc()){
				$mensaje= "Se ha cambiado el valor de unidades";
				$actu="UPDATE venta_prod SET unidades=$unidades WHERE cod_producto=".$producto." and nif='".$nif."'"." and fecha='".$fecha."'";
				$resultado = $conexion->query($actu);
			}
			else{
				 $mensaje="Insert realizado";
				 $sql="INSERT INTO venta_prod values ('".$nif."',".$producto.",".$unidades.",'".$fecha."')";
				$resultado = $conexion->query($sql);
         
			}
			
}	
			
	else{
			$mensaje=implode(",",$errores);
		}
		
	echo $mensaje;
}

?>

<br><a href="parte1.php">Página inicial </a>
		
					
					