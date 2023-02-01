<?php
    /* Recuperamos la información de la sesión*/
    session_start();
    session_unset();
    header("Location: login.php");
?>
