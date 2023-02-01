<?php 
require_once("modulos.php");
require_once("alumnos.php");
class Base{
protected static function conexion(){
		// devuelve un connection
		$con=new mysqli('localhost', 'root', '', "ciclo");
		$con->set_charset("utf8");
		return $con;
}
public static function ejecutaConsulta($sql){	 	
		$conn = self::conexion();
		$resultado = null;
	    if (isset($conn)) 
	    	$resultado = $conn->query($sql);
       return $resultado;
}
public static function visualizarModulos($nombreProfesor){
		$consulta="SELECT modulos.id,modulos.nombre,modulos.duracion FROM modulos,imparte,profesores ";
		$consulta.=" WHERE imparte.id_profesor=profesores.id and modulos.id=imparte.id_modulo ";
		$consulta.=" and profesores.nombre='".$nombreProfesor."' ORDER BY modulos.nombre";
		
		$resulset=self::ejecutaConsulta($consulta);
		$modulos = array();
		while($row = $resulset->fetch_assoc()){			
			$modulos[]=new Modulo($row);
		}
		return $modulos;
}		
public static function listarAlumnos($modulo){
		$consulta="SELECT alumnos.id,alumnos.nombre FROM alumnos,cursa,modulos WHERE alumnos.id=cursa.id_alumno and modulos.id=cursa.id_modulo and modulos.id=$modulo ORDER BY alumnos.nombre";
		$resulset=self::ejecutaConsulta($consulta);
		$alumnos = array();
		while($row=$resulset->fetch_assoc()){
			
			$alumnos[]=new Alumno($row);
		}
		
		return $alumnos;
	}
public static function obtenerModulo($idModulo){
		$consulta="SELECT modulos.id,modulos.nombre,modulos.duracion FROM modulos WHERE  modulos.id=$idModulo";
		$resulset=self::ejecutaConsulta($consulta);
		$row=$resulset->fetch_assoc();
		return (new Modulo($row));
		
	}
public static function obtenerComboAlumnos() {
        $arrayCombo = array();
        $sql="SELECT id,nombre FROM alumnos order by NOMBRE";
        $resultado = self::ejecutaConsulta($sql);
         while ($row = $resultado->fetch_assoc()) {
			
			$arrayCombo[]=new Alumno($row);
            
        }
        return $arrayCombo;
    }
public static function obtenerComboModulos() {
        $arrayCombo = array();
        $sql="SELECT ID,NOMBRE FROM modulos order by NOMBRE";
        $resultado = self::ejecutaConsulta($sql);
         while ($row = $resultado->fetch_assoc()) {
			$indice=$row["ID"];
			$arrayCombo[$indice] =$row["NOMBRE"];
            
        }
        return $arrayCombo;
    }

public static function existe($alumno, $modulo) {
		
		
	    $sql0 = "SELECT * FROM cursa ";
        $sql0 .= "WHERE id_alumno=".$alumno." ";
        $sql0 .= "AND id_modulo=" .$modulo . "";
		$resultado0 = self::ejecutaConsulta($sql0);
	    if ($fila = $resultado0->fetch_assoc())
        	{return true;}
        else
			{return false;}
	
	}
  
  public static function actualiza($alumno,$modulo)
  {
  	$cadActualizacion="UPDATE cursa";
	$cadActualizacion.=" SET veces_matriculado=veces_matriculado+1 ";
	$cadActualizacion.=" WHERE id_modulo=$modulo"; 
	$cadActualizacion.=" AND id_alumno=$alumno";
	self::ejecutaConsulta($cadActualizacion);
  }
  public static function inserta($alumno,$modulo)
  {

  	$cadActualizacion="INSERT INTO cursa VALUES(";
	$cadActualizacion.="$alumno,$modulo,1)";
	self::ejecutaConsulta($cadActualizacion);
  }
}
?>