<?php
require_once("candidato.php");
class ClaseExamen
{
	protected static function connectDB()
	{
		try {
			$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
			$dsn = "mysql:host=localhost;dbname=examen";
			$usuario = "root";
			$contrasena = "";
			$base = new PDO($dsn, $usuario, $contrasena, $opc);
		} catch (PDOException $e) {
			die("Error" . $e->getMessage());
		}
		return $base;
	}
	protected static function ejecutaConsulta($sql)
	{
		try {
			$miconexion = self::connectDB();
			$miconexion->exec("set names utf8");
			$resultado = $miconexion->query($sql);
		} catch (PDOException $e) {
			die("Error" . $e->getMessage());

		}
		return $resultado;
	}
	protected static function ejecutaConsultaAccion($sql)
	{
		try {
			$miconexion = self::connectDB();
			$resultado = $miconexion->exec($sql);
		} catch (PDOException $e) {
			die("Error" . $e->getMessage());

		}
		return $resultado;
	}
	public static function obtieneIdiomas()
	{
		//obtiene un array escalar en el que. para cada elemento, el indice es el id del idioma y 
		//el valor el nombre, a partir de los datos de la tabla idiomas
		$idiomas = array();

		$sql = "SELECT * FROM idiomas";
		$res = self::ejecutaConsulta($sql);
		while ($fila = $res->fetch(PDO::FETCH_ASSOC)) {
			$idiomas[$fila["id"]] = $fila["nombre"];
		}

		return $idiomas;
	}

	public static function obtieneCandidatos()
	{
		//obtiene un array de objetos candidato para el listado, el  array $idiomas de candidiatos.php 
		//contiene nombres de idiomas
		$candidatos = array();

		$sql = "SELECT * FROM candidatos";
		$res = self::ejecutaConsulta($sql);
		while ($fila = $res->fetch(PDO::FETCH_ASSOC)) {
			$sql = "SELECT "; //sin terminar
		}

		return $candidatos;
	}
	public static function compruebaCandidato($dni)
	{
		//recibe un dni de candidato y comprueba si existe en la tabla candidatos

	}
	public static function insertDatos($candidatoNuevo)
	{
		//recibe un objeto candidato, e inserta los datos en la tabla candidatos y candidatos_idiomas, para ello  el array $idiomas del objeto candidatos debe contener los id de los idiomas para introducir los datos en 
		// candidatos_idiomas
	}
	public static function borrarCandidato($dni)
	{
		// Recibe un dni de candidato y lo borra de la b.d.
	}
}
?>