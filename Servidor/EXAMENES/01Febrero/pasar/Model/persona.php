<?php

class Persona {

      // Definición de los atributos.
      protected $trabajo; // trabajo del usuario
      protected $nombre; // nombre del usuario
	  protected $postres; // deportes favoritos del usuario
     
      public function __construct($unNombre,$unTrabajo,$unosPostres) {
        $this->nombre = $unNombre;
        $this->trabajo = $unTrabajo;
		$this->postres= $unosPostres; }
      public function getNombre() {return ($this->nombre);}
	  public function getTrabajo() {return ($this->trabajo);}
	  public function getPostres()  {return ($this->postres);}
	  
     }
    
    ?>

