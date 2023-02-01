<html>
<head>
<title></title>
</head>
<body>
	<p>Alumnos Matriculados en el módulo:<?=$elModulo->getNombre()?>, Duración: <?=$elModulo->getDuracion()?> </p>
	<p>Profesor: <?=$profe?></p>
	<table border='1'><tr><td>Nombre</td></tr>
<?php 
	foreach ($alumnos as $alumno){
			
			echo "<tr>";
				echo "<td>".$alumno->getNombre()."</td>";
						
		}	
?>	
</tr></table>	
<br><br>
<a href='datos_index.php'>Volver al Menú de Opciones</a><br>
</body></html>