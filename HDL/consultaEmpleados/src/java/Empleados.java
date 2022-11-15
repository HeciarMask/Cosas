import java.sql.*;
public class Empleados {
private static Connection miConexion;
private ResultSet rsEmpleados;
private String ndep;
private String mensaje="Hola a todos";
    public Empleados() {
        miConexion=MySQL_Util.Conectar("localhost", "root", "","tablasOracle");
    }

    /**
     * @return the rsEmpleados
     */
    public ResultSet getRsEmpleados() {
        String miSelect="SELECT empno,ename,sal FROM emp ";
       miSelect+=" WHERE deptno="+ndep;
       
       rsEmpleados=MySQL_Util.Sel_Consulta(miConexion, miSelect);
       return rsEmpleados;
    }

    /**
     * @param rsEmpleados the rsEmpleados to set
     */
    public void setRsEmpleados(ResultSet rsEmpleados) {
        this.rsEmpleados = rsEmpleados;
    }

    /**
     * @return the ndep
     */
    public String getNdep() {
        return ndep;
    }

    /**
     * @param ndep the ndep to set
     */
    public void setNdep(String ndep) {
        this.ndep = ndep;
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
