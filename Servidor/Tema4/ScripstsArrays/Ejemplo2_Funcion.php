<html>
<head>
<meta charset="utf-8">
<title>Ejemplo 2 funciones</title>
</head>
<?php
$a=3; $b=5;
echo "El valor de a elevado a b es: ",a1($a,$b),"<br>";
$p=a2($a,$b);
For ($i=0;$i<=$b;$i++){
echo "El valor de a elevado a: ",$i," es: ",$p[$i],"<br>";
}
echo "<br>";
list($r,$s,$t)=a2($a,$b);
echo "Este es el valor recogido en la variable r :",$r,"<br>";
echo "Este es el valor recogido en la variable s :",$s,"<br>";
echo "Este es el valor recogido en la variable t :",$t,"<br>";

#funciones
function a1($a,$b){
    return pow($a,$b);
}

function a2($a,$b){
    for ($i=0;$i<=$b;$i++){
              $z[]=pow($a,$i);
     }
   return $z;
}
?>
