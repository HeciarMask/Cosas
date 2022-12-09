/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.sql.*;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.faces.model.SelectItem;

public class Datos {
    
    public static Connection conn;
    private String txtComida;
    
    public Datos() {
       conn=MySQL_Util.Conectar("localhost", "root", "", "tipo5");
    }

    public ArrayList getListaComida(){
        
        ArrayList listacomida = new ArrayList();
        ResultSet resAux;
        
        try {
            String cadsql="SELECT nombre FROM comidas";
            resAux = MySQL_Util.Sel_Consulta(conn, cadsql);
            
            while (resAux.next()){
                listacomida.add(new SelectItem(resAux.getString("nombre"), resAux.getString("nombre")));
            }
            System.out.println("Sin errores");
                        
        } catch (SQLException ex) {
            listacomida.add(new SelectItem("Error"));
        }
        
        return listacomida;
    }
    
    public String getTxtComida() {
        return txtComida;
    }

    public void setTxtComida(String txtComida) {
        this.txtComida = txtComida;
    }
    
     
    
}
