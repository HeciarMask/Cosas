<?php 
class Vivienda
{
protected $calle;
protected $numero;
protected $nombre_zona;
protected $tipo_vivienda;
protected $codigo_postal;
protected $metros;
public function getCalle() {return $this->calle;}
public function getNumero() {return $this->numero;}
public function getNombreZona() {return $this->nombre_zona;}
public function getTipoVivienda() {return $this->tipo_vivienda;}
public function getCodigoPostal() {return $this->codigo_postal;}
public function getMetros() {return $this->metros;}
public function __construct($fila)
{
	$this->calle=$fila["calle"];
	$this->numero=$fila["numero"];
	$this->nombre_zona=$fila["nombre_zona"];
	$this->tipo_vivienda=$fila["tipo_vivienda"];
	$this->codigo_postal=$fila["codigo_postal"];
	$this->metros=$fila["metros"];
}
}
?>