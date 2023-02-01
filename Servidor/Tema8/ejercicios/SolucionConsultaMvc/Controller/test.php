<?php 
require_once("../Model/base.php");

//CONTROLAR QUE SE HAYA SELECCIONADO ALGUN TIPO o la consulta no devuelve ningún registro
//	require_once("../Vista/error.php");	
// si hay datos	require_once("../Vista/verDatos.php");

/* echo "<pre>";
print_r($_POST);
echo "</pre>"; */

if(!isset($_POST['tipos'])){
	$mensaje = "Debe seleccionar un tipo de vivienda";
	require_once("../Vista/error.php");
}else{
	$lasViviendas = Base::ObtieneViviendas($_POST['calle'], $_POST['tipos']);

	if(count($lasViviendas) == 0){
		$mensaje = "No existen viviendas que cumplan ese criterio";
		require_once("../Vista/error.php");
	}else{
		require_once("../Vista/verDatos.php");
	}
}
?>