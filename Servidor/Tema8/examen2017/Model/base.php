<?php
require_once('alumno.php');
require_once('actividad.php');
require_once('curso.php');
class miclase{
	protected static function conexion()
	{
	// devuelve un connection
	$con=new mysqli('localhost', 'root', '', "examen2");
	$con->set_charset("utf8");
	 return $con;
	}
	protected static function ejecutaConsulta($sql) {
		$conexion=self::conexion();
        $resultado=$conexion->query($sql);
        return $resultado;
	}
	
	
	public static function obtieneAlumnos($curso) {
        // DEVUELVE UN ARRAY DE alumnoS que están en el curso recibido como parámetro (1daw,2daw...)
		$arrayAlumnos = array();
		$consultaAlumnos = "SELECT DISTINCT clave, nombre FROM alumnos";
		$resultado = self::ejecutaConsulta($consultaAlumnos);
		while($row = $resultado->fetch_assoc()){
			$arrayAlumnos[]= new Alumno($row);
		}
		return $arrayAlumnos;
        }
	
	public static function obtieneActividades() 
        // DEVUELVE UN ARRAY DE actividades 
	{
		$arrayActividades = array();
		$consultaActividades = "SELECT DISTINCT codigo,descripcion FROM actividades";
		$resultado = self::ejecutaConsulta($consultaActividades);

		while($row = $resultado->fetch_assoc()){
			$arrayActividades[]= new Actividad($row);
		}

		return $arrayActividades;
	}
	public static function obtieneCursos() 
        // DEVUELVE UN ARRAY de cursos con los distintos valores de curso que hay en la tabla alumnos
	{
		$arrayCursos = array();
		$consultaCursos = "SELECT DISTINCT curso FROM alumnos";
		$resultado = self::ejecutaConsulta($consultaCursos);

		while($row = $resultado->fetch_assoc()){
			$arrayCursos[]= new Curso($row);
		}
		
		return $arrayCursos;
	}
	  public static function obtieneDescripcion($actividad) {
       
	    //recibe un codigo de actividad y devuelve su descripción
		
    }
	public static function obtieneMatriculados($actividad) {
        // DEVUELVE UN ARRAY DE alumnoS que están en la actividad recibida como parámetro
        }
	
	 public static function Insertaalumno($nuevo_alumno,$nueva_actividad) {
        //RECIBE DATOS DE UN alumnoy actividad  Y LO  METE EN LA tabla inscritos 
		
    }
	public static function compruebaAlumno($codigo,$actividad)
	{
	//devuelve true si el alumno ya está inscrito en la actividad
        
	}
	}