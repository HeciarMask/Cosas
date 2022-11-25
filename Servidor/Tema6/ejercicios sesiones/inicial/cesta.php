<?php
session_cache_limiter();
session_name('cesta');
session_start();

extract($_GET);
if(!isset($_SESSION["cesta"])){
    //Primer producto de la cesta
    $_SESSION["cesta"] = array();
} 

if(isset($borrar)){
    unset($_SESSION["cesta"][$borrar]);
}else{
    if(array_key_exists($producto, $_SESSION["cesta"])){ //Ya existe el producto en la cesta
        $_SESSION["cesta"][$producto]["unidades"]++;

    }else{
        $_SESSION["cesta"][$producto]["precio"] = $precio;
        $_SESSION["cesta"][$producto]["unidades"] = 1;
    }
}


/* echo "<pre>";
print_r($_SESSION);
echo "</pre>"; */
mostrar();
function mostrar(){
$cabecera='<table border="1" align="center" width="40%"><caption>Estado de su cesta</caption>';
$cabecera.= '<tr><th>Articulo</th><th>Unidades</th><th>Precio</th><th>Subtotal</th><th>Borrar?</td></tr>';

echo $cabecera;
$suma=0;
//para cada elemento
foreach ($_SESSION["cesta"] as $articulo=>$info)
{
$cadena= "<tr><td>".$articulo."</td><td>".$info["unidades"];
$cadena.="</td><td>".$info["precio"]."</td><td>";
$cadena.=$info["unidades"]*$info["precio"]."</td>";
$cadena.="<td align=center><a href=cesta.php?borrar=".$articulo."><img src='imagenes/papelera.gif' heigth=30 width=20 ></a></td></tr>";
echo $cadena;
$suma=$suma+$info["unidades"]*$info["precio"];
}
// acumular suma

echo"<tfoot>
    <tr>
      <td colspan=3 align='center'>Suma</td>
      <td>".$suma."</td>
    </tr>
  </tfoot>
</table>";
echo "<table id='enlaces'align='center'><tr><td>";
echo "<a href='principal.php'>Seguir Comprando</a>";
echo "</td><td>";
echo "<a href='anular.php'>Anular Compra</a>";
echo "</td><td>";
echo "<a href='confirmar.php'>Confirmar Pedido</a>";
echo "</td></tr></table>";
}

?>