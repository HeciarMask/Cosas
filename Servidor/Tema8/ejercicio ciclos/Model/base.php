<?php
require_once("modulos.php");
require_once("alumnos.php");
class Base
{
	protected static function conexion()
	{
		/* // devuelve un connection
		$con = new mysqli('localhost', 'root', '', "ciclo");
		$con->set_charset("utf8");
		return $con;
		*/
		//Devuelve un Objeto PDO
		try {
			$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
			$conexion = new PDO("mysql:host=localhost;dbname=ciclo", "root", "", $opciones);
		} catch (PDOException $e) {
			die("Error:" . $e->getMessage());
		}
		return $conexion;
	}
	public static function ejecutaConsulta($sql)
	{
		try {
			$conexion = self::conexion();
			$resultSet = $conexion->query($sql);
		} catch (PDOException $e) {
			die("Error:" . $e->getMessage());
		}
		return $resultSet;
	}
	public static function visualizarModulos($nombreProfesor)
	{
		//devuelve array de modulos
		$mods = array();

		$sql = "SELECT modulos.ID_MODULO id, modulos.NOMBRE nombre, modulos.DURACION duracion FROM modulos ";
		$sql .= "INNER JOIN imparte ON modulos.ID_MODULO = imparte.ID_MODULO ";
		$sql .= "INNER JOIN profesores ON imparte.ID_PROFESOR = profesores.ID ";
		$sql .= "WHERE profesores.NOMBRE = '" . $nombreProfesor . "'";

		$res = self::ejecutaConsulta($sql);
		while ($fila = $res->fetch(PDO::FETCH_ASSOC)) {
			$mods[] = new Modulo($fila);
		}

		return $mods;
	}
	public static function listarAlumnos($modulo)
	{
		//devuelve array de alumnos matriculados en el modulo recibido como parametro
		$alumnos = array();

		$sql = "SELECT alumnos.ID id, alumnos.NOMBRE nombre FROM alumnos ";
		$sql .= "INNER JOIN cursa ON alumnos.ID = cursa.ID_ALUMNO ";
		$sql .= "INNER JOIN modulos ON cursa.ID_MODULO = modulos.ID_MODULO ";
		$sql .= "WHERE modulos.ID_MODULO = '" . $modulo . "'";

		$res = self::ejecutaConsulta($sql);
		while ($fila = $res->fetch(PDO::FETCH_ASSOC)) {
			$alumnos[] = new Alumno($fila);
		}

		return $alumnos;
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