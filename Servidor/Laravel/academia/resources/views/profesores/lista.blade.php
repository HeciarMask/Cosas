<!DOCTYPE html>
<head>
<title>Listado de Profesores</title>
</head>
<body>
      <ul>
<li><a href="{{route('alumnos.index')}}">Alumnos</a></li>
<li><a href="{{route('profesores.index')}}">Profesores</a></li>
<li><a href="{{route('cursos.index')}}">Cursos</a></li>
</ul>
    <h3>Profesores</h3>
    <h4><a href="/profesores/crear">Añadir un nuevo Profesor</a></h4>
    <table border='1'><tr><th>Nombre y apellidos</th><th>Profesión</th><th>Titulación</th><th>Teléfono</th><th>Acciones</th></tr>        
    @foreach ($profesores as $unProfesor)
        <tr><td>{{$unProfesor->nombre_apellido}}</td>
            <td>{{$unProfesor->profesion}}</td>
            <td>{{$unProfesor->grado_academico}}</td>
            <td>{{$unProfesor->telefono}}</td>
            <td>
            	<a href="/profesores/ver/{{$unProfesor->id}}"> Ver</a>
            	<a href="/profesores/editar/{{$unProfesor->id}}">Editar
            	<a href="/profesores/eliminar/{{$unProfesor->id}}">Eliminar</a>
            </td>
        </tr>

    @endforeach
</table>
</body>
</html>
