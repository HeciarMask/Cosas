<html>
<body>
<a href="formulario_examen.php">Volver al formulario</a><br>
</body>
</html>

<?php
	$conexion = new mysqli("localhost", "root", "", "candidatos");
	$conexion->set_charset("utf8");
	include("funcionesBD.php");
	/*
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	*/
	extract($_POST);

	if($dni == "")
	{
		echo "Debe introducir un DNI";
	}
	else
	{
		$sexoSeleccionado = "";
		if($sexo == "1")
		{
			$sexoSeleccionado = "H";
		}
		else
		{
			$sexoSeleccionado = "M";
		}

		// CANDIDATOS
		$resultadoCandidato = $conexion->query("SELECT * FROM candidatos WHERE dni = '$dni'");
		
		$numFilasCand = $resultadoCandidato->num_rows;
		
		if($numFilasCand == 0)
		{
			// El DNI no estaba en la tabla candidatos
			// Metemos el candidato nuevo en la tabla.
			$resultadoInsertCandidato = $conexion->query("INSERT INTO candidatos (DNI, Nombre, Apellido1, Sexo, Fumador) VALUES ('$dni', '$nombre', '$apellido', '$sexoSeleccionado' ,'$fumador')");
			if($resultadoInsertCandidato)
			{
				echo "Nuevo candidato introducido en la base de datos.<br>";
			}
		}
		else
		{
			// Si ya estaba el dni, hay que actualizar el candidato en la tabla con los nuevos datos.
			$resultadoUpdateCandidato = $conexion->query("UPDATE candidatos SET Nombre = '$nombre', Apellido1 = '$apellido', Sexo = '$sexoSeleccionado', Fumador = '$fumador' WHERE dni = '$dni'");
			echo "Candidato actualizado<br>";
		}


		// PROGRAMA
		$resultadoPrograma = $conexion->query("SELECT * FROM programa WHERE dni = '$dni'");
		
		$numFilasProg = $resultadoPrograma->num_rows;
		
		if($numFilasProg == 0)
		{
			// El DNI no estaba en la tabla programas
			$consultaInsert = $conexion->stmt_init();
			$consultaInsert->prepare("INSERT INTO programa (DNI, IdTecno) VALUES ('$dni', ?)");
			foreach ($idiomas as $idIdioma) 
			{
				$id = $idIdioma;
				$consultaInsert->bind_param('i', $id);
				$consultaInsert->execute();
			}

			echo "Nuevos datos introducidos en la tabla programas.<br>";
			$consultaInsert->close();
			
		}
		else
		{
			// El DNI se encuentra en la tabla programas y hay que:
			// borrar los datos anteriores
			$resultadoDelete = $conexion->query("DELETE FROM programa WHERE DNI = '$dni'");
			if($resultadoDelete)
			{
				echo "Datos anteriores eliminados.<br>";
			}

			// introducir los nuevos
			$consultaInsert = $conexion->stmt_init();
			$consultaInsert->prepare("INSERT INTO programa (DNI, IdTecno) VALUES ('$dni', ?)");
			foreach ($idiomas as $idIdioma) 
			{
				$id = $idIdioma;
				$consultaInsert->bind_param('i', $id);
				$consultaInsert->execute();
			}

			echo "Nuevos datos introducidos en la tabla programas.<br>";
			$consultaInsert->close();
		}	
	
	}
	

	$conexion->close();	
?>