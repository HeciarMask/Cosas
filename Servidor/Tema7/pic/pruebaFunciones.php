<?php 
    require_once("bd.php");
    echo "Probar comprobar_usuario existente";
	$filaRestaurante=comprobar_usuario("madrid1@empresa.com", "1234");
	echo "<pre>";
	print_r($filaRestaurante);
	echo "</pre>";
	echo "<br>Probar comprobar_usuario inexistente";
	echo comprobar_usuario("madrid1@empresa.com", "13234");
	echo "<br>Probar cargar_categorias";
	$resultCategorias=cargar_categorias();
	echo "<pre>";
	print_r($resultCategorias);
	echo "</pre>";
?>