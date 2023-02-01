<?php
require_once("contactos.php");
class Base{
protected static function miConexion(){
	$cadena_conexion='mysql:dbname=agenda;host=localhost';
	$usuario='root';
	$clave='';
	$opciones=array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
	$conn=new PDO($cadena_conexion,$usuario,$clave,$opciones);
	return $conn;
}
public static function ejecutaSelect($sql)
{
		$resultSet=self::miConexion()->query($sql);
		$contactos=array();
		while($fila=$resultSet->fetch(PDO::FETCH_ASSOC))
		{
			extract($fila);
			$contactos[]=new Contacto($dni,$nombre,$apellido1,$apellido2,$domicilio,$tfno);
		}
		return $contactos;
}
protected static function ejecutaConsultaAccion($instruccion){
	  
	   try {		    
            $numero = self::miConexion()->exec($instruccion);
        } catch (PDOException $e) {
            $numero=0;
        }
        return $numero;
    }
public static function insertarContacto($pContacto)
{
	$cadInsert="INSERT INTO contactos VALUES('";
	$cadInsert.=$pContacto->getDni()."','";
    $cadInsert.=$pContacto->getNombre()."','";
    $cadInsert.=$pContacto->getApellido1()."','"; 
    $cadInsert.=$pContacto->getApellido2()."','";
    $cadInsert.=$pContacto->getDireccion()."','";
    $cadInsert.=$pContacto->getTelefono()."')";
    $numero=self::ejecutaConsultaAccion($cadInsert);
    return $numero;
    
}

}
?>