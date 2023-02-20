<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="{{ asset('css/main.css') }}"></head><body>
    <a href=\alumnos>Listado de alumnos</a>
    <br>
    <h2>Editar Alumno</h2>
    <div>
<form action="/alumnos/editar/{{ $alumno->id}}" method ="POST">
    @csrf
    {{ method_field('PUT') }}
    <label>Nombre:</label>
    <input type="text" name="nombre" placeholder="Su nombre" value="{{ $alumno->nombre}}">
    <label>Apellido:</label>
    <input type="text" name="apellido" placeholder="Su Apellido" value="{{ $alumno->apellido}}">
    <label>Edad:</label>
    <input type="text" name="edad" placeholder="Su edad" value="{{ $alumno->edad}}">
    <label>Dirección:</label>
    <input type="text" name="direccion" placeholder="Su dirección" value="{{ $alumno->direccion}}">
    <label>Teléfono:</label>
    <input type="text" name="telefono" placeholder="Su teléfono" value="{{ $alumno->telefono}}">
    
    <input type="submit" value="Guardar">
</form>
</div>
</body>
</html>
