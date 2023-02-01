<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<html><head><title>Matricular alumnos</title></head>
<body>


	INSERTE LOS DATOS NECESARIOS:<BR><BR>
	
	<!-- Formulario básico estándar HTML para enviar datos GET a una página PHP -->
	<form method="post" action="../Controller/datos_matriculas.php">
	<p>	 <select name="idAlumno">
	 <?php 
	foreach ($losAlumnos as $alumno){
			
			echo "<option value=".$alumno->getId().">".$alumno->getNombre()."</option>";
			
						
		}	
?>	
</select></p>
<p>	 <select name="idModulo">
<?php
foreach ($losModulos as $id=>$nombre){
	echo "<option value=".$id.">".$nombre."</option>";
}
			      
 ?>	  
</select></p>
	  <input type="submit" value="Matricular alumno">
	</form>


<br><br>
<a href='datos_index.php'>Volver al Menú de Opciones</a><br>



</body></html>

</body>
</html>