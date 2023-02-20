<!DOCTYPE html>
<html>

<head>
    <title>Alumno</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/fontawesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-
wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
</head>

<body>
    <ul>
        <li><a href="{{route('alumnos.index')}}">Alumnos</a></li>
        <li><a href="{{route('profesores.index')}}">Profesores</a></li>
        <li><a href="{{route('cursos.index')}}">Cursos</a></li>
    </ul>
    <br>
    <a href="{{ route('alumnos.create') }}"> Nuevo Alumno</a>
    <br><br>
    <div class="container">
 <h3 class="text-center">Alumnos</h3>
 <table class="table table-bordered">
        <tr>
            <th>>@sortablelink('nombre')</th>
            <th>>@sortablelink('apellido')</th>
            <th>>@sortablelink('edad')</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Operaciones</th>
        </tr>
        </thead>
        <tbody>
            <!-- <tr><th>Nombre</th><th>Apellido</th><th>Edad</th><th>Dirección</th><th>Teléfono</th><th>Operaciones</th></tr>-->
            @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->apellido }}</td>
                <td>{{ $alumno->edad }}</td>
                <td>{{ $alumno->direccion }}</td>
                <td>{{ $alumno->telefono }}</td>
                <td>
                    <a href="{{ route('alumnos.show', $alumno->id) }}">Ver</a>
                    <a href="/alumnos/editar/{{$alumno->id}}">Editar</a>

                    <a href="/alumnos/eliminar/{{$alumno->id}}" onclick="return eliminarAlumno('Eliminar Alumno')"> Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    {!! $alumnos->appends(\Request::except('page'))->render() !!}
</div>
    <script>
        function eliminarAlumno(value) {
            action = confirm(value) ? true : event.preventDefault()
        }
    </script>

</body>

</html>