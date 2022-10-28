<?php
include('funciones.php');
cabecera('Ver precios');
echo "<div id=\"contenido\">\n";
$c = mysqli_connect("localhost","root","","ejercicio6") or die("No se pudo concetar");
mysqli_set_charset($c, "utf8");

//CONSULTA -- SELECT S.COD_SUPER, CONCAT(S.COD_SUPER," ",S.DENOMINACION) AS MUESTRA FROM SUPER S;
if(!isset($_POST['envio'])){


$sqlArt = 'SELECT A.codart, CONCAT(A.CODART," ",A.DESCRIPCION) AS muestra_a FROM ARTICULOS A';
$sqlPrecio = 'SELECT P.SUPER, CONCAT(A.CODART," ",A.DESCRIPCION) AS MUESTRA FROM PRECIO P';

/* echo ($sqlSuper);*/
/* echo ($sqlArt);  */
echo "
    <form name='miForm' action='#' method='post'>";

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
    <input type='submit' name='envio' value='Enviar'>
    <input type='reset' value='Limpiar'>
    </form>
</div>
";
}else{
    $codArticulo = $_POST['articulo'];
    $sql1= "SELECT s.cod_super, s.denominacion, s.direccion, p.precio 
    FROM super s INNER JOIN precios p ON s.cod_super = p.super 
    WHERE p.cod_art='$codArticulo' ORDER BY p.precio";
    $sql2 = "SELECT descripcion FROM articulos WHERE codart='$codArticulo'";
    $nombreArticulo = mysqli_fetch_assoc(mysqli_query($c, $sql2));
    echo "
        <div class='contenido'>
            <h1>".$nombreArticulo["descripcion"]."</h1>
            <table border='solid'>
                <tr>
                    <th>COD_SUPER</th>
                    <th>NOMBRE_SUPER</th>
                    <th>DIRECCION</th>
                    <th>PRECIO</th>
                </tr>
    ";

    $resultadoArticulo = mysqli_query($c, $sql1);
    if(mysqli_num_rows($resultadoArticulo) > 0){
        while($fila = mysqli_fetch_assoc($resultadoArticulo)){
            extract($fila);
            echo "
                <tr>
                    <td>$cod_super</td>
                    <td>$denominacion</td>
                    <td>$direccion</td>
                    <td>$precio</td>
                </tr>
            ";
        }
    }else   
        echo "No hay datos";

    echo "
            </table>
        </div>
    ";
}
pie();

/* $sqlSuper = 'SELECT S.cod_super, CONCAT(S.COD_SUPER," ",S.DENOMINACION) AS muestra_s FROM SUPER S';
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
echo "</select><br>"; */
?>




