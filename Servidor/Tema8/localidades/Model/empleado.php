<?php

class Empleado {

    protected $numemple;
    protected $nombre;
    protected $tipo;
    protected $coddepart;
    protected $localidad;
    protected $horario;
    protected $nomdepart;

    public function __construct($row)
    {
        $this->numemple = $row['numemple'];
        $this->nombre = $row['nombre'];
        $this->tipo = $row['tipo'];
        $this->nomdepart = $row['nomdepart'];
        $this->localidad = $row['localidad'];
        $this->horario = $row['horario'];
		$this->coddepart=$row['coddepart'];
       
    }

    public function getnomdepart()
    {
        return $this->nomdepart;
    }
 public function getcoddepart()
    {
        return $this->coddepart;
    }
    public function getTipo()
    {
        return $this->tipo;
    }

    public function getLocalidad()
    {
        return $this->localidad;
    }

    public function getHorario()
    {
        return $this->horario;
    }

    public function getDia()
    {
        return $this->dia;
    }



    public function getNombre()
    {
        return $this->nombre;
    }

    public function getnumemple()
    {
        return $this->numemple;
    }






}