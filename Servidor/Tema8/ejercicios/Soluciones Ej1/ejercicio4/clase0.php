<?php
class usuario {
// Definición de los atributos.
protected $trabajo; // trabajo del usuario
protected $nombre; // nombre del usuario
protected $colores; // array con colores favoritos del usuario
public function __construct($unNombre,$unTrabajo,$unosColores) {
	$this->nombre=$unNombre;
	$this->trabajo=$unTrabajo;
	$this->colores=explode("*",$unosColores);
}
public function getNombre() {return ($this->nombre);}
public function getTrabajo() {return ($this->trabajo);}
public function getColores()
{
	sort($this->colores);	
	return implode("<br>",$this->colores);
}
}
