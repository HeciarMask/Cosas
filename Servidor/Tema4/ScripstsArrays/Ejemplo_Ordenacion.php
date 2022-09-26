<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <title>Manipular las matrices</title>
    <style type="text/css">
      h1 { font-family: "Courier New",Courier,monospace ; font-size: 100% ; margin-top: 20pt }
    </style>
  </head>
  <body>
<?php 
$a=array(1,2,3,1,1,2,3,3,4,4,4,0,1);
$otroa=$a;
$b=array("blanco","azul","blanco","blanco","azul","Blanco","Azul");
$c=array(  
    "b" =>"verde",
    "c" =>"rojo",
    "e" =>"verde",
    "f" =>"Rojo",
    "g" =>"Verde",
    "a"=>"rojo",
    "d" =>"rojo",);
$otroc=$c;
sort ($a);

echo "<h3>Ordenación por valores usando sort</h3>";
foreach ($a as $clave=>$valor){
echo "Clave: ",$clave," Valor: ",$valor, "<br>";
}

sort ($c);

echo "<h3>Ordenación por valores usando sort</h3>";
foreach ($c as $clave=>$valor){
echo "Clave: ",$clave," Valor: ",$valor, "<br>";
}

rsort($a);

echo "<h3>Ordenación inversa por valores usando rsort</h3>";
 foreach ($a as $clave=>$valor){
echo "Clave: ",$clave," Valor: ",$valor, "<br>";
}

asort($otroc);

echo "<h3>Ordenación por valores manteniendo indices </h3>";
 foreach ($otroc as $clave=>$valor){
echo "Clave: ",$clave," Valor: ",$valor, "<br>";

} 

arsort($otroa);

echo "<h3>Ordenación inversa por valores manteniendo indices arsort</h3>";
 foreach ($otroa as $clave=>$valor){
echo "Clave: ",$clave," Valor: ",$valor, "<br>";

} 
echo'
<h1>Más ejemplos</h1>
<h1>[a|k][r]sort()</h1>';
   
    $matriz = array('c3' => 'rojo','c1' => 'verde',
                     'c2' => 'azul');
    // Visualización de control.
    echo '<b>Matriz de inicio:</b><br />';
    foreach($matriz as $clave => $valor)
      { echo "$clave => $valor<br />"; }
    // sort
    echo '<b>sort: clasificación por valor, claves no conservadas</b><br />';
    $matriz_bis = $matriz;
    sort($matriz_bis);
    foreach($matriz_bis as $clave => $valor)
      { echo "$clave => $valor<br />"; }
    // asort
    echo '<b>asort: clasificación por valor, claves conservadas</b><br />';
    $matriz_bis = $matriz;
    asort($matriz_bis);
    foreach($matriz_bis as $clave => $valor)
      { echo "$clave => $valor<br />"; }
    // ksort
    echo '<b>ksort: clasificación por clave, claves conservadas</b><br />';
    $matriz_bis = $matriz;
    ksort($matriz_bis);
    foreach($matriz_bis as $clave => $valor)
      { echo "$clave => $valor<br />"; }
    ?>

    
    <h1>Clasificación natural</h1>
    <?php
    $matriz = 
	   ['faq1.txt','faq30.txt','faq100.txt','faq2000.txt'];
    // Visualización de control.
    echo '<b>Matriz de inicio:</b><br />';
    foreach($matriz as $valor)
	   { echo "$valor<br />"; }
    // Clasificación por defecto
    echo '<b>Clasificación por defecto (alfabética):</b><br />';
    $matriz_bis = $matriz;
    sort($matriz_bis);
    foreach($matriz_bis as $valor)
	   { echo "$valor<br />"; }
    // Clasificación natural
    echo '<b>Clasificación natural:</b><br />';
    $matriz_bis = $matriz;
    sort($matriz_bis,SORT_NATURAL);
    foreach($matriz_bis as $valor)
	   { echo "$valor<br />"; }
    ?>
 </body>
</html>