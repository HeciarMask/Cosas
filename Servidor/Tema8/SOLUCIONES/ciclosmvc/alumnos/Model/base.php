<?php
require_once("modulos.php");
require_once("alumnos.php");
class Base
{
	protected static function conexion()
	{
		// devuelve un connection
		$con = new mysqli('localhost', 'root', '', "ciclo");
		$con->set_charset("utf8");
		return $con;
	}
	public static function ejecutaConsulta($sql)
	{
		$conn = self::conexion();
		$resultado = null;
		if (isset($conn))
			$resultado = $conn->query($sql);
		return $resultado;
	}
	public static function visualizarModulos($nombreProfesor)
	{
		//devuelve array de modulos
	}
	public static function listarAlumnos($modulo)
	{
		//devuelve array de alumnos matriculados en el modulo recibido como parametro
	}
	public static function obtenerModulo($idModulo)
	{
		//devuelve un objeto modulo con id= al recibido

	}
	public static function obtenerComboAlumnos()
	{
		//devuelve array de alumnos
	}
	public static function obtenerComboModulos()
	{

		//devuelve array asociativo en el que el indice es el id del modulo y el valor el nombre
	}

	public static function existe($alumno, $modulo)
	{
		//devuelve true si el alumno está matriculado en el módulo

	}

	public static function actualiza($alumno, $modulo)
	{
		//hace un update en cursa añadiendo 1 a veces_matriculado en la fila correspondiente al idalumno y idmodulo recibidos
	}
	public static function inserta($alumno, $modulo)
	{
		//hace un insert en cursa con el idalumno y idmodulo recibidos

	}
}
?>