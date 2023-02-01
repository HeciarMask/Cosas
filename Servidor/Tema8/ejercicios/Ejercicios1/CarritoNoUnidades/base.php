<?php
require_once('Producto.php');

class base{
	protected static function conexion($host,$user,$pass,$db)
	{
	{
	$conn=new mysqli($host,$user,$pass,$db);
	$conn->set_charset("utf8");
	return $conn;
	}
	}
	 protected static function ejecutaSelect($sql) {
        //devuelve un resultset
		$miconexion=self::conexion("localhost","root","","CestaPoo");
		$resultado=$miconexion->query($sql);
		return $resultado;
    }
	public static function obtieneProductos() {
        // devuelve un array de productos
		$cadsql="select * from producto";
		$productos=array();
		$resultSet=self::ejecutaSelect($cadsql);
		while ($fila=$resultSet->fetch_assoc())
		{
			$productos[]=new Producto($fila);
		}
		return $productos;
    }
	  public static function obtieneProducto($codigo) {
          //devuelve un producto cuyo codigo es igual al que recibio como parámetro
		  $cadsql="select * from producto where cod='".$codigo."'";
		  $resultSet=self::ejecutaSelect($cadsql);
		  $fila=$resultSet->fetch_assoc();
		  return new Producto($fila);
    }
	

	 
	public static function verificaCliente($nombre, $contrasena) {
     // devuelve true si el usuario se ha logueado correctamente
	 $sql="select usuario from usuarios ";
	 $sql.="where usuario='".$nombre."' AND ";
	 $sql.="contrasena='".$contrasena."'";	 
	 $resultSet=self::ejecutaSelect($sql);
	 if( $fila=$resultSet->fetch_assoc())
		return true;
	 else
		return false;
    }
	}