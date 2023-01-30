<?php
$a = array("a", "b", "c", "d", "e");
$b = array(
    "uno" => "Primer valor",
    "dos" => "Segundo valor",
    "tres" => "Tecer valor"
);
foreach ($a as $coco) {
    echo $coco, "<br>";
}
;
echo "<p> $coco</p>";
foreach ($b as $valor) {
    echo $valor, "<br>";
}
;
?>
<?php
$a = array("a", "b", "c", "d", "e");
$b = array(
    "uno" => "Primer valor",
    "dos" => "Segundo valor",
    "tres" => "Tercer valor"
);
foreach ($a as $indice => $valor) {
    echo "Indice: ", $indice, " Valor: ", $valor, "<br>";
}
;
foreach ($b as $indice => $valor) {
    echo "Indice: ", $indice, " Valor: ", $valor, "<br>";
}
;
?>
<?php
$z = array(
    0 => array(
        0 => 34,
        1 => 35,
        2 => 36,
    ),
    1 => array(
        0 => 134,
        1 => 135,
        2 => 136,
    )
);
$z[0] = implode(", ", $z[0]);
$z[1] = implode(", ", $z[1]);
foreach ($z as $indice => $valor) {
    echo "Indice: ", $indice, " Valor: ", $valor, "<br>";
}
;
$z[0] = explode(", ", $z[0]);
$z[1] = explode(", ", $z[1]);
foreach ($z as $ind1 => $valor1) {
    foreach ($valor1 as $ind2 => $valorReal) {
        echo "Ind. 1: ", $ind1, "Ind. 2: ", $ind2, " Valor: ", $valorReal, "<br>";
    }
    ;
}
;
?>