<html><head><title>Visualizar alumnos</title></head>
<body>
<form action="listarAlumnos.php" method="POST">
<select name="modulo">
<?php
foreach ($modulos as $modulo){
	echo "<option value=".$modulo->getId().">".$modulo->getNombre()."</option>";
}
			      
 ?>	  
</select>
<input type="hidden" name="profe" value="<?=$nombreProfesor?>">
<input type="submit" value="Ver alumnos "/>
</form>	  
<br><br>
<a href='datos_index.php'>Volver al Menú de Opciones</a><br>
</body></html>