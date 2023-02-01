<?php
class Alumno{
	protected $nombre;
	protected $id;
	public function __construct($fila)
	{
		$this->id=$fila["id"];
		$this->nombre=$fila["nombre"];	}
	public function getId(){return $this->id;}
	public function getNombre(){return $this->nombre;}
}
?>