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
        conexion=MySQL_Util.Conectar("localhost", "root","","tablasoracle");
        String cadsql="INSERT INTO dept VALUES('"+txtNumero+"',";
        cadsql+="'"+txtNombre+"','"+txtLocalidad+"')";
        Integer valorDevuelto=MySQL_Util.Ej_ConsultaAccion(conexion, cadsql);
        switch (valorDevuelto){
            case 1:
               mensaje="Alta correcta";
               break;
            case 1062:
                mensaje="Error ya existe el departamento "+txtNumero;
                break;
            
            default:
                mensaje="llama corriendo al programador";
                 break;
        }
            
       
        txtNumero="";
        txtNombre="";
        txtLocalidad="";
        return "index";
    }
    /**
     * @return the txtNumero
     */
    public String getTxtNumero() {
        return txtNumero;
    }

    /**
     * @param txtNumero the txtNumero to set
     */
    public void setTxtNumero(String txtNumero) {
        this.txtNumero = txtNumero;
    }

    /**
     * @return the txtNombre
     */
    public String getTxtNombre() {
        return txtNombre;
    }

    /**
     * @param txtNombre the txtNombre to set
     */
    public void setTxtNombre(String txtNombre) {
        this.txtNombre = txtNombre;
    }

    /**
     * @return the txtLocalidad
     */
    public String getTxtLocalidad() {
        return txtLocalidad;
    }

    /**
     * @param txtLocalidad the txtLocalidad to set
     */
    public void setTxtLocalidad(String txtLocalidad) {
        this.txtLocalidad = txtLocalidad;
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
