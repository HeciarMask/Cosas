<?php
require_once("../Model/base.php");

extract($_POST);

// Datos: nombre - estudia

if ($estudia == 0) {
    $sql = "SELECT id, nombre, estudia FROM encuesta ";
    $sql .= "WHERE nombre LIKE '%" . $nombre . "%'";
} else {
    $sql = "SELECT id, nombre, estudia FROM encuesta ";
    $sql .= "WHERE nombre LIKE '%" . $nombre . "%' AND estudia = '" . $estudia . "'";
}

echo $sql;
$consultadas = Base::consultaPrincipal($sql);

require_once("../view/listausuarios.php");
?>