<?php
include("arrays3.php");

if(isset($_POST['gen'])){
    $sel = $_POST['gen'];
    $titulos = array();
    $listaGen = implode(', ', $sel);

     /* print_r ($sel); echo "<br>"; */

    foreach($sel as $valor1){
        foreach($filmes as $indice1 => $lista1){
            if($lista1["genero"] == $valor1){
                $titulos[$indice1]["Género"] = $lista1["genero"];
                $titulos[$indice1]["Fecha"] = $lista1["fecha"];
            }
        }
    }
    

    if(count($titulos) > 0){
        echo "
            <table border='solid'>
                Películas de ".$listaGen."
                <tr>
                    <th>Título</th>
                    <th>Género</th>
                    <th>Fecha</th>
                </tr>
        ";

        foreach($titulos as $indice10 => $valor10){
            echo "
                <tr>
                    <td>".$indice10."</td>
                    <td>".$titulos[$indice10]["Género"]."</td>
                    <td>".$titulos[$indice10]["Fecha"]."</td>
                </tr>
            ";
        }

        echo "
            </table>
        ";
    }else{
        echo "
            No hay películas del género ".$listaGen;
    }

}else{
    echo "No has seleccionado ningún género.";
}
?>