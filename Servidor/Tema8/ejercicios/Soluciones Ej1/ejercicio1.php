<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Tabla {
  private $mat=array();
  private $fuentes=array();
  private $fondos=array();
  private $cantFilas;
  private $cantColumnas;
  public function __construct($fi,$co)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }
  
  public function cargar($fila,$columna,$valor,$fuente,$fondo)
  {
    $this->mat[$fila][$columna]=$valor;
	$this->fuentes[$fila][$columna]=$fuente;
	$this->fondo[$fila][$columna]=$fondo;
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
    echo "<td style='color:".$this->fuentes[$fi][$co].";background-color:".
	$this->fondo[$fi][$co]."'>".$this->mat[$fi][$co]."</td>";
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
$tabla1->cargar(1,1,"1","#356AA0","#FFFF88");
$tabla1->cargar(1,2,"2","#EEEEEE","#AAAAAA");
$tabla1->cargar(1,3,"3","#FFFF88","#EEEEEE");
$tabla1->cargar(2,1,"4","#358AC0","#FFFF88");
$tabla1->cargar(2,2,"5","#356ABB","#EEFF88");
$tabla1->cargar(2,3,"6","#459AA0","#FFEE88");
$tabla1->graficar();
?>
</body>
</html>