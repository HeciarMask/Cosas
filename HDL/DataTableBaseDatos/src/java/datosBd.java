
import java.sql.*;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author alumno
 */
public class datosBd {

          //Driver para mysql
    String sdriver="com.mysql.jdbc.Driver";
    //URL de jdbc (base de datos ejemplos)
    String sUrl_jdbc="jdbc:mysql://localhost:3306/ejemplos";
    //Instrucc. SQL a ejecutar
    String sConsulta="SELECT id,titulo,texto from noticias";
    Connection conn; 
    private ResultSet rset;
    private String mensaje="Va bien";
    public datosBd() 
    /* En el Constructor registro el driver y creo el objeto connection*/
    {
         try {
            Class.forName(sdriver);
            
        } catch (Exception ex) {
            mensaje=ex.getMessage();
        }
        try {
            //Ya he registrado el driver, ahora puedo conectarme
            conn=DriverManager.getConnection(sUrl_jdbc,"root","");
            
        } catch (SQLException ex) {
         mensaje=ex.getMessage();
             conn=null;
        }
    }

    /**
     * @return the rset
     */
    public ResultSet getRset() {
        try{
             Statement stmt=conn.createStatement();
            rset=stmt.executeQuery(sConsulta);
        }
        catch (SQLException ex){
            setMensaje(ex.getMessage());
        }
        return rset;
    }

    /**
     * @param rset the rset to set
     */
    public void setRset(ResultSet rset) {
        this.rset = rset;
    }

    /**
     * @return the mensaje
     */
    public String getMensaje() {
        return mensaje;
    }

    /**
     * @param mensaje the mensaje to set
     */
    public void setMensaje(String mensaje) {
        this.mensaje = mensaje;
    }
    
}
