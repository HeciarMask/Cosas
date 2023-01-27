<?php

class Candidato {
    protected $dni;
    protected $nombre;
	protected $apellidos;
	protected $sexo;
    protected $idiomas;//array de idiomas
	  
    public function getDni() {return $this->dni; }
    public function getNombre() {return $this->nombre;}
	public function getApellidos() {return $this->apellidos;}
	public function getSexo() {return $this->sexo;}
	public function getIdiomas() {return $this->idiomas;}
	
    
  
    
    
    public function __construct($pdni,$pnombre,$papellidos,$psexo,$pidiomas) {
        $this->dni = $pdni;
        $this->nombre = $pnombre;
		$this->apellidos=$papellidos;
		$this->sexo=$psexo;
		$this->idiomas=$pidiomas;
    
        
				
    }
}

?>
