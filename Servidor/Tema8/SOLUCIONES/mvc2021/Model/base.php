<?php
require_once("candidato.php");
class ClaseExamen {
protected static function connectDB() {
          try { $opc=array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
			$dsn="mysql:host=localhost;dbname=examen";
			$usuario="root";
			$contrasena="";
			$base=new PDO($dsn,$usuario,$contrasena,$opc);
		}
		catch (PDOException $e)
		{
			die ("Error".$e->getMessage());
			$resultado=null;
		}
    return $base;
  }
  protected static function ejecutaConsulta($sql)
{
		try
		{
		$miconexion=self::connectDB();
		$miconexion->exec("set names utf8");
		$resultado=$miconexion->query($sql);
		}
		catch (PDOException $e)
		{
			die ("Error".$e->getMessage());
			
		}
		return $resultado;
}
protected static function ejecutaConsultaAccion($sql)
{
		try
		{
		$miconexion=self::connectDB();
		$resultado=$miconexion->exec($sql);
		}
		catch (PDOException $e)
		{
			die ("Error".$e->getMessage());
			
		}
		return $resultado;
}
public static function obtieneIdiomas()
{
	$sql="SELECT id,nombre From  idiomas order by nombre";
	$resultado=self::ejecutaConsulta($sql);
	$idiomas=array();
	if ($resultado)
		{
		
		while ($row=$resultado->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			$idiomas[$id]=$nombre;
			
		}
		}
	return $idiomas;
}

public static function obtieneCandidatos()
{
$pdo =self::connectDB();
$todo_bien = true;
$sql="SELECT * from candidatos order by apellidos";			
$resultado=self::ejecutaConsulta($sql);
$personas=array();


while ($row=$resultado->fetch(PDO::FETCH_ASSOC))
{		
			$dni=$row['dni'];
			$sqlidiomas= "SELECT idiomas.* from idiomas inner join idiomas_encuesta on idiomas.id=idiomas_encuesta.id_idioma  where idiomas_encuesta.dni_candidato ='".$dni."'  order by nombre";
			$resultadoIdiomas=self::ejecutaConsulta($sqlidiomas);
			$idiomas=array();
	     	while ($fila=$resultadoIdiomas->fetch())
			{
				$idiomas[]=$fila["nombre"];
			}
    		$personas[]=new Candidato($row['dni'],$row['nombre'], $row['apellidos'], $row['sexo'],$idiomas);
			
}
		

return $personas;
}
public static function compruebaCandidato($dni)
{
	$devuelve=false;
	$comprueba="SELECT count(*) as cuenta from candidatos WHERE dni='".$dni."'";
	$resultcomp=self::ejecutaConsulta($comprueba);
	$fila=$resultcomp->fetch(PDO::FETCH_ASSOC);
	if ($fila["cuenta"]>0)
			$devuelve=true;
	return $devuelve;

}
public static function insertDatos($candidatoNuevo)
{
	$query1="INSERT INTO candidatos(dni,nombre,apellidos,sexo) VALUES ('".$candidatoNuevo->getDni()."','".$candidatoNuevo->getNombre()."','".$candidatoNuevo->getApellidos()."','".$candidatoNuevo->getSexo()."')";
	self::ejecutaConsultaAccion($query1);
	foreach ($candidatoNuevo->getIdiomas() as $valor)
	{ 
			$query2="INSERT INTO idiomas_encuesta VALUES ('".$candidatoNuevo->getDni()."',".$valor.")";
			self::ejecutaConsultaAccion($query2);
	}
		

}
public  static function borrarCandidato($codigo)
{
$sql1="DELETE FROM idiomas_encuesta	WHERE dni_candidato ='".$codigo."'";					
$resultado=self::ejecutaConsultaAccion($sql1);
$sql2="DELETE FROM candidatos	WHERE dni ='".$codigo."'";						
$resultado=self::ejecutaConsultaAccion($sql2);
}
}
?>