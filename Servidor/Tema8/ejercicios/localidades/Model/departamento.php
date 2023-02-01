<?php

class Departamento {

    protected $coddep;
    protected $nombre;
    protected $presupuesto;
    protected $clase;
	
    

    public function getcoddep() {return $this->coddep;}
    public function getnombre(){return $this->nombre;}
    public function getpresupuesto(){return $this->presupuesto;}
    public function getclase(){return $this->clase;}
    


    public function __construct($row)
    {
        $this->coddep = $row['coddep'];
        $this->nombre = $row['nombre'];
        $this->presupuesto = $row['presupuesto'];
        $this->clase = $row['clase'];
     }
}