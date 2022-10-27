<?php
include('funciones.php');
cabecera('Ver precios');
echo "<div id=\"contenido\">\n";

$c = mysqli_connect("localhost","root","","ejercicio6") or die("No se pudo concetar");
mysqli_set_charset($c, "utf8");

extract($_POST);

if(!is_numeric($precio)){
    echo "Precio debe ser numerico";

}else if($precio < 0){
    echo "Precio tiene que ser mayor que 0";

}else{
    $sqlComprueba = "SELECT precio FROM precios p WHERE p.super='$supermercado' AND p.cod_art='$articulo'";
    $resultado = mysqli_query($c,$sqlComprueba);
    $numeroFila = mysqli_num_rows($resultado);
    if($numeroFila == 0){
        $instruccionDML = "INSERT INTO precios VALUES ('$supermercado','$articulo',$precio)";
        $mensaje = "Precio nuevo añadido";

    }else{
        $instruccionDML = "UPDATE precios SET precio=$precio WHERE super='$supermercado' AND codart='$articulo'";
        $mensaje = "Precio Actualizado";

    }
    mysqli_query($c,$instruccionDML);
    echo $mensaje."<br>
    Supermercado: $supermercado <br>
    Articulo: $articulo <br>
    Precio: $precio" ;
}
echo "
        
"; 


echo "</div>";
pie();
?>




