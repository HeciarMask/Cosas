<?php
if(isset($_POST['areaTxt'])){
    $txt = $_POST['areaTxt'];
    $cadena = explode("\r", $txt);

    echo "
    <form action='Ej08.php' method='post'>
        <p>Introduce alumno y sus respectivas notas(nombreAlumno, nota1, nota2...)</p>
        <textarea id='areaTxt' name='areaTxt' rows='10' cols='80'></textarea>
        <br>
        <input type='submit' value='Aceptar'>
    </form><br>
    ";

    echo "
        <table border='solid'>
            <tr>
                <th>Alumno</th>
                <th>Nota Media</th>
            </tr>
    ";

    foreach($cadena as $notas){
        $alumno = explode(",",$notas);
        $notaMedia = 0;
        echo "
            <tr>
                <td>$alumno[0]</td>
        ";
        for($i = 1; $i < count($alumno);$i++){
            $notaMedia += $alumno[$i];
        }
        $notaMedia = $notaMedia / (count($alumno) - 1);
        echo "
                <td>$notaMedia</td>
            </tr>
        ";
    }

    echo "
        </table>
    ";

}else{
    echo "
    <form action='Ej08.php' method='post'>
        <p>Introduce alumno y sus respectivas notas(nombreAlumno, nota1, nota2...)</p>
        <textarea id='areaTxt' name='areaTxt' rows='10' cols='80'></textarea>
        <br>
        <input type='submit' value='Aceptar'>
    </form>
    ";
}
?>