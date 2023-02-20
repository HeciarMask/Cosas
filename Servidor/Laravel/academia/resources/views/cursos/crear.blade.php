<html><body>
<h3>Nuevo curso</h3>
<form action="{{route('cursos.store')}}" method="POST">
@csrf
<p>Nombre:
		<input type="text" name="nombre" value=""></p>
<p>Nivel:<br>
		<input type="radio" name="nivel" value="Basico" checked>Básico<br>
<input type="radio" name="nivel" value="Intermedio">Intermedio<br>
<input type="radio" name="nivel" value="Avanzado">Avanzado
	</p>
<p>Horas académicas:
		<input type="text" name="horas_academicas" value=""></p>
<p>Profesor:
	<select name="profesor_id">
		@foreach ($profesores as $profesor)
			<option value="{{$profesor->id}}">{{$profesor->nombre_apellido}}</option>
		@endforeach
	</select></p>
	<p>	Alumnos:
	<select name=alumnos_ids[] multiple>
		@foreach ($alumnos as $alumno)
			<option value='{{$alumno->id}}'>{{$alumno->apellido}}</option>
		@endforeach
	</select></p>		
<input type="submit" name="enviar" value="Envio">

</form>
<a href="/cursos">Volver al listado</a>

</body></html>