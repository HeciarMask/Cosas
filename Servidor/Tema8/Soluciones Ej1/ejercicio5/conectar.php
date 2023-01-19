<?php
class Conectar
{
	public static function conexion(){

		$miconexion=new mysqli("localhost","root","","students");
		$miconexion->set_charset("utf8");
		return $miconexion;
	}
}
?>