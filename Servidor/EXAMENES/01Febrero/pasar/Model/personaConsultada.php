<?php

class PersonaConsultada {

      // Definición de los atributos.
      protected $nombreTrabajo; // denominacion del trabajo del usuario
      protected $nombrePersona; // nombre del usuario
	protected $id; // id del usuario
      protected $nombresPostres; //nombres de los postres favoritos del usuario
      public function __construct($pId,$pNombre,$pTrabajo,$pCaracteristica) {
      			
      			$this->id=$pId;
        		$this->nombrePersona=$pNombre;
        		$this->nombreTrabajo=$pTrabajo;
        		$this->nombresPostres=$pCaracteristica;}
      public function getNombrePersona() {return ($this->nombrePersona);}
	public function getNombreTrabajo() {return ($this->nombreTrabajo);}
	public function getId()  {return ($this->id);}
	public function getNombresPostres() {return ($this->nombresPostres);}

	  }
	  
         
    ?>

