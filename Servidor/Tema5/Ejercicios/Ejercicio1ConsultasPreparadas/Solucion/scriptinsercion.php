
<?php 
include('funciones.php');
cabecera('Resultado de la inserción');
echo "<div id=\"contenido\">\n";
/* Así tenemos en la variable $lafecha la fecha introducida en meter_faltas.php
en el formato para grabarlo correctamente en mysql:
echo "<pre>";
print_r($_POST);
echo "</pre>";*/
$lafecha=date ("Y-m-d", mktime (0, 0, 0, $_POST['dia'],$_POST['mes'],$_POST['anno']));
$arrayClaves=$_POST["inserta"];
$contadorAltas=0;
$dwes=new mysqli("localhost","root","","examen2");
$sentencia=$dwes->stmt_init();
$cadInsert="INSERT INTO faltas VALUES(?,?)";
$sentencia->prepare($cadInsert);
foreach ($arrayClaves as $clave=>$valor)
{
	$cadSelect="SELECT COUNT(*) FROM faltas WHERE id_alum=".$clave." AND fecha= '".$lafecha."'";
	$result=$dwes->query($cadSelect);
	$fila=$result->fetch_array();
	$numfilas=$fila[0];
	if ($numfilas==0)
	{
		$contadorAltas++;
		$sentencia->bind_param('is',$clave,$lafecha);
		$sentencia->execute();
	}
}
echo "Se grabaron $contadorAltas filas";
echo "</div>";
pie();
?>
