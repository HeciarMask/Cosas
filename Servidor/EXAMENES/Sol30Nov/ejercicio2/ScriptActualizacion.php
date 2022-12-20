<?php $conexion=new mysqli ("localhost","root","","preparadasb"); extract($_POST);echo "<pre>";print_r($_POST);echo "</pre>";$consulta=$conexion->stmt_init();$consulta->prepare("INSERT INTO  alumnos_cursos VALUES(?,?,?)");
foreach ($idAlumno as $valor){ 
	echo $idcurso," ",$valor," ",$año,"<br>";	$consulta->bind_param('iis',$idcurso,$valor,$año);	$consulta->execute();	
} $conexion->close(); header ("Location:formulario.php");?> 
