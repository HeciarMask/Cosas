<?php
session_start();

if(isset($_SESSION["ok"])){
    echo "Estoy en la aplicacion";
}else{
    header("Location:formulario.php");
}
?>