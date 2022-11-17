import java.sql.*;
public class Empleados {
private static Connection miConexion;
private ResultSet rsEmpleados;
    public Empleados() {
        miConexion=MySQL_Util.Conectar("localhost", "root", "","tablasOracle");
    }

    /**
     * @return the rsEmpleados
     */
    public ResultSet getRsEmpleados() {
       String miSelect="SELECT empno,ename,sal FROM emp order by sal desc ,ename";
       rsEmpleados=MySQL_Util.Sel_Consulta(miConexion, miSelect);
       return rsEmpleados;
    }

    /**
     * @param rsEmpleados the rsEmpleados to set
     */
    public void setRsEmpleados(ResultSet rsEmpleados) {
        this.rsEmpleados = rsEmpleados;
    }
    
}
