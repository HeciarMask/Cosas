<?php

class Personaje {
    protected $numero;
    protected $nombre_persona;
    
  
	  
    public function getNumero() {return $this->numero; }
    public function getNombrePersona() {return $this->nombre_persona; }
    
  
    
    
    public function __construct($row) {
        $this->numero = $row['numero'];
        $this->nombre_persona = $row['nombre_persona'];
    
        
				
    }
}

?>
