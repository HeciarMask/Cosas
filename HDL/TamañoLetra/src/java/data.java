/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author alumno
 */
public class data {
    
    private String cadena;
    /**
     * Creates a new instance of data
     */
    public data() {
    }
    
    public String crearCadena(){
        String texto = "";
        
        for(int i = 1; i < 7; i++){
            texto += "<h" + i + ">" + cadena + "</h" + i + "><br>";
        }
        
        return texto;
    }

    /**
     * @return the cadena
     */
    public String getCadena() {
        return cadena;
    }

    /**
     * @param cadena the cadena to set
     */
    public void setCadena(String cadena) {
        this.cadena = cadena;
    }
    
}
