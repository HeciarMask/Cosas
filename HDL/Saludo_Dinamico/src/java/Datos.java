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
    
    private String nombre;
    private String psswd;
    /**
     * Creates a new instance of Datos
     */
    public Datos() {
    }

    public String getNombre() {
        return nombre;}
    public void setNombre(String nombre) {
        this.nombre = nombre;}

    /**
     * @return the psswd
     */
    public String getPsswd() {
        return psswd;
    }

    /**
     * @param psswd the psswd to set
     */
    public void setPsswd(String psswd) {
        this.psswd = psswd;
    }
    public String comprobarClave(){
        if(psswd.equals("80085"))
            return "Proceso";
        else
            return "Fallo";
    }
}
