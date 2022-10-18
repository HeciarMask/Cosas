<?php 
include("datos2.php");
if(isset($_POST['seleccion_sexo'])){
	$sexo = $_POST['seleccion_sexo'];
	$orden = $_POST['orden'];
	$lista = array();

	if($sexo != 'M' && $sexo != 'H'){
		foreach($datos as $lista1){
			$lista[$lista1["nombre"]] = $lista1["edad"];
		}
	}else{
		foreach($datos as $lista1){
			if($lista1["sexo"] == $sexo){
				$lista[$lista1["nombre"]] = $lista1["edad"];
			}
		}
	}
	
	if($orden == 'A'){
		asort($lista);
	}elseif($orden == 'D'){
		arsort($lista);
	}

	echo "
		<table border='solid'>
		<tr>
		<th>Sexo: ";

		if($sexo != 'M' && $sexo != 'H'){
			echo "Todos";
		}else{
			if($sexo == 'M')
				echo "Mujer";
			else
				echo "Hombre";
		}

	echo "</th>
		<th>Orden: ";

		if($orden == 'A')
			echo "Ascendente";
		else
		echo "Descendente";

	echo "</th>
	</tr>
			<tr>
				<th>Nombre</th>
				<th>Edad</th>
			<tr>
	";
	foreach($lista as $indice1 => $valor1){
		echo "
			<tr>
				<td>$indice1</td>
				<td>$valor1</td>
			</tr>
		";
	}
	echo "
		</table>
	";

}else{echo '<form action="ejercicio2.php" method="POST" >';
	echo '<table  align=center >';
	echo'<tr>';
	echo '<td rowspan="4" align="left">Criterio: </td>';
	echo "<tr><td><input type='radio' name='seleccion_sexo' value='0' checked>Todos</td></tr>";
	echo "<tr><td><input type='radio' name='seleccion_sexo' value='M'>Mujeres</td></tr>";
	echo "<tr><td><input type='radio' name='seleccion_sexo' value='H'>Hombres</td></tr>";
	echo"<tr><td colspan='2'><hr></td></tr>";
	echo '<td rowspan="3" align="left">Orden: </td>';
	echo "<tr><td><input type='radio' name='orden' value='A' checked>Ascendente</td></tr>";
	echo "<tr><td><input type='radio' name='orden' value='D'>Descendente</td></tr>";
	
	echo '<tr><td colspan="2" align="center" ><input type=submit name ="envio" value="Consultar"></td>';
	echo '</tr></table></form>';
}
?>