<?php 
require_once("calle.php");
require_once ("vivienda.php");
class Base{
    protected static function miConexion()
	{
	$miconexion=new mysqli("localhost","root","","catastro");
	$miconexion->set_charset("utf8");
	return $miconexion;
	}
	
	protected static function ejecutaSelect($sql) {
        $conexion=self::miConexion();
        $resultado=$conexion->query($sql);
        return $resultado;
    }
	public static function obtieneCalles()
	{
		//Array de calles para el combo
		$arrayCalles=array();
		$consultaCalles="SELECT DISTINCT calle,nombre_zona FROM vivienda";
		$resultado=self::ejecutaSelect($consultaCalles);
		while($row=$resultado->fetch_assoc()){

				$arrayCalles[]= new Calle($row);

		}
		return $arrayCalles;
	}
	public function obtieneTipos()
	{
		//array asociativo con los tipos de vivienda como índice y valor Unifamiliar o Bloque
		$arrayTipos=array();
		$consultaTipos="SELECT DISTINCT tipo_vivienda FROM vivienda";
		$resultado=self::ejecutaSelect($consultaTipos);
		while($row=$resultado->fetch_assoc()){
				$indice=$row["tipo_vivienda"];
				switch ($indice){
						case "B":
								$valor="Bloque";
								break;
						case "C":
								$valor="Unifamiliar";
								break;
				}
				
				$arrayTipos[$indice]= ($valor);

		}
		return $arrayTipos;
	}
	public static function ObtieneViviendas($calle,$tipo)
	{
		//Array de viviendas(resultado de la consulta)
		$arrayViviendas = array();
		$cadenaAux = "('".implode("','", $tipo)."')";
		$cadenaSql = "SELECT * FROM vivienda WHERE calle='".$calle."'";
		$cadenaSql .= " AND tipo_vivienda IN ".$cadenaAux; 
		$resultado = self::ejecutaSelect($cadenaSql);
		while($row=$resultado->fetch_assoc()){
			$arrayViviendas[]= new Vivienda($row);
		}

		return $arrayViviendas;
	}
	
}
?>