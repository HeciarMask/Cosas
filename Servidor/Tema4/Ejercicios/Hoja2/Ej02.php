<?php
include ("arrays.php");

if(isset($_POST['curso'])){
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


    $res = $_POST['curso'];
    
    echo "
        <table border='solid'>
            <tr>
                <th colspan='2'>Seleccion: $res</th>
            </tr>
    ";

    if($res == "Todos"){
        foreach($arrayNotas as $calificacion => $asignaturas){
            $contador = 0;
            foreach($asignaturas as $nota){
                $contador += $nota;
            }
            echo "
                <tr>
                    <td>$calificacion</td>
                    <td>$contador</td>
                </tr>
            ";
        }
        echo "
        </table>
        ";

    }else{

        foreach($arrayNotas as $calificacion => $asignaturas){
            foreach($asignaturas as $nombre => $alumnos){
                if($res == $nombre){
                    echo "
                        <tr>
                            <td>$calificacion</td>
                            <td>$alumnos</td>
                        </tr>
                    ";
                }
            }
        }
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