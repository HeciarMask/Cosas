
import java.sql.Connection;
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
        if (!g_ocio.idLocal.equals(""))
            recoge_datos(g_ocio.idLocal);
        
    }
public void recoge_datos(String pIdLocal){
nombre=MySQL_Util.ObtenerDato("encuesta", "id_encuesta", pIdLocal, "nombre");
direccion=MySQL_Util.ObtenerDato("encuesta", "id", pIdLocal, "direccion");
zona=MySQL_Util.ObtenerDato("locales", "id", pIdLocal, "zona");
//Obtener las formas de pago del local
String cadsql="SELECT id_postre FROM postres_base";
cadsql+=" WHERE ID_LOCAL="+pIdLocal;
formas_pago=MySQL_Util.Llenar_Seleccionados(g_ocio.Conn,cadsql,"ID_FORMA_PAGO");
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
    public ArrayList getListaZonas(){
        String cadena="SELECT id_preferido id,nombre_pref nombre FROM preferido order by nombre";
        return MySQL_Util.Llenar_Lista(g_ocio.Conn, cadena);
    }
    public ArrayList getListaFPago(){
        String cadena="SELECT id_postre id, nombre FROM postres_base";
        return MySQL_Util.Llenar_Lista(g_ocio.Conn, cadena);
    }
    public String guardar_L(){
        //INsert en locales
        String insert1="INSERT INTO locales(NOMBRE,ZONA,DIRECCION) VALUES('";
        insert1+=nombre+"',"+zona+",'"+direccion+"')";       
        int idNuevoLocal=MySQL_Util.Ej_Consulta_Id_Auto(g_ocio.Conn,insert1);
        //INsert en locales_formas_pago
        mensaje=idNuevoLocal+"";
        for (int i=0;i<formas_pago.length;i++){
            String insert2="INSERT INTO locales_formas_pago ";
            insert2+=" VALUES("+idNuevoLocal+","+formas_pago[i]+")";
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
    public String modificar_local(){
        //primero modifico en locales
    String cadsql1="UPDATE locales SET nombre='"+nombre+"',direccion='";
    cadsql1+=direccion+"', zona="+zona+" WHERE id="+g_ocio.idLocal;
    MySQL_Util.Ej_ConsultaAccion(g_ocio.Conn, cadsql1);
    //para modificar las formas de pago, primero borro las que había
    String cadBorra="DELETE FROM locales_formas_pago WHERE ID_LOCAL="+g_ocio.idLocal;
    MySQL_Util.Ej_ConsultaAccion(g_ocio.Conn, cadBorra);
    //Y a continuación meto las nuevas
    for (int i=0;i<formas_pago.length;i++){
            String insert2="INSERT INTO locales_formas_pago ";
            insert2+=" VALUES("+g_ocio.idLocal+","+formas_pago[i]+")";
            MySQL_Util.Ej_ConsultaAccion(g_ocio.Conn, insert2);
        
        }
    return "index";
    }
}
