<?php 
class Tabla {
  private $mat=array();
  private $cantFilas;
  private $cantColumnas;
  public function __construct($fi,$co)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }
  
  public function cargar($fila,$columna,$valor,$fuente,$fondo)
  {
    $this->mat[$fila][$columna]=new Celda($valor,$fuente,$fondo);
	
  }

  private function inicioTabla()
  {
    echo '<table border="1">';
  }

  private function inicioFila()
  {
    echo '<tr>';
  }
  
  private function mostrar($fi,$co)
  {
   
	$this->mat[$fi][$co]->pintar();
  }

  private function finFila()
  {
    echo '</tr>';
  }

  private function finTabla()
  {
    echo '</table>';
  }

  public function graficar()
  {
    $this->inicioTabla();
    for($f=1;$f<=$this->cantFilas;$f++)
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
        $this->mostrar($f,$c);
      } 
      $this->finFila();
    }
    $this->finTabla();

  }
}
?>