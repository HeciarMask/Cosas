<?php
session_start();

if($_POST["dni"] == "1234"){
    echo "Correcto";
    $_SESSION["ok"] = "Bien";
    echo "<br><a href='aplicacion.php'>Acceder a la Aplicacion</a>";
}else{
    echo "El ususario no existe";
}
?>