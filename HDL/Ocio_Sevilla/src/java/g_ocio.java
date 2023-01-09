
import java.sql.Connection;
import java.sql.ResultSet;

public class g_ocio {

    public static Connection conn;
    private ResultSet rsOcio;
    private String copia = "SELECT fp.NOMBRE FROM formas_pago fp INNER JOIN locales_formas_pago lfp ON fp.ID = lfp.ID_FORMA_PAGO WHERE lfp.ID_LOCAL=1";
    public g_ocio() {
        conn=MySQL_Util.Conectar("localhost", "root", "", "ocio");
    }
    
    public ResultSet getRsOcio(){
        String cadenaSql = "SELECT * FROM locales_zonas";
        rsOcio = MySQL_Util.Sel_Consulta(conn, cadenaSql);
        return rsOcio;
    }
    
}
