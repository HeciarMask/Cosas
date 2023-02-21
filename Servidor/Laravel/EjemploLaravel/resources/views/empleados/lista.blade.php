@extends('layouts.master')
@section('contenido')
<h3>Empleados</h3>
<div class="container">
  <table class="table table-bordered mb-5">
    <thead>
      <tr class="table-success">
        <th scope="col">@sortablelink('nombre')</th>
        <th scope="col"> @sortablelink('apellidos')</th>
        <th scope="col">@sortablelink('sueldo')</th>
        <th scope="col">Departamento</th>
        <th scope="col">Idiomas</th>
        <th scope="col"></th>
      </tr>

    </thead>
    @foreach ($empleados as $unEmpleado)

    <tr>
      <td>{{$unEmpleado->nombre}}</td>
      <td>{{$unEmpleado->apellidos}}</td>
      <td>{{$unEmpleado->sueldo}}</td>
      <td>{{$unEmpleado->departamento->nombre}}</td>
      <td>
        @foreach ($losIdiomas[$unEmpleado->id] as $unIdioma)
          {{$unIdioma}}<br>
        @endforeach
      </td>
    </tr>

    @endforeach


  </table>
  
</div>
@endsection
<script>
  function eliminarEmpleado(value) {
    action = confirm(value) ? true : event.preventDefault()
  }
</script>