
import java.sql.*;

public class g_ocio {

    public static Connection Conn;
    private ResultSet rsOcio;
    private ResultSet rsFPago;

    public g_ocio() {
        Conn = MySQL_Util.Conectar("localhost", "root", "", "ocio");
    }

    /**
     * @return the rsOcio
     */
    public ResultSet getRsOcio() {
        String cadenaSql = "SELECT * FROM locales_zonas";
        rsOcio = MySQL_Util.Sel_Consulta(Conn, cadenaSql);
        return rsOcio;
    }

    /**
     * @param rsOcio the rsOcio to set
     */
    public void setRsOcio(ResultSet rsOcio) {
        this.rsOcio = rsOcio;
    }

    /**
     * @return the rsFPago
     */
    public ResultSet getRsFPago() {
        String sqlPago;
        try {
            sqlPago = "SELECT fp.NOMBRE FROM formas_pago fp INNER JOIN locales_formas_pago lfp ON fp.ID=lfp.ID_FORMA_PAGO ";
            sqlPago += " WHERE lfp.ID_LOCAL=" + rsOcio.getString("ID");
            rsFPago = MySQL_Util.Sel_Consulta(Conn, sqlPago);
        } catch (SQLException ex) {
            return null;
        }
        return rsFPago;
    }

}
