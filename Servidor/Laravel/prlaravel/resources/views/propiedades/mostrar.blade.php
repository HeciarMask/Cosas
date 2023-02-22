<html>

<body>
    <h1>Gestión de Inmuebles</h1>
    <a href="/">Nueva Búsqueda</a><br>
    <?php
    $vacio = true;
    foreach ($propiedades as $propiedad) {
        $vacio = false;
    }
    if (!$vacio) {
    ?>
        <table border="solid">

            <tr>
                <th>Localidad</th>
                <th>Domicilio</th>
                <th>Tipo de Vivienda</th>
                <th>Precio</th>
            </tr>
            @foreach($propiedades as $propiedad)
            <tr>
                <td>{{$propiedad->localidad}}</td>
                <td>{{$propiedad->domicilio}}</td>
                <td>{{$propiedad->tipo}}</td>
                <td>{{$propiedad->precio}}</td>
            </tr>
            @endforeach
        </table>
    <?php
    } else {
        echo "La consulta no ha devuelto ninguna fila.";
    }
    ?>
</body>

</html>