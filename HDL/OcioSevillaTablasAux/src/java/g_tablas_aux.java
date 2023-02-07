import java.sql.ResultSet;
import java.util.Map;
import javax.faces.component.html.HtmlDataTable;
import javax.faces.component.html.HtmlInputText;
import javax.faces.event.ActionEvent;

public class g_tablas_aux {

public static String stabla;
public static String stitulo;
private ResultSet rsTabla;
private HtmlDataTable tabla;
private HtmlInputText nombre_mod;

private String id;
private String nombre;

public g_tablas_aux() {
}

public HtmlDataTable getTabla() {
return tabla;
}
public void setTabla(HtmlDataTable tabla) {
this.tabla = tabla;
}

public HtmlInputText getNombre_mod() {
return nombre_mod;
}
public void setNombre_mod(HtmlInputText nombre_mod) {
this.nombre_mod = nombre_mod;
}

public String getStitulo() {

return stitulo;
}

public String ObtenerID() {
return ((Map<String, Object>) tabla.getRowData()).get("ID").toString();
}


public ResultSet getRsTabla() {
String sc = "Select ID, NOMBRE From " + stabla;
rsTabla = MySQL_Util.Sel_Consulta(g_ocio.Conn, sc);





return rsTabla;
}

public void borrar_Fila(ActionEvent event){
String sid_borrar = ObtenerID();
String sc = "Delete From " + stabla + " Where ID = " + sid_borrar;
MySQL_Util.Ej_ConsultaAccion(g_ocio.Conn, sc);
//  Informar de alguna manera si se ha producido un error. ..... 	(¿ o no?)
}



public void modificar_Fila(ActionEvent event){
String sc = "Update " + stabla + " Set NOMBRE = '" + nombre_mod.getValue() + "' Where ID = " + ObtenerID();
MySQL_Util.Ej_ConsultaAccion(g_ocio.Conn, sc);
}

public void insertar_Fila(ActionEvent event){
String sc = "Insert into " + stabla + "(NOMBRE) Values('" + nombre + "')";
MySQL_Util.Ej_ConsultaAccion(g_ocio.Conn, sc);
}

public String getId() {
return id;
}

public String getNombre() {
return nombre;
}

public void setNombre(String nombre) {
this.nombre = nombre;
}

//  Creo este método para poder añadirle un valor a nombre_mod:
public String getIterar_Nombre() {
nombre_mod.setValue(MySQL_Util.Leer_campo(rsTabla, "NOMBRE"));
return "";
}
}
