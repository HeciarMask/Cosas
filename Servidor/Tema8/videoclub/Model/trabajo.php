<?php

class Trabajo {
    protected $numpelicula;
    protected $nombrePersona;
	protected $tarea;
    
  
	  
    public function getNumpelicula() {return $this->numpelicula; }
    public function getNombrePersona() {return $this->nombrePersona; }
    public function getTarea() {return $this->tarea; }
  
    
    
    public function __construct($row) {
        $this->numpelicula = $row['cip'];
        $this->nombrePersona = $row['nombre_persona'];		
		$this->tarea = $row['tarea'];
        
				
    }
}

?>
