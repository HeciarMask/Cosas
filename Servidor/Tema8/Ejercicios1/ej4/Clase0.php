<?php
 class usuario {
 // Definición de los atributos.
 protected $trabajo; // trabajo del usuario
 protected $nombre; // nombre del usuario
 protected $colores; // array con colores favoritos del usuario

 public function __construct($unNombre,$unTrabajo,$unosColores) {
 // Recibe tres String e instancia un nuevo objeto de la clase con los valores de los parámetros
 }
 public function getNombre() {return ($this->nombre);}
 public function getTrabajo() {return ($this->trabajo);}
 public function getColores()
 {
}
}
?>