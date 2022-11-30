
<?php
include('funciones.php');
require_once("funcionesBD.php");
cabecera('Alumnos');
echo "<div id=\"contenido\">";

?>
<body> 
<html>
	<head></head>
	<body>
		<form name="formulario" method="post" action="formularioIntroduccion.php">
		<table><tr><th colspan='2'>Introducción de datos</th></tr>
		<tr><td>Seleccione año:</Td>
		<td><input type="radio"  name="anno" value="2019/2020">2019/2020<br/>
			<input type="radio"  name="anno" value="2020/2021">2020/2021<br/>
			<input type="radio"   name="anno" value="2021/2022">2021/2022<br/>
			<input type="radio"   name='anno' value="2022/2023" checked>2022/2023<br/>
		</td></tr>
		<tr><td>Seleccione curso:</td>
		<td>
		<?php
			$arrayCursos = array();
			$conexion = new mysqli("localhost", "root", "", "preparadasb");
			$cadSql1 = "SELECT id, nombre FROM cursos";
			$resultado1 = $conexion->query($cadSql1);
			while($fila1 = $resultado1->fetch_assoc()){
				extract($fila1);
				$arrayCursos[$id] = $nombre;
			}
			$cadCombo = pintarCombo($arrayCursos, "curso");

			echo $cadCombo;
		?>
		</td></tr>
		<tr><td colspan='2' align='center'><input name="envio" value="enviar" type="submit"></td></tr>
		</table>
		
		
		</form>
		
		
	</body>
</html>
