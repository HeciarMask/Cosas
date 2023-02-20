<html><body>
<h3>Nuevo curso</h3>
<form action method="POST">
@csrf

<p>Nombre:
		<input type="text" name="nombre" value="{{$curso->nombre}}"></p>
<p>Nivel:<br>
		<input type="radio" name="nivel" value="Basico"
		@if($curso->nivel=="Basico")
		 checked
		@endif
>Básico<br>
<input type="radio" name="nivel" value="Intermedio"
@if ($curso->nivel=="Intermedio")
		 checked
@endif
>Intermedio<br>
<input type="radio" name="nivel" value="Avanzado"
@if ($curso->nivel=="Avanzado")
		 checked
@endif
>Avanzado
	</p>
<p>Horas académicas:
		<input type="text" name="horas_academicas" value="{{$curso->horas_academicas}}"></p>
<p>Profesor:
	<select name="profesor_id">
		@foreach ($profesores as $profesor)
			@if ($profesor->id==$curso->profesor_id)
				<option value="{{$profesor->id}}" selected>
			@else
				<option value="{{$profesor->id}}" >
			@endif
			{{$profesor->nombre_apellido}}</option>
	
		@endforeach
	</select></p>
	<p>	Alumnos:
	<select name=alumnos_ids[] multiple>
		@foreach ($alumnos as $alumno)
			@php $esta=false;@endphp
			@foreach ($alumnos_curso  as $valor)
				@if ($valor->id==$alumno->id)
					@php $esta=true; @endphp
				@endif
			@endforeach
			@if ($esta)
				<option value='{{$alumno->id}}' selected>{{$alumno->nombre}} {{$alumno->apellido}}</option>
			@else
				<option value='{{$alumno->id}}'>{{$alumno->nombre}} {{$alumno->apellido}}</option>
			@endif
		@endforeach
	</select></p>		
<input type="submit" name="enviar" value="Envio">

</form>
<a href="/cursos">Volver al listado</a>

</body></html>