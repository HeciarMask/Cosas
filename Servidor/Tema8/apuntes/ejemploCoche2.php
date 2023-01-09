<?php
class Coche {
    private $color = 'red';
    protected $potencia = 120;
    public $marca = 'audi';
}
class CocheDeLujo extends Coche {

    // La función displayColor devolverá un error porque es private
    public function displayColor()
    {
        return $this->color;
    }
    // La función displayPotencia devolverá 120, ya que hereda el valor
    public function displayPotencia()
    {
        return $this->potencia;
    }
    // La función displayMarca devolverá audi, ya que también hereda el valor
    public function displayMarca()
    {
        return $this->marca;
    }
}
$unCoche = new Coche();
echo "<p> Un Coche </p>";
/* echo ' Color: '. $unCoche->color.', ';
echo ' Potencia: '. $unCoche->potencia.', '; */
echo ' Marca: '. $unCoche->marca;
echo "<p> Un Coche de lujo </p>";
$unoDeLujo= new CocheDeLujo();
//echo ' Color: '. $unoDeLujo->displayColor().', ';
echo ' Potencia: '. $unoDeLujo->displayPotencia().', ';
echo ' Marca: '. $unoDeLujo->displayMarca();
?>