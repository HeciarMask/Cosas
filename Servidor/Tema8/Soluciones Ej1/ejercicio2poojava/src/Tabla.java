/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Juan
 */
public class Tabla {
  Celda[][] celdas;
  private int cantFilas;
  private int cantColumnas;
  public Tabla(int fi, int co)
  {
    this.celdas =new Celda[fi][co];
    this.cantFilas=fi;
    this.cantColumnas=co;
  }
  public void cargar(int fila,int columna,String valor,String cfue, String cfon)
  {
    this.celdas[fila][columna]=new Celda(valor,cfue,cfon);
  }
 private  String  inicioTabla()
  {
    return "<table border=1>";
  }
private String inicioFila()
  {
   return "<tr>";
  }
private String mostrar(int fi,int co)
  {
     return this.celdas[fi][co].toString()+""; 
  }
private String finFila()
  {
    return "</tr>";
  }

  private String finTabla()
  {
    return "</table>";
  }
   public String mostrarTabla()
  {
    String salida="<html><body>";
    salida+=this.inicioTabla();
    for(int f=0;f<this.cantFilas;f++)
    {
      salida+=this.inicioFila();
      for(int c=0;c<this.cantColumnas;c++)
      {
         salida+=this.mostrar(f,c);
      }
      salida+=this.finFila();
    }
    salida+=this.finTabla()+"</body></html>";
    return salida;
  }

}
