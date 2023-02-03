import java.sql.*;
import java.util.Map;
import javax.faces.component.html.HtmlDataTable;
public class g_ocio {

    public static Connection Conn;
    private ResultSet rsOcio;
    private ResultSet rsFPago;
    private HtmlDataTable tabla;
    private String comprobar;
    public static String idLocal;
    public g_ocio() {
        Conn=MySQL_Util.Conectar("localhost", "root", "", "ocio");
    }

    /**
     * @return the rsOcio
     */
    public ResultSet getRsOcio() {
        String cadenaSql="SELECT * FROM locales_zonas";
        rsOcio=MySQL_Util.Sel_Consulta(Conn, cadenaSql);
        return rsOcio;
    }
    public String seleccionLista_Del(){
        String sId_borrar=ObtenerID();
    //Borrar en la tabla locales_formas_pago
    String borrarHijos="DELETE FROM locales_formas_pago ";
    borrarHijos+=" WHERE ID_LOCAL="+sId_borrar;
    MySQL_Util.Ej_ConsultaAccion(Conn, borrarHijos);
    //borrar en la tabla locales
    String borrarPadre="DELETE FROM locales WHERE ID="+sId_borrar;
    MySQL_Util.Ej_ConsultaAccion(Conn, borrarPadre);
    return "index";
    }
    public String obtenerDatosLocal(){
     idLocal=ObtenerID();   
    return "m_local";
    }
    public String nuevoLocal(){
        idLocal="";
        return "a_local";
    }
    public String ObtenerID(){
     Map <String,Object> fila;   
     fila= (Map <String,Object>)tabla.getRowData();
     String devuelve=fila.get("ID").toString();
     return devuelve;
    }
    /**
     * @param rsOcio the rsOcio to set
     */
    public void setRsOcio(ResultSet rsOcio) {
        this.rsOcio = rsOcio;
    }

    /**
     * @return the rsFPago
     */
    public ResultSet getRsFPago() {
        String sqlPago;
        try{
        sqlPago="SELECT fp.NOMBRE FROM formas_pago fp INNER JOIN locales_formas_pago lfp ON fp.ID=lfp.ID_FORMA_PAGO ";
        sqlPago+=" WHERE lfp.ID_LOCAL="+rsOcio.getString("ID") ;
        rsFPago=MySQL_Util.Sel_Consulta(Conn, sqlPago);
        }
        catch (SQLException ex){
            return null;
        }
        return rsFPago;
    }

    /**
     * @return the tabla
     */
    public HtmlDataTable getTabla() {
        return tabla;
    }

    /**
     * @param tabla the tabla to set
     */
    public void setTabla(HtmlDataTable tabla) {
        this.tabla = tabla;
    }

    /**
     * @return the comprobar
     */
    public String getComprobar() {
        return comprobar;
    }
    
    
}
