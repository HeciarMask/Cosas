<?php

class Alumno {
    protected $clave;
    protected $nombre;
    protected $curso;
  
	  
    public function getclave() {return $this->clave; }
    public function getnombre() {return $this->nombre; }
    public function getcurso() {return $this->curso; }
  
    
    
    public function __construct($row) {
        $this->clave = $row['clave'];
        $this->nombre = $row['nombre'];
        $this->curso = $row['curso'];
        
				
    }
}

?>
