
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

public class g_ocio {

    public static Connection conn;
    private ResultSet rsOcio;
    private ResultSet rsFPago;
    private String copia = "SELECT fp.NOMBRE FROM formas_pago fp INNER JOIN locales_formas_pago lfp ON fp.ID = lfp.ID_FORMA_PAGO";
    public g_ocio() {
        conn=MySQL_Util.Conectar("localhost", "root", "", "ocio");
    }
    
    public ResultSet getRsOcio(){
        String cadenaSql = "SELECT * FROM locales_zonas";
        rsOcio = MySQL_Util.Sel_Consulta(conn, cadenaSql);
        return rsOcio;
    }

    public ResultSet getRsFPago(){
        String sqlPago = copia;
        try {
            sqlPago += " WHERE lfp.ID_LOCAL=" + rsOcio.getString("ID");
            rsFPago=MySQL_Util.Sel_Consulta(conn, sqlPago);
        } catch (SQLException ex) {
            return null;
        }
        return rsFPago;
    }
    public void setRsFPago(ResultSet rsFPago) {
        this.rsFPago = rsFPago;
    }
    
}
