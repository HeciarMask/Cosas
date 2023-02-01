<?php

class Actividad {
    protected $codigo;
    protected $descripcion;
    
  
	  
    public function getcodigo() {return $this->codigo; }
    public function getdescripcion() {return $this->descripcion; }
  
  
    
    
    public function __construct($row) {
        $this->codigo = $row['codigo'];
        $this->descripcion = $row['descripcion'];
        
        
				
    }
}

?>
