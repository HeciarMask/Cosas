import java.sql.*;

public class Empleados {

    private static Connection miConexion;
    private ResultSet rsEmpleado;
    
    public Empleados() {
        miConexion = MySQL_Util.Conectar("localhost", "host", "", "tablaOracle");
    }
    
    public ResultSet getEmpleados(){
        String miSelect = "SELECT empno, ename, sal FROM emp";
        rsEmpleado = MySQL_Util.Sel_Consulta(miConexion, miSelect);
        
        return rsEmpleado;
    }
    
    
}
