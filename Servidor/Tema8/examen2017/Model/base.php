<?php
require_once('alumno.php');
require_once('actividad.php');
require_once('curso.php');
class Base{
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
        $arrayAlumnos=array();
		$consultaAlumnos="SELECT clave,nombre,curso FROM alumnos  WHERE curso='$curso' ORDER BY nombre";
		$resultado=self::ejecutaConsulta($consultaAlumnos);
		while($row=$resultado->fetch_assoc()){

				$arrayAlumnos[]= new Alumno($row);

		}
		return $arrayAlumnos;
        }
	
	public static function obtieneActividades() 
        // DEVUELVE UN ARRAY DE actividades 
		{
			//Array de Actividades para el combo
		$arrayActividades=array();
		$consultaActividades="SELECT  codigo,descripcion FROM actividades ORDER BY descripcion";
		$resultado=self::ejecutaConsulta($consultaActividades);
		while($row=$resultado->fetch_assoc()){

				$arrayActividades[]= new Actividad($row);

		}
		return $arrayActividades;
		}
	public static function obtieneCursos() 
        
		{

		$arrayCursos=array();
		$consultaCursos="SELECT DISTINCT curso FROM alumnos ORDER BY curso";
		$resultado=self::ejecutaConsulta($consultaCursos);
		while($row=$resultado->fetch_assoc()){

				$arrayCursos[]= new Curso($row);

		}
		return $arrayCursos;

	 }
	  public static function obtieneDescripcion($actividad) {
       
	    //recibe un codigo de actividad y devuelve su descripción
		$consultaNombre="SELECT descripcion FROM actividades";
		$consultaNombre.=" WHERE codigo='$actividad'";
		$resultado=self::ejecutaConsulta($consultaNombre);
		$fila=$resultado->fetch_assoc();
		return $fila["descripcion"];
		
		
    }
	public static function obtieneMatriculados($actividad) {
        // DEVUELVE UN ARRAY DE alumnoS que están en la actividad recibida como parámetro
        $arrayAlumnos=array();
		$consultaAlumnos = "SELECT clave,nombre,curso FROM alumnos inner join inscritos \n"

    . "ON alumnos.CLAVE=inscritos.cod_alum\n"

    . "WHERE inscritos.cod_acti=$actividad ORDER BY curso,nombre";
		$resultado=self::ejecutaConsulta($consultaAlumnos);
		while($row=$resultado->fetch_assoc()){

				$arrayAlumnos[]= new Alumno($row);

		}
		return $arrayAlumnos;
        }
	
	 public static function Insertaalumno($nuevo_alumno,$nueva_actividad) {
        $sql="INSERT INTO inscritos VALUES($nuevo_alumno,$nueva_actividad)";
        $resultado=self::ejecutaConsulta($sql);
		
    }
	public static function compruebaAlumno($codigo,$actividad)
	{
	//devuelve true si el alumno ya está inscrito en la actividad
		$sql="SELECT 1 FROM inscritos WHERE cod_alum=$codigo ";
		$sql.=" AND  cod_acti=$actividad";
		$resultado=self::ejecutaConsulta($sql);
		if ($fila=$resultado->fetch_row())
			return true;
		else
			return false;
        
	}
	}