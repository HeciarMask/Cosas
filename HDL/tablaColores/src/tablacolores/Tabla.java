
package tablacolores;

import java.util.ArrayList;

public class Tabla {
  private ArrayList<Celda> celdas = new ArrayList<>();
  private int cantFilas;
  private int cantColumnas;
  
  public Tabla(int fi, int co)
  {
    this.cantFilas=fi;
    this.cantColumnas=co;
  }
  
  public function cargar($fila,$columna,$valor, $colorFuente, $colorFondo)
  {
    $this->celdas[$fila][$columna]= new Celda($valor, $colorFuente, $colorFondo);
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
    echo '<td style="color: '. $this->celdas[$fi][$co]->getColorFuente() 
    .'; background: '. $this->celdas[$fi][$co]->getColorFondo() .';">'
    .$this->celdas[$fi][$co]->getTexto().'</td>';
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
