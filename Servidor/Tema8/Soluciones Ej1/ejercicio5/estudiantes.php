<?php
require_once("conectar.php");
class Estudiantes
{
	private $est;
	public function __construct(){
		$this->est=array();
	}
	public function get_estudiantes(){
		$conexion=Conectar::conexion();
		$cadenasql="SELECT * FROM estudiantes";
		$resultado=$conexion->query($cadenasql);
		while ($fila=$resultado->fetch_assoc())
		{
			$this->est[]=$fila;
		}
		return $this->est;
	}

}
?>