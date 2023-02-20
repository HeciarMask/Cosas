<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="{{ asset('css/main.css') }}"></head>
<body>
    <a href="{{ route('alumnos.index') }}">Listado de alumnos</a>
    <br>
    <h2>Nuevo alumno</h2>
    <div>
    <form action="{{ route('alumnos.store') }}" method ="POST">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre" placeholder="Su nombre">
    <label>Apellido:</label>
    <input type="text" name="apellido" placeholder="Su Apellido"><br>
    <label>Edad:</label>
    <input type="text" name="edad" placeholder="Su edad"><br>
    <label>Dirección:</label>
    <input type="text" name="direccion" placeholder="Su dirección"><br>
    <label>Teléfono:</label>
    <input type="text" name="telefono" placeholder="Su teléfono">
    
    <input type="submit" value="Guardar">
</form>
</div>
</body>
</html>
