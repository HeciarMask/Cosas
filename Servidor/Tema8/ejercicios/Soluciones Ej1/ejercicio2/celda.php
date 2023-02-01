<?php 
class Celda
{
private $texto;
private $colorFuente;
private $colorFondo;
function __construct($valor,$fuente,$fondo)
{
	$this->texto=$valor;
	$this->colorFuente=$fuente;
	$this->colorFondo=$fondo;
}
public function pintar()
{
   
	echo "<td style='color:".$this->colorFuente.";background-color:".
	$this->colorFondo."'>".$this->texto."</td>";
  }	
}
?>