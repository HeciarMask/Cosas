/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.sql.*;
import java.util.ArrayList;

public class Datos {
    
    public static Connection conn;
    private String txtComida;
    
    public Datos() {
       conn=MySQL_Util.Conectar("localhost", "root", "", "tipo5");
    }

    public ArrayList getListacomida(){
    ArrayList listacomida = new ArrayList();
    
    String cadsql="SELECT nombre FROM comidas";
    listacomida = MySQL_Util.Llenar_Lista(conn, cadsql);
    
    return listacomida;
    }
    
    public String getTxtComida() {
        return txtComida;
    }

    public void setTxtComida(String txtComida) {
        this.txtComida = txtComida;
    }
    
     
    
}
