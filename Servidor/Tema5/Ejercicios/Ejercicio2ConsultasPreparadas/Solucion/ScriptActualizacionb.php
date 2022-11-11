<?php echo "<pre>";print_r($_POST);echo "</pre>";
$base="examen"; $conexion=new mysqli ("localhost","root","",$base); $conexion->set_charset("utf8");$sentencia=$conexion->stmt_init();$sentencia->prepare("UPDATE modulos SET num_creditos=?         WHERE Departamento=? AND curso=?");$arrayCreditos=$_POST["creditos"];$arrayDeptos=$_POST["depto"];$arrayCursos=$_POST["curso"];
foreach ($arrayCreditos as $indice=>$valor)	{ 		$creditos=$valor;		$depto=$arrayDeptos[$indice];		$curso=$arrayCursos[$indice];		$sentencia->bind_param("iss",$creditos,$depto,$curso);		$sentencia->execute();			}$conexion->close();header("Location:formularioactualizacionb.php");
?> 
