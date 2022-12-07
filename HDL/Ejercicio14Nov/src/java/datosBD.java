import java.sql.*;

import java.util.ArrayList;
import javax.faces.model.SelectItem;


public class datosBD {

public static Connection conn;
private String txtTren;
private String sorden;
public datosBD() {
       conn=MySQL_Util.Conectar("localhost", "root", "", "renfe");

    /**
     * @return the listatrenes
     */}
public ArrayList getListatrenes() {
         ArrayList listatrenes=new ArrayList();
        listatrenes.add(new SelectItem("AVE","Ave"));
        listatrenes.add(new SelectItem("EXPRESO","Tren con literas"));
        listatrenes.add(new SelectItem("REGIONAL","Cortas distancias"));
        listatrenes.add(new SelectItem("TALGO","Talgo: Fabricado en España"));
        
        return listatrenes;
       
    }
    public ResultSet getDatosViajes(){
        String cadsql="SELECT origen,destino,salida,llegada";
        cadsql+=" FROM datos_viajes WHERE tren='"+txtTren+"'";
        cadsql+=" ORDER BY "+sorden;
        ResultSet resultado=MySQL_Util.Sel_Consulta(conn, cadsql);
        return resultado;
    }
    /**
     * @return the txtTren
     */
    public String getTxtTren() {
        return txtTren;
    }

    /**
     * @param txtTren the txtTren to set
     */
    public void setTxtTren(String txtTren) {
        this.txtTren = txtTren;
    }

    /**
     * @return the sorden
     */
    public String getSorden() {
        return sorden;
    }

    /**
     * @param sorden the sorden to set
     */
    public void setSorden(String sorden) {
        this.sorden = sorden;
    }

    /**
     * @return the txtTitulo
     */
    
    
}
