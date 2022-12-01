import java.sql.*;
public class MySQL_Util {
    //Driver para mysql
    static String sdriver="com.mysql.jdbc.Driver";
    static Connection conn;
 public static Connection Conectar(String sHost,String sUsuario,
         String sClave,String sDb){
 String sUrl_jdbc="jdbc:mysql://"+sHost+":3306/"+sDb;
 //registrar el drive
  try {
            Class.forName(sdriver);
            
      } catch (Exception ex) {
            return null;
        }
  try {
       conn=DriverManager.getConnection(sUrl_jdbc,sUsuario,sClave);           
       } catch (SQLException ex) {
         return null;
        }
  return conn;
 }
 public  static ResultSet  Sel_Consulta(Connection conexion,String sConsulta){
 ResultSet rset=null;
     try{
        Statement stmt=conexion.createStatement();
        rset =stmt.executeQuery(sConsulta);
        }
        catch (SQLException ex){
            return null;
        }
        return rset;
 
 }
}
