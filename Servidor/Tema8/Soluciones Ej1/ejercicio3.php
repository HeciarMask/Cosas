<?php
class persona {
// Definición de los atributos.
protected $trabajo; // trabajo del usuario
protected $nombre; // nombre del usuario
protected $colores; // array con colores favoritos del usuario
public function __construct($unNombre,$unTrabajo,$unosColores) {
// Recibe tres String e instancia un nuevo objeto de la clase con los valores de los parámetros
	$this->nombre=$unNombre;
	$this->trabajo=$unTrabajo;
	$this->colores=explode("*",$unosColores);
}
// - método que da información sobre el usuario
public function informacion() {
	$salida="Me llamo: ".$this->nombre;
	$salida.=" , soy: ".$this->trabajo. "y mis colores favoritos son:<ul>";
	sort($this->colores);
	foreach ($this->colores as $color){
		$salida.= "<li>".$color;
	}
	$salida.="</ul>";
	return $salida;
}
}
///main////
$yo = new persona('Juan','Profesor','blanco*azul*rojo');
/*echo "<pre>";
print_r($yo);
echo "</pre>";*/
echo $yo->informacion();
?>