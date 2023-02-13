<?php
/* echo "<pre>";
print_r($contactoActual);
echo "</pre>"; */

?>
<h3>Datos</h3>
<table border='1'>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Dirección</th>
        <th>Teléfono</th>
    </tr>
    <tr>
        <td>{{$contactoActual->nombre}}</td>
        <td>{{$contactoActual->apellido}}</td>
        <td>{{$contactoActual->direccion}}</td>
        <td>{{$contactoActual->telefono}}</td>
    </tr>
</table>
<a href="/contactos">Volver</a>