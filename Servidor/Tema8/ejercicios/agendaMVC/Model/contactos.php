<?php
class Contacto
{
private $dni;
private $nombre;
private $apellido1;
private $apellido2;
private $domicilio;
private $telefono;
public function __construct($dni,$pNombre,$pApellido1,$pApellido2,
	$pDireccion,$pTelefono){
	$this->dni=$dni;
	$this->nombre=$pNombre;
	$this->apellido1=$pApellido1;
	$this->apellido2=$pApellido2;
	$this->domicilio=$pDireccion;
	$this->telefono=$pTelefono;
}
public function getDni()
{
	return $this->dni;
}
public function getNombre()
{
	return $this->nombre;
}
public function getApellido1()
{
	return $this->apellido1;
}
public function getApellido2()
{
	return $this->apellido2;
}
public function getDireccion()
{
	return $this->domicilio;
}
public function getTelefono()
{
	return $this->telefono;
}
}
?>