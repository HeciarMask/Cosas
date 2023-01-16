
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

    /**
     * @return the nombre
     */
    public String getNombre() {
        return nombre;
    }

    /**
     * @param nombre the nombre to set
     */
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    /**
     * @return the zona
     */
    public String getZona() {
        return zona;
    }

    /**
     * @param zona the zona to set
     */
    public void setZona(String zona) {
        this.zona = zona;
    }

    /**
     * @return the direccion
     */
    public String getDireccion() {
        return direccion;
    }

    /**
     * @param direccion the direccion to set
     */
    public void setDireccion(String direccion) {
        this.direccion = direccion;
    }

    /**
     * @return the formas_pago
     */
    public String[] getFormas_pago() {
        return formas_pago;
    }

    /**
     * @param formas_pago the formas_pago to set
     */
    public void setFormas_pago(String[] formas_pago) {
        this.formas_pago = formas_pago;
    }

    public ArrayList getListaZonas() {
        String cadena = "SELECT id,nombre FROM zonas order by nombre";
        return MySQL_Util.Llenar_Lista(g_ocio.Conn, cadena);
    }

    public ArrayList getListaFPago() {
        String cadena = "SELECT id,nombre FROM formas_pago";
        return MySQL_Util.Llenar_Lista(g_ocio.Conn, cadena);
    }

    public String guardar_L() {
        //INsert en locales
        String insert1 = "INSERT INTO locales(NOMBRE,ZONA,DIRECCION) VALUES('";
        insert1 += nombre + "'," + zona + ",'" + direccion + "')";

        int idNuevoLocal = MySQL_Util.ej_Consulta_ID_Auto(g_ocio.Conn, insert1);

        mensaje = idNuevoLocal + "";
        
        for (int i = 0; i < formas_pago.length; i++) {
            String insert2 = "INSERT INTO locales_formas_pago ";
            insert2 += "VALUES(" + idNuevoLocal + ", " + formas_pago[i] + ")";
            MySQL_Util.Ej_ConsultaAccion(g_ocio.Conn, insert2);
        }

        return "index";
    }

    /**
     * @return the mensaje
     */
    public String getMensaje() {
        return mensaje;
    }
}
