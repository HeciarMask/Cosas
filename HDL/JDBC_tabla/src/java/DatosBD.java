
import java.sql.*;
import java.util.logging.Level;
import java.util.logging.Logger;

public class DatosBD {

    Connection conn = null;
    String sdriver = "com.mysql.jdbc.Driver";
    String sUrl_jdbc = "jdbc:mysql://localhost:3306/ejemplos";
    String sConsulta = "SELECT id,titulo,texto from noticias";
    String mensaje = "Va Bien";
    private ResultSet rset;
    
    public DatosBD() {
        try {
            conn = DriverManager.getConnection(sUrl_jdbc,"root","");
            System.out.println("Objeto conexion creado.");
        } catch (Exception ex) {
            System.out.println("no conectado");
        }
        try {
            Statement stmt = conn.createStatement();
            ResultSet rset = stmt.executeQuery(sConsulta);
            while(rset.next()){
                System.out.println(rset.getString("id") + ", " + rset.getString(2) + ", " + rset.getString("texto"));
            }
            rset.close();
            stmt.close();
            conn.close();
        } catch (SQLException ex) {
            Logger.getLogger(DatosBD.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public ResultSet getRset() {
        try{
        Statement stmt = conn.createStatement();
        rset = stmt.executeQuery(sConsulta);
        }catch(SQLException ex){
        mensaje = ex.getMessage();
        }
        return rset;
                
    }

    public void setRset(ResultSet rset) {
        this.rset = rset;
    }
    
}
