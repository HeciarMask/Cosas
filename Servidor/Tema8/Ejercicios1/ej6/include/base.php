<?php
require_once('articulo.php');
class miclase{
	protected static function conexion()
	{
	/* $miconexion=new mysqli("localhost","root","","sesiones");
		$miconexion->set_charset("utf8"); */
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $miconexion = new PDO('mysql:host=localhost;dbname=sesiones', 'root', '', $opciones);
		return $miconexion;
	}
	 protected static function ejecutaSelect($sql) {
        $conexion=self::conexion();
        $resultado=$conexion->query($sql);
        return $resultado;
    }

    protected static function ejecutaDML($sql) {
        $conexion=self::conexion();
        $resultado=$conexion->exec($sql);
        return $resultado;
    }

	public static function obtieneArticulos() {
        $cadenaSql="SELECT * FROM articulos";
        $losArticulos=array();
        $rset=self::ejecutaSelect($cadenaSql);
        while ($fila=$rset->fetch(PDO::FETCH_ASSOC)){
        	$losArticulos[]=new Articulo($fila);
        }
        return $losArticulos;
    }
	  public static function obtieneArticulo($codigo) {
          //devuelve un articulo cuyo codigo es igual al que recibio como parámetro
	  	$articuloBuscado="";
	  	$cadenaSql="SELECT * FROM articulos";
        $cadenaSql.=" WHERE codigobarras='".$codigo."'";
        $rset=self::ejecutaSelect($cadenaSql);
        if ($fila=$rset->fetch(PDO::FETCH_ASSOC)){
        	$articuloBuscado=new Articulo($fila);
        }
        return $articuloBuscado;
        
    }
	 public static function InsertaArticulo($nuevo_articulo) {
        //inserta un articulo y devuelve un mensaje indicando si hubo éxito o no
        $cadenaSql="INSERT INTO articulos VALUES('";
        $cadenaSql.=$nuevo_articulo->getcodigobarras()."','";
        $cadenaSql.=$nuevo_articulo->getnombre()."','";
        $cadenaSql.=$nuevo_articulo->getdescripcion()."',";
        $cadenaSql.=$nuevo_articulo->getprecio().")";
        if ($resultado=self::ejecutaDML($cadenaSql))
        	return "Insert realizado";
        else
        	return "Fallo";
    }
	public static function verificausuario($nombre, $contrasena) {
     // devuelve el tipo del usuario

		$cadenaSql="SELECT tipo FROM usuarios WHERE ";
		$cadenaSql.=" usuario='$nombre' AND clave='$contrasena'";
		$rset=self::ejecutaSelect($cadenaSql);
		$fila=$rset->fetch(PDO::FETCH_ASSOC);
		return $fila["tipo"];
    }
	}