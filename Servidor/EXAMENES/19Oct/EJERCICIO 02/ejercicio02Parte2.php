<?php
include("arrays2.php");

if(isset($_POST['gen'])){
    $sel = $_POST['gen'];
    $titulos = array();

    foreach($filmes as $indice1 => $lista1){
        if($lista1["genero"] == $sel){
            $titulos[$indice1] = $lista1["fecha"];
        }
    }

    if(count($titulos) > 0){
        echo "
            <table border='solid'>
                Películas de ".$generos[$sel]."
                <tr>
                    <th>Título</th>
                    <th>Fecha</th>
                </tr>
        ";

        foreach($titulos as $indice10 => $valor10){
            echo "
                <tr>
                    <td>$indice10</td>
                    <td>$valor10</td>
                </tr>
            ";
        }

        echo "
            </table>
        ";
    }else{
        echo "
            No hay películas del género ".$generos[$sel];
    }

}else{
    echo "No has seleccionado ningún género.";
}
?>