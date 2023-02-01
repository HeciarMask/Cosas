<?php
class Modulo{
	protected $nombre;
	protected $id;
	protected $duracion;
	public function __construct($fila)
	{
		$this->id=$fila["id"];
		$this->nombre=$fila["nombre"];
		$this->duracion=$fila["duracion"];	}
	public function getId(){return $this->id;}
	public function getNombre(){return $this->nombre;}
	public function getDuracion(){return $this->duracion;}
}
?>