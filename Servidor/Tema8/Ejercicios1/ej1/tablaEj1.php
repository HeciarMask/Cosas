<html>
<head>
<title>Pruebas</title>
</head>
<body>
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
  
  public function cargar($fila,$columna,$valor, $txtColor, $bgColor)
  {
    $this->mat[$fila][$columna]["valor"]=$valor;
    $this->mat[$fila][$columna]["txtColor"]=$txtColor;
    $this->mat[$fila][$columna]["bgColor"]=$bgColor;
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
    echo '<td style="color: '. $this->mat[$fi][$co]["txtColor"] .'; background: '. $this->mat[$fi][$co]["bgColor"] .';">'.$this->mat[$fi][$co]["valor"].'</td>';
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

$tabla1=new Tabla(2,3);
$tabla1->cargar(1,1,"1", "yellow", "red");
$tabla1->cargar(1,2,"2", "purple", "green");
$tabla1->cargar(1,3,"3", "black", "white");
$tabla1->cargar(2,1,"4", "gray", "pink");
$tabla1->cargar(2,2,"5", "orange", "blue");
$tabla1->cargar(2,3,"6", "cian", "brown");
$tabla1->graficar();
?>
</body>
</html>