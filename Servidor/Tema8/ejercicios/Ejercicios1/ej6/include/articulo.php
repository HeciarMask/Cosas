<?php

class Articulo {
    protected $codigobarras;
    protected $nombre;
    protected $precio;
    protected $descripcion;
	  
    public function getcodigobarras() {return $this->codigobarras; }
    public function getnombre() {return $this->nombre; }
    public function getprecio() {return $this->precio; }
    public function getdescripcion() {return $this->descripcion; }
    
    
    public function __construct($row) {
        $this->codigobarras = $row['codigobarras'];
        $this->precio = $row['precio'];
		$this->nombre = $row['nombre'];		
        $this->descripcion = $row['descripcion'];
    }
}

?>
