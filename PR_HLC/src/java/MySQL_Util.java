import java.sql.*;
import java.util.ArrayList;
import javax.faces.model.SelectItem;
public class MySQL_Util {
    //Driver para mysql
    static String sdriver="com.mysql.jdbc.Driver";
    static Connection conn;
 public static Connection Conectar(String sHost,String sUsuario,
         String sClave,String sDb){
 String sUrl_jdbc="jdbc:mysql://"+sHost+":3306/"+sDb;
 //registrar el drive
  try {
            Class.forName(sdriver);
            
      } catch (Exception ex) {
            return null;
        }
  try {
       conn=DriverManager.getConnection(sUrl_jdbc,sUsuario,sClave);           
       } catch (SQLException ex) {
         return null;
        }
  return conn;
 }
 public  static ResultSet  Sel_Consulta(Connection conexion,String sConsulta){
 ResultSet rset=null;
     try{
        Statement stmt=conexion.createStatement();
        rset =stmt.executeQuery(sConsulta);
        }
        catch (SQLException ex){
            return null;
        }
        return rset;
 
 }
  public  static Integer  Ej_ConsultaAccion(Connection conexion,String sConsulta){

 Integer numero;
     try{
        Statement stmt=conexion.createStatement();
        numero =stmt.executeUpdate(sConsulta);
        }
        catch (SQLException ex){
            return ex.getErrorCode();
        }
        return numero;
 
 }
     public static ArrayList  Llenar_Lista(Connection conexion,String sConsulta){
    ArrayList lista=new ArrayList();
        try{
        Statement instruccion=conexion.createStatement();
        ResultSet rsDept=instruccion.executeQuery(sConsulta);
        while (rsDept.next()){
            lista.add(new SelectItem(rsDept.getString("id"),
                    rsDept.getString("nombre")));
        }
       
    }
    catch (Exception ex){
        lista=null;
    }
    

    return lista;

}
  public static ArrayList  Llenar_Lista_Busquedas(Connection conexion,String sConsulta, String sPrimera){
    ArrayList lista=new ArrayList();
        try{
        Statement instruccion=conexion.createStatement();
        ResultSet rsDept=instruccion.executeQuery(sConsulta);
        lista.add(new SelectItem("-1",sPrimera));
        while (rsDept.next()){
            lista.add(new SelectItem(rsDept.getString("id"),
                    rsDept.getString("nombre")));
        }
       
    }
    catch (Exception ex){
        lista=null;
    }
    

    return lista;

}
     /*
     Método que haga un INSERT en una tabla con ID autonumérico y 
     devuelva el valor del ID  de la fila introducida
     */
     public static int Ej_Consulta_Id_Auto(Connection conexion, String sConsulta){
     
         try{
             Statement sentencia=conexion.createStatement();
             sentencia.executeUpdate(sConsulta);
             String cadsql="SELECT LAST_INSERT_ID()";
             ResultSet rset=sentencia.executeQuery(cadsql);
             rset.first();
             int n=rset.getInt(1);
             return n;
             
         }
         catch (SQLException ex){
             return -1;
         }
     }
     /* método para obtener el contenido de la columna pDato de la fila de la tabla ptabla
en la que el contenido de la columna pcolumna es pvalor, -1 en caso de que no exista
*/
    public static String ObtenerDato(String ptabla,String pcolumna,String pvalor,String pDato)
    {
        String consulta="SELECT "+pDato+" FROM "+ptabla;
        consulta+=" WHERE  "+pcolumna+"="+pvalor;
       ResultSet rDep=MySQL_Util.Sel_Consulta(conn, consulta);
        try{
        if (rDep.first())
         return rDep.getString(1);
        else
            return "-1";
        }
        catch (SQLException e)
        {return e.toString();}
    
    }
/*
Método que recibe una instrucción Select y devuelve un array de strings
con los id (en nuestro caso de las formas de pago del local) para que
salgan marcados en el combo
*/
public static String[] Llenar_Seleccionados(Connection conn,String sconsulta,String sNombre){
    String[] arrayDevuelto=null;
    int i=0;
    try{
        Statement stmt=conn.createStatement();
        ResultSet rset=stmt.executeQuery(sconsulta);        
        /*last() Mueve el cursor a la última fila en este objeto y
        devuelve true si  fila actual es válida
        */
        if (rset.last())
    // getRow Recupera el número de fila actual y dimensiono el array
            arrayDevuelto=new String[rset.getRow()];
        else
            return arrayDevuelto;
        //ahora cargo el array, poniendome al inicio del ResultSet
        rset.first();
        do{
            arrayDevuelto[i]=rset.getString(sNombre);
            i++;
        }
        while (rset.next());
        return arrayDevuelto;
    }
    catch (Exception e)
    {return arrayDevuelto;}
}
public static String implode(String[] pVector){
String sDevuelve="";
boolean bPrimera=true;
for (int i=0;i<pVector.length;i++){
    if (bPrimera){
        sDevuelve+=pVector[i];
        bPrimera=false;
    }
    else{
        sDevuelve+=","+pVector[i];
    }
}
    sDevuelve="("+sDevuelve+")";
    return sDevuelve;
        


}
public static int Numero_Registros(ResultSet rs){
int ir=0;
try{
    if (rs.last()){
        ir=rs.getRow();
    }
    else{
        ir=-1;
    }
}
catch(Exception e){
        ir=-1;
        }
return ir;


}
public static String Leer_campo(ResultSet rs,String snombreCampo)
{
try
{

return rs.getString(snombreCampo);
}
catch(Exception e)

{
return e.toString();
}
}

}

