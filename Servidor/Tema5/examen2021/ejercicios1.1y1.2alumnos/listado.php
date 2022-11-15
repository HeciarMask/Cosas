<!-- listado.php -->
<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<html>
<head>
<title> lista propiedades </title>
</head>
<body>
<h1>Gestión de Inmuebles</h1>
<p><a href="inmuebles.php">Nueva búsqueda</a></p>
<table border="1"><tr><th>Localidad</th><th>Domicilio</th><th>Tipo de Vivienda</th><th>Precio</th></tr>	

<?php

extract($_POST);
$dwes=new mysqli("localhost","root","","ejercicio1");

if(!empty($tipo)){
    $cadTipo = implode(' \', \'', $tipo);
}else{

}



    if($localidad == "todos"){
        $sql1="SELECT localidad, domicilio, tipo, precio FROM propiedades WHERE vendida='NO' AND tipo IN  (\'$cadTipo\')";
    }else{
        $sql1="SELECT localidad, domicilio, tipo, precio FROM propiedades WHERE vendida='NO' AND localidad=\'$localidad\'  AND tipo IN  (\'$cadTipo\')";
    }
    $resultado1=$dwes->query($sql1);
    while ($fila1=$resultado1->fetch_assoc())
    {
        $idLoc = $fila1["localidad"];
        $sql2="SELECT nombre FROM localidades WHERE id=\'$idLoc\'";
        $resultado2=$dwes->query($sql2);
        $fila2=$resultado2->fetch_assoc();

        $idTipo  = $fila1["tipo"];
        $sql3="SELECT nombre FROM tipos_vivienda WHERE id=\'$idTipo\'";
        $resultado3=$dwes->query($sql3);
        $fila3=$resultado3->fetch_assoc();

        echo "<tr><td>".$fila2["nombre"]."</td>
                        <td>".$fila1["domicilio"]."</td>
                        <td>".$fila3["nombre"]."</td>
                        <td>".$fila1["precio"]."</td></tr>";
    }

?>
</table>
</body>
</html>