
import java.util.ArrayList;
import javax.faces.model.SelectItem;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author alumno
 */
public class Datos {
    
    private String operando1;
    private String operando2;
    private String operacion;
    private String resultado;
    /**
     * Creates a new instance of Datos
     */
    
    public Datos() {
    }

    /**
     * @return the operando1
     */
    public String getOperando1() {
        return operando1;
    }

    /**
     * @param operando1 the operando1 to set
     */
    public void setOperando1(String operando1) {
        this.operando1 = operando1;
    }

    /**
     * @return the operando2
     */
    public String getOperando2() {
        return operando2;
    }

    /**
     * @param operando2 the operando2 to set
     */
    public void setOperando2(String operando2) {
        this.operando2 = operando2;
    }

    /**
     * @return the operacion
     */
    public String getOperacion() {
        return operacion;
    }

    /**
     * @param operacion the operacion to set
     */
    public void setOperacion(String operacion) {
        this.operacion = operacion;
    }

    /**
     * @return the resultado
     */
    public String getResultado() {
        Integer cuenta = 0;
        switch(operacion){
            case "suma":
                cuenta = Integer.parseInt(operando1) + Integer.parseInt(operando2);
                break;
            case "resta":
                cuenta = Integer.parseInt(operando1) - Integer.parseInt(operando2);
                break;
            case "multiplicacion":
                cuenta = Integer.parseInt(operando1) * Integer.parseInt(operando2);
                break;
        }
        return "" + cuenta;
    }
    
    public ArrayList getListaOpcional(){
        ArrayList lista = new ArrayList();
        lista.add(new SelectItem("suma","Suma"));
        lista.add(new SelectItem("resta","Resta"));
        lista.add(new SelectItem("multiplicacion","Multiplicacion"));
        
        return lista;
    }
}
