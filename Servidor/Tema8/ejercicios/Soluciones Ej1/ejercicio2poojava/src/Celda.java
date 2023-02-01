/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Juan
 */

public class Celda {
  private  String  texto;
  private  String colorFuente;
  private  String colorFondo;
  public   Celda(String tex,String cfue,String cfon)
  {
    this.texto=tex;
    this.colorFuente=cfue;
    this.colorFondo=cfon;
  }

    /**
     * @return the texto
     */
    public String getTexto() {
        return texto;
    }

    /**
     * @return the colorFuente
     */
    public String getColorFuente() {
        return colorFuente;
    }

    /**
     * @return the colorFondo
     */
    public String getColorFondo() {
        return colorFondo;
    }
  public String toString()
  {
   return  "<td style='color:"+this.getColorFuente()+";background-color:"+this.getColorFondo()+";'>"+this.getTexto()+"</td>";
  }
}
