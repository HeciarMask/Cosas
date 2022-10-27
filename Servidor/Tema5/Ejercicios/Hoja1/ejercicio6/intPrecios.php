<?php
include('funciones.php');
cabecera('Introducir precios');
echo "<div id=\"contenido\">\n";

$c = mysqli_connect("localhost","root","","ejercicio6") or die("No se pudo concetar");
mysqli_set_charset($c, "utf8");

//CONSULTA -- SELECT S.COD_SUPER, CONCAT(S.COD_SUPER," ",S.DENOMINACION) AS MUESTRA FROM SUPER S;
$sqlSuper = 'SELECT S.cod_super, CONCAT(S.COD_SUPER," ",S.DENOMINACION) AS muestra_s FROM SUPER S';
$sqlArt = 'SELECT A.codart, CONCAT(A.CODART," ",A.DESCRIPCION) AS muestra_a FROM ARTICULOS A';
$sqlPrecio = 'SELECT P.SUPER, CONCAT(A.CODART," ",A.DESCRIPCION) AS MUESTRA FROM PRECIO P';

/* echo ($sqlSuper);*/
/* echo ($sqlArt);  */
echo "
    <form name='miForm' action='procesoPreci.php' method='post'>";
echo "
    Supermercados:
    <select name='supermercado'>
";
$resultadoSuper = mysqli_query($c,$sqlSuper);
while($filaS = mysqli_fetch_assoc($resultadoSuper)){
    extract($filaS);
    echo "
        <option value='$cod_super'>$muestra_s</option>
    ";
}
echo "</select><br>";

echo "
    Articulos:
    <select name='articulo'>
";
$resultadoArt = mysqli_query($c,$sqlArt);
while($filaA = mysqli_fetch_assoc($resultadoArt)){
    extract($filaA);
    echo "
        <option value='$codart'>$muestra_a</option>
    ";
}
echo "</select><br>";

echo "
    Precio:<input type='text' name='precio'><br>
    <input type='submit' value='Enviar'>
    </form>
</div>
";
pie();
?>




