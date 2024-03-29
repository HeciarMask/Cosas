
import java.sql.*;
import java.util.ArrayList;
import javax.faces.model.SelectItem;

public class MySQL_Util {

    //Driver para mysql
    static String sdriver = "com.mysql.jdbc.Driver";
    static Connection conn;

    public static Connection Conectar(String sHost, String sUsuario,
            String sClave, String sDb) {
        String sUrl_jdbc = "jdbc:mysql://" + sHost + ":3306/" + sDb;
        //registrar el drive
        try {
            Class.forName(sdriver);

        } catch (Exception ex) {
            return null;
        }
        try {
            conn = DriverManager.getConnection(sUrl_jdbc, sUsuario, sClave);
        } catch (SQLException ex) {
            return null;
        }
        return conn;
    }

    public static ResultSet Sel_Consulta(Connection conexion, String sConsulta) {
        ResultSet rset = null;
        try {
            Statement stmt = conexion.createStatement();
            rset = stmt.executeQuery(sConsulta);
        } catch (SQLException ex) {
            return null;
        }
        return rset;

    }

    public static Integer Ej_ConsultaAccion(Connection conexion, String sConsulta) {

        Integer numero;
        try {
            Statement stmt = conexion.createStatement();
            numero = stmt.executeUpdate(sConsulta);
        } catch (SQLException ex) {
            return ex.getErrorCode();
        }
        return numero;

    }

    public static ArrayList Llenar_Lista(Connection conexion, String sConsulta) {
        ArrayList lista = new ArrayList();
        try {
            Statement instruccion = conexion.createStatement();
            ResultSet rsDept = instruccion.executeQuery(sConsulta);
            while (rsDept.next()) {
                lista.add(new SelectItem(rsDept.getString("id"),
                        rsDept.getString("nombre")));
            }

        } catch (Exception ex) {
            lista = null;
        }

        return lista;
    }

    //Metodo que haga un INSERT en una tabla con ID autonumérico y
    //devuelva el valor del ID de la fila introducida
    public static int ej_Consulta_ID_Auto(Connection conexion, String sConsulta) {
        try {
            Statement sentencia = conexion.createStatement();
            sentencia.executeUpdate(sConsulta);
            String cadsql = "SELECT LAST_INSERT_ID()";
            ResultSet rset = sentencia.executeQuery(cadsql);
            rset.first();
            int n = rset.getInt(1);
            return n;
        } catch (SQLException ex) {
            return -1;
        }
    }
    
    //Metodo que recibe una instruccion select y devuelve un array de string con los id
    //(en nuestro caso de las formas de pago del local) para que salgan marcados en el combo
    
    public String[] Llenar_Seleccionados(Connection conn, String sconsulta, String sNombre){
        
        
        return null;
    }

}
