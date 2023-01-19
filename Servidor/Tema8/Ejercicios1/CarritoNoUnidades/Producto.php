<?php
class Producto {
    protected $codigo;
    protected $nombre_corto;
    protected $PVP;
	protected $familia;   
    public function getCodigo() {return $this->codigo; }   
    public function getNombreCorto() {return $this->nombre_corto; }
    public function getPvp() {return $this->PVP; }
    public function getFamilia() {return $this->familia; }    
    public function __construct($row) {
        $this->codigo = $row['cod'];
        $this->nombre_corto = $row['nombre_corto'];
        $this->PVP = $row['PVP'];
		$this->familia = $row['familia'];
    }
}
?>
