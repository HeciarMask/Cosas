<html><body>
<h3>Datos del Profesor</h3>

<p>Nombre:<b> {{$profesorActual->nombre_apellido}}</b> </p>      
<p>Profesión:<b>{{$profesorActual->profesion}}</b></p>
<p>Teléfono:<b>{{$profesorActual->telefono}}</b></p>
<p>Titulación:<b>{{$profesorActual->grado_academico}}</b></p>  
<table border="1"><tr><th colspan="2"> Cursos Impartidos </th></tr>
	<tr><th>Denominación</th><th>Nivel</th></tr>
@foreach  ($susCursos as $unCurso)
	<tr><td>{{$unCurso->nombre}}</td>
        <td>{{$unCurso->nivel}}</td>
    </tr>
  
@endforeach  
</table> 
<a href="{{route('profesores.index')}}">Volver al listado</a>

</body></html>
