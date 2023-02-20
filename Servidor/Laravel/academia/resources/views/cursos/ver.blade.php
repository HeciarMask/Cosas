<html><body>
<h3>Datos del Curso</h3>

<p>Nombre:<b> {{$curso->nombre}}</b> </p>      
<p>Nivel:<b>{{$curso->nivel}}</b></p>
<p>Horas:<b>{{$curso->horas_academicas}}</b></p>
<p>Profesor:<b>{{$curso->profesor->nombre_apellido}}</b></p>  
<table border="1"><tr><th colspan="2"> Alumnos Matriculados </th></tr>
	<tr><th>Nombre</th><th>Apellido</th></tr>
@foreach  ($alumnos as $unAlumno)
	<tr><td>{{$unAlumno->nombre}}</td>
        <td>{{$unAlumno->apellido}}</td>
    </tr>
  
@endforeach  
</table> 
<a href="{{route('cursos.index')}}">Volver al listado</a>

</body></html>
