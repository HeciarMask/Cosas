<?php
$a[2]=200;
$a[]=300;
echo "El elemento ".$a[3]." tiene indice 3 (siguiente a 2) <br>";
$a[32]=3200;
$a[]= 3300;
print "Vemos que contiene el elemento de indice 33 ...".$a[33]."<br>";
print ("Aqui--> ". $a[21]. "<--- si es que hay algo<br>");
$b[]="Estoy empezando con el array b y mi indice será cero";
$b[]="El siguiente elemento está en la posición 1";
for($f=0;$f<count($b);$f++)
{
 echo $b[$f];
 echo "<br>";
}
$c["objeto"]="coche";
$c["color"]="rojo";
$c["tamaño"]="ideal";
$c["marca"]= "Ferrari";
$c["precio"]="prohibitivo para un humilde docente";
$salida="<H2> El ". $c["objeto"] ." ".$c["marca"]." ".$c["color"];
$salida .=" tiene el tamaño ideal ".$c["tamaño"];
$salida .=" y su precio es ".$c["precio"];
$salida .="</H2>";
print $salida;
$c[]="¿creará un array escalar nuevo y le pondrá indice cero?";
echo $c[0];
?>