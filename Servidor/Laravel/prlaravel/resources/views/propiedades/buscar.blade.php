<html>

<body>
    <h3>Inmobiliaria</h3>Mostrar los inmuebles a la venta
    <form method="POST">
        @csrf
        <table>
            <tr>
                <td>Tipo de Vivienda: </td>
                <td>
                    <table>

                        @foreach($tipos as $tipo)
                        <tr>
                            <td><input type="checkbox" value="{{$tipo->id}}" name="tipo[]">{{$tipo->nombre}}</input></td>
                        </tr>
                        @endforeach

                    </table>
                </td>
            </tr>
            <tr>
                <td>Localidad:</td>
                <td>
                    <select name="localidad">
                        <option value=0>Todos</option>
                        @foreach($localidades as $localidad)
                        <option value="{{$localidad->id}}">{{$localidad->nombre}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Precio entre:</td>
                <td>
                    <input name="minimo" value="{{$minimo[0]->minim}}" /> y <input name="maximo" value="{{$maximo[0]->maxim}}" />
                </td>
            </tr>
            <tr>
                <td>Ordenar Precios: </td>
                <td>
                    <input type="radio" value="asc" name="orden">Ascendente</input>
                    <input type="radio" value="desc" name="orden">Descendente</input>
                </td>
            </tr>
        </table>
        <input type="submit" name="enviar" value="Buscar">
    </form>

</body>

</html>