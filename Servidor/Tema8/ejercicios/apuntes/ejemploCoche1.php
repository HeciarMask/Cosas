<?php
class Coche {

    public $color = 'rojo';
    public $potencia;
    public $marca;

    public function getColor()
    {
        return $this->color;
    }
    public function getPotencia()
    {
        return $this->potencia;
    }
    public function getMarca()
    {
        return $this->marca;
    }
	public function elCocheElegidoEsMasRapido($cocheElegido)
    {
        return $cocheElegido->potencia > $this->potencia;
    }
}
/*fuera de la clase*/
function printCaracteristicas($cocheConcreto)
    {
        echo ' Color: '. $cocheConcreto->getColor().', ';
        echo ' Potencia: '. $cocheConcreto->getPotencia().', ';
        echo ' Marca: '. $cocheConcreto->getMarca();
		echo "\n<br>";
    }
/* main*/
$miCoche = new Coche();
$miCoche->color = 'Azul';
$miCoche->potencia = 136;
$miCoche->marca = 'Peugeot';
$otroCoche = new Coche();
$otroCoche->color = 'Blanco';
$otroCoche->potencia = 150;
$otroCoche->marca = 'Audi';
printCaracteristicas($miCoche);
echo "\n";
printCaracteristicas($otroCoche);
if ($miCoche->elCocheElegidoEsMasRapido($otroCoche)) {
    echo 'El ' . $otroCoche->marca . ' es más rápido';
} else {
    echo 'El ' . $miCoche->marca . ' es más rápido';
}
?>