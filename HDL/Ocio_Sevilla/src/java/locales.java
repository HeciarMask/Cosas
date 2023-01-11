
import java.util.ArrayList;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author alumno
 */
public class locales {

    private String nombre;
    private String zona;
    private String direccion;
    private String[] formas_pago;
    private String mensaje;
    
    public locales() {
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getZona() {
        return zona;
    }

    public void setZona(String zona) {
        this.zona = zona;
    }

    public String getDireccion() {
        return direccion;
    }

    public void setDireccion(String direccion) {
        this.direccion = direccion;
    }

    public String[] getFormas_pago() {
        return formas_pago;
    }

    public void setFormas_pago(String[] formas_pago) {
        this.formas_pago = formas_pago;
    }
    
    public ArrayList getListaZonas(){
        String cadena = "SELECT id, nombre FROM zonas ORDER BY nombre";
                
        return MySQL_Util.Llenar_Lista(g_ocio.conn, cadena);
    }
    
    public ArrayList getListaFPago(){
        String cadena = "SELECT id, nombre FROM formas_pago ORDER BY nombre";
                
        return MySQL_Util.Llenar_Lista(g_ocio.conn, cadena);
    }
    
    public String guardar_L(){
        String insert1 = "INSERT INTO locales((NOMBRE, ZONA, DIRECCION) VALUES";
        insert1 += "('"+ nombre +"',"+ zona +",'"+ direccion + "')";
        //mensaje = insert1;
        MySQL_Util.Ej_ConsultaAccion(g_ocio.conn, insert1);
        
        return "index";
    }

    public String getMensaje() {
        return mensaje;
    }
    public void setMensaje(String mensaje) {
        this.mensaje = mensaje;
    }
    
}
