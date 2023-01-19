<?php 
Class Calle
{
protected $calle;
protected $nombre_zona;
public function getCalle() {return $this->calle;}
public function getNombreZona() {return $this->nombre_zona;}
public function __construct($fila)
{
	$this->calle=$fila["calle"];
	$this->nombre_zona=$fila["nombre_zona"];
}
}
?>