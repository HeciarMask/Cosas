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
public static function mostrarContactos($sql)
{
	//recibe la instruccion SELECT y devuelve un array de objetos contacto
	$lista = array();
	$conexion=self::miConexion();
    $res=$conexion->query($sql);
	
	if($res != "error"){
		while($fila = $res->fetch_assoc()){
			$lista[] = new Contacto($fila["dni"],$fila["nombre"],$fila["apellido1"],$fila["apellido2"],$fila["domicilio"],$fila["telefono"]);
		}
	}

	return $lista;
}
protected static function ejecutaConsultaAccion($instruccion){
	  
	   try {		    
            $numero = self::miConexion()->exec($instruccion);
        } catch (PDOException $e) {
            $numero= "error";
        }
        return $numero;
    }
public static function insertarContacto($pContacto){
//recibe un objeto contacto y lo inserta en la b.d. si el dni no existía ya en la tabla
    $sql = "INSERT contactos VALUES ('".$pContacto->getDni()."','".$pContacto->getNombre()."','".$pContacto->getApellido1()."'";
	$sql .= ",'".$pContacto->getApellido2()."','".$pContacto->getDireccion()."','".$pContacto->getTelefono()."')";
	$res = self::ejecutaConsultaAccion($sql);
	return $res;
}

}
?>