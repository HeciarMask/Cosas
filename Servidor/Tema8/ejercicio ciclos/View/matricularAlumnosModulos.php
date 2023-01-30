<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<html>

	<head>
		<title>Matricular alumnos</title>
	</head>

	<body>
		INSERTE LOS DATOS NECESARIOS:<BR><BR>
		<form name="formulario" method="post" action="../Controller/datos_matriculas.php">
			<select name="alumno">
				<?php
				foreach ($alumnos as $alumno) {
					echo "<option value='" . $alumno->getId() . "'>" . $alumno->getNombre() . "</option>";
				}
				?>
			</select><br>
			<select name="modulo">
				<?php
				foreach ($modulos as $modulo) {
					echo "<option value='" . $modulo->getId() . "'>" . $modulo->getNombre() . "</option>";
				}
				?>
			</select><br>

			<input type="submit" value="Matricular" />
		</form>

		<br><br>
		<a href='datos_index.php'>Volver al Menú de Opciones</a><br>
	</body>

	</html>

</body>

</html>