
import java.sql.*;

public class Departamento {

    private String txtNumero;
    private String txtNombre;
    private String txtLocalidad;
    private static Connection conexion;
    private String mensaje;
    
    public Departamento() {
    }
    
    public String altaDept(){
        conexion = MySQL_Util.Conectar("localhost", "root", "", "tablasOracle");
        String cadSql = "INSERT INTO dept VALUES (" + txtNumero + ",";
        cadSql += "'" + txtNombre + "','" + txtLocalidad + "')";
        
        Integer valorDevuelto = MySQL_Util.Ej_ConsultaAccion(conexion, cadSql);        
        switch(valorDevuelto){
            case 1:
                mensaje = "Alta realizada correctamente";
                break;
            case 1062:
                mensaje = "Ya existe ese departamento.";
                break;
            case 1054:
                mensaje = "El número de departamento es erróneo.";
                break;
            case 1064:
                mensaje = "No se ha introducido el número de departamento.";
                break;
            case 1264:
                mensaje = "El número de departamento solo puede contener dos dígitos.";
                break;
            default:
                mensaje = valorDevuelto + "";
        }
        
        txtNumero="";
        txtNombre="";
        txtLocalidad="";
        return "index";
    }

    public String getTxtNumero() {
        return txtNumero;
    }

    public void setTxtNumero(String txtNumero) {
        this.txtNumero = txtNumero;
    }

    public String getTxtNombre() {
        return txtNombre;
    }

    public void setTxtNombre(String txtNombre) {
        this.txtNombre = txtNombre;
    }

    public String getTxtLocalidad() {
        return txtLocalidad;
    }

    public void setTxtLocalidad(String txtLocalidad) {
        this.txtLocalidad = txtLocalidad;
    }

    public String getMensaje() {
        return mensaje;
    }

    public void setMensaje(String mensaje) {
        this.mensaje = mensaje;
    }
    
    
    
}