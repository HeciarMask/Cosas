<?php
require_once('base.php');

class CestaCompra {
    protected $productos = array();
    
    // Introduce un nuevo artículo en la cesta de la compra
    public function nuevo_articulo($codigo) {
		$productoNuevo=base::obtieneProducto($codigo);
		$this->productos[]=$productoNuevo;
       
    }
    
    // Obtiene los artículos en la cesta
    public function get_productos() { return $this->productos; }
    
    // Obtiene el coste total de los artículos en la cesta
    public function get_coste() {
	$coste=0;
	foreach ($this->productos as $valor)
	{
		$coste+=$valor->getPvp();
	}
	return $coste;
    }
    
    // Devuelve true si la cesta está vacía
    public function vacia() {
	if (count($this->productos)==0)
		return true;
	else
		return false;
       
    }
    
    // Guarda la cesta de la compra en la sesión del usuario
    public function guarda_cesta() { 
		$_SESSION["cesta"]=$this;
	}
    
    // Recupera la cesta de la compra almacenada en la sesión del usuario
    public static function carga_cesta() {
		if (!isset($_SESSION["cesta"]))
			return new CestaCompra();
		else
			return $_SESSION["cesta"];
	
}
}
?>
