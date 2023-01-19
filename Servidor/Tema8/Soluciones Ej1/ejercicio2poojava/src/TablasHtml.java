
import javax.swing.JOptionPane;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Juan
 */
public class TablasHtml {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
      Tabla tabla1=new Tabla(3,2);
tabla1.cargar(0,0,"A1","#356AA0","#FFFF88");
tabla1.cargar(0,1,"A2","#EEEEEE","#AAAAAA");
tabla1.cargar(1,0,"B1","#FFFF88","#EEEEEE");
tabla1.cargar(1,1,"B2","#356AA0","#AAAEEE");
tabla1.cargar(2,0,"C1","#EEEEEE","#AAAAAA");
tabla1.cargar(2,1,"C2","#356AA0","#AAAEEE");
String mensaje=tabla1.mostrarTabla();
JOptionPane.showMessageDialog(null,mensaje);
System.out.print(mensaje);
    }
    
}

