<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mvc 23 feb21</title>
<link rel="stylesheet" href="{{ asset('css/miestilo.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"></head>
<body>
	@section ('menu')
	<ul class="xul">
<li class="xli"><a href="{{ route('empleados.index') }}">Ver Empleados</a></li>
<li class="xli"><a href="{{ route('empleados.crear') }}">Nuevo Empleado</a></li>
</ul>
@yield('contenido')
</body>
</html>
