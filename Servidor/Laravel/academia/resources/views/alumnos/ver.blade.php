<!DOCTYPE html>
<html>
    <head>
 <link rel="stylesheet" href="{{ asset('css/main.css') }}"></head>
 <body>
    <a href=\alumnos>Listado de alumnos</a>
    <br>
    <h2>Ver alumno</h2>
    
    <div>
   <p> Nombre: {{ $alumno->nombre}}</p>
   <p> Apellido: {{ $alumno->apellido}}</p>
   <p> Edad: {{ $alumno->edad}}</p>
   <p> Dirección: {{ $alumno->direccion}}</p>
   <p> Teléfono: {{ $alumno->telefono}}</p>
   <label>Cursos en los que está matriculado:</label>
    <ul>
        @foreach($cursos as $uncurso)
            <li> {{ $uncurso->nombre }}, Nivel: {{ $uncurso->nivel }}</li>
        @endforeach
    </ul>

</div>

</body>
</html>
