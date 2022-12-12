import java.sql.*;
import java.util.ArrayList;
import javax.faces.model.SelectItem;

public class DatosBD {
    
    public static Connection conn;
    private String txtComida;
    
    public DatosBD() {
       conn=MySQL_Util.Conectar("localhost", "root", "", "tipo5");
    }

    public ArrayList getListaComida(){
        
        ArrayList listacomida = new ArrayList();
        ResultSet resAux;
        
        try {
            String cadsql="SELECT id, nombre FROM comidas";
            resAux = MySQL_Util.Sel_Consulta(conn, cadsql);
            
            while (resAux.next()){
                listacomida.add(new SelectItem(resAux.getString("id"), resAux.getString("nombre")));
            }
            listacomida.add(new SelectItem("llega", "llega"));
                        
        } catch (SQLException ex) {
            listacomida.add(new SelectItem("Error"));
        }
        
        return listacomida;
    }
    
    public ResultSet getListaLocales(){
        ResultSet resultado;
        
        String cadsql="SELECT locales.nombre, locales.direccion, locales.Carac_ppal, caracteristicas.nombre AS cNombre";
        cadsql+=" FROM locales"
                + " INNER JOIN caracteristicas ON locales.Carac_ppal = caracteristicas.id"
                + " WHERE locales.id IN (SELECT id_local FROM `rel-comidas` WHERE id_comida='" + txtComida + "')";
        resultado=MySQL_Util.Sel_Consulta(conn, cadsql);
        
        return resultado;
    }
    
    public String getTxtComida() {
        return txtComida;
    }

    public void setTxtComida(String txtComida) {
        this.txtComida = txtComida;
    }
}