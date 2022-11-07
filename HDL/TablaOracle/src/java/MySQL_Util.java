
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class MySQL_Util {
          //Driver para mysql
    static String sdriver="com.mysql.jdbc.Driver";
    static Connection conn; 
    
    public static Connection Conectar(String sHost, String sUsuario, String sClave, String sDb) {
        String sUrl_jdbc="jdbc:mysql://" + sHost + ":3306/" + sDb;
        
        //Registrar el driver
        try {
            Class.forName(sdriver);
            
        } catch (Exception ex) {
            return null;
        }
        try {
            //Ya he registrado el driver, ahora puedo conectarme
            conn=DriverManager.getConnection(sUrl_jdbc,sUsuario,sClave);
            
        } catch (SQLException ex) {
             conn=null;
        }
        
        return conn;
    }
    
    public static ResultSet Sel_Consulta(Connection conexion, String sConsulta){
        ResultSet rset = null;
         try{
            Statement stmt=conexion.createStatement();
            rset=stmt.executeQuery(sConsulta);
        }
        catch (SQLException ex){
            return null;
        }
        return rset;
    }
}
