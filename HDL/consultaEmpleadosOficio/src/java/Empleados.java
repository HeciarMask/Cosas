import java.sql.*;
import java.util.ArrayList;
import javax.faces.model.SelectItem;
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
       ResultSet uno;
       String miSelect = "SELECT nombreEmpleado ,salario1 ,  nombreJefe,  salario2";
       miSelect+=" FROM vistaEmpleados";      
       miSelect+=" WHERE oficio='"+ndep+"'"; 
       //mensaje=miSelect;
       uno=MySQL_Util.Sel_Consulta(miConexion, miSelect);
       return uno;
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

    /**
     * @return the orden
     */
    
   
    public ArrayList  getListaOficios(){
    ArrayList lista=new ArrayList();
    String cadSql="SELECT DISTINCT JOB AS trabajo FROM EMP  ORDER BY trabajo";
    try{
        Statement instruccion=miConexion.createStatement();
        ResultSet rsOficios=instruccion.executeQuery(cadSql);
        while (rsOficios.next()){
            lista.add(new SelectItem(rsOficios.getString("trabajo"),
                    rsOficios.getString("trabajo")));
        }
        rsOficios.close();
        instruccion.close();
    }
    catch (Exception ex){
        mensaje="error";
    }

    return lista;

}
}
