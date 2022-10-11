<?php
if(isset($_POST['areaTxt'])){
    extract($_POST);
    $cadena = explode("\r", $txt);
    $tabla = array();

    echo "
        <table border='solid'>
            <tr>
                <th>Alumno</th>
                <th>Nota Media</th>
            </tr>
    ";

    foreach($areaTxt as $notas){
        $alumno = explode(",",$notas);
        $notaMedia = 0;
        for($i = 1; $i < count($alumno);$i++){
            $notaMedia += $alumno[$i];
        }
        $notaMedia = $notaMedia / (count($alumno) - 1);
        $tabla[$alumno] = $notaMedia;
    }
    if($tipo == "Nombre"){
        if($orden == "Ascendente"){
            ksort($tabla);
        }else{
            krsort($tabla);
        }
    }else{
        if($orden == "Ascendente"){
            asort($tabla);
        }else{
            arsort($tabla);
        }
    }

    foreach($tabla as $nombre => $nota){
        echo "
            <tr>
                <td>$nombre</td>
                <td>$nota</td>
            </tr>
        ";
    }

    echo "
        </table>
    ";

    echo "
    <form action='Ej08.php' method='post'>
        <p>Introduce alumno y sus respectivas notas(nombreAlumno, nota1, nota2...)</p>
        <textarea id='areaTxt' name='areaTxt' rows='10' cols='80'></textarea>
        <br>
        Ordenar de forma:
        <input type='radio' id='asc' name='orden' value='Ascendente'>
        <label for='asc'>Ascendente</label>
        <input type='radio' id='desc' name='orden' value='Descendente'>
        <label for='desc'>Descendente</label><br>
        Ordenar por:
        <input type='radio' id='nombre' name='tipo' value='Nombre'>
        <label for='nombre'>Nombre</label>
        <input type='radio' id='nota' name='tipo' value='NotaMedia'>
        <label for='nota'>Nota Media</label><br>
        <input type='submit' value='Aceptar'>
    </form>
    ";

}else{
    echo "
    <form action='Ej08.php' method='post'>
        <p>Introduce alumno y sus respectivas notas(nombreAlumno, nota1, nota2...)</p>
        <textarea id='areaTxt' name='areaTxt' rows='10' cols='80'></textarea>
        <br>
        Ordenar de forma:
        <input type='radio' id='asc' name='orden' value='Ascendente'>
        <label for='asc'>Ascendente</label>
        <input type='radio' id='desc' name='orden' value='Descendente'>
        <label for='desc'>Descendente</label><br>
        Ordenar por:
        <input type='radio' id='nombre' name='tipo' value='Nombre'>
        <label for='nombre'>Nombre</label>
        <input type='radio' id='nota' name='tipo' value='NotaMedia'>
        <label for='nota'>Nota Media</label><br>
        <input type='submit' value='Aceptar'>
    </form>
    ";
}
?>