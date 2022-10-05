<?php
include ("arrays.php");

if(isset($_POST['curso'])){
    $res = $_POST['curso'];
    
    if($res == "Todos"){
        $tabla = array();
        foreach($arrayNotas as $calificacion => $asignaturas){
            $notas = 0;
            foreach($asignaturas as $nota){
                $notas += $nota;
            }
            $todos[$calificacion] = $notas;
        }
    }else{

    }
    echo "
        Seleccion: $res <br>
        <table border='solid'>
            <tr>
                <th>Calificacion</th>
                <th>Alumnos</th>
            </tr>
    ";
    
    foreach($tabla as $calificacion => $notas){
        echo "
            <tr>
                <td>$calificacion</td>
                <td>$notas</td>
            </tr>
        ";
    }

    echo "
        </table>
    ";
}else{
    echo "
    <form name='cursos' action='Ej02.php' method='post'>
        <table border='solid'>
            <tr>
                <th>Enseñanza:</th>
                <th>
                    <select name='curso'>
                    <option selected>Todos</option>
                        ";
                        $cursos = array();
                        foreach($arrayNotas as $matriculado){
                            foreach($matriculado as $curso => $alumnos){
                                if(in_array($curso,$cursos) == NULL){
                                    $cursos[] = $curso;
                                }
                            }
                        }
                        foreach($cursos as $i){
                            echo "
                                <option>$i</option>
                            ";
                        }
                    echo  "
                    </select>
                </th>
            </tr>
            <tr>
                <th colspan='2'>
                    <input type='submit' value='Consultar'>
                </th>
            </tr>
        </table>
    </form>
    ";
}
?>