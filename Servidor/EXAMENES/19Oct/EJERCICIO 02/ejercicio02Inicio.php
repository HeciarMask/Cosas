<?php
include("arrays2.php");

    echo "
        <form name='mi_formulario'  method='post' action='ejercicio02Parte2.php'>
            ";
                    
            foreach($generos as $indice1 => $valor1){
                echo "
                    <input type='radio' name='gen' value='".$indice1."'>$valor1<br>
                ";
            }
            
    echo "
        <input type='submit' name='envio'  value='Consultar'>
        </form>
        ";
?>