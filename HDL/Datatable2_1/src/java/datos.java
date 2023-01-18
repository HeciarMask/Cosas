
import java.util.ArrayList;
import java.util.List;
import javax.faces.component.html.HtmlDataTable;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 *
 * @author Juan
 */
public class datos {

    /**
     * Creates a new instance of datos
     */
    private List<Persona> personajes;
    private String txtNombre;
    private String txtId;
    private String txtApellidos;
    private Persona nuevoAlumno, seleccionada;
    private HtmlDataTable tabla;
    private int index;

    public datos() {
        personajes = new ArrayList<Persona>();
        this.personajes.add(new Persona(1, "Johnny", "Guitar"));
        this.personajes.add(new Persona(2, "Orson", "Welles"));
        this.personajes.add(new Persona(3, "Mohamed", "Safi"));
        this.personajes.add(new Persona(4, "Huang", "Lee"));
        this.personajes.add(new Persona(5, "Forrest", "Gump"));
    }

    /**
     * @return the personajes
     */
    public List<Persona> getPersonajes() {
        return personajes;
    }

    /**
     * @param personajes the personajes to set
     */
    public void setPersonajes(List<Persona> personajes) {
        this.personajes = personajes;
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
     * @return the txtId
     */
    public String getTxtId() {
        return txtId;
    }

    /**
     * @param txtId the txtId to set
     */
    public void setTxtId(String txtId) {
        this.txtId = txtId;
    }

    /**
     * @return the txtApellidos
     */
    public String getTxtApellidos() {
        return txtApellidos;
    }

    /**
     * @param txtApellidos the txtApellidos to set
     */
    public void setTxtApellidos(String txtApellidos) {
        this.txtApellidos = txtApellidos;
    }

    public void altaLista() {
        nuevoAlumno = new Persona(Integer.parseInt(this.txtId), this.txtNombre, this.txtApellidos);
        this.personajes.add(nuevoAlumno);

    }

    public void seleccionLista() {
        seleccionada = (Persona) tabla.getRowData();
        index = tabla.getRowIndex();
        this.txtId = seleccionada.getId() + "";
        this.txtNombre = seleccionada.getNombre();
        this.txtApellidos = seleccionada.getApellidos();
    }

    public void borrarLista() {
        this.personajes.remove(this.seleccionada);
        this.txtId = "";
        this.txtNombre = "";
        this.txtApellidos = "";

    }

    public void modificarLista() {
        this.seleccionada.setId(Integer.parseInt(txtId));
        this.seleccionada.setNombre(txtNombre);
        this.seleccionada.setApellidos(txtApellidos);
        this.personajes.set(index, seleccionada);
    }

    /**
     * @return the tabla
     */
    public HtmlDataTable getTabla() {
        return tabla;
    }

    /**
     * @param tabla the tabla to set
     */
    public void setTabla(HtmlDataTable tabla) {
        this.tabla = tabla;
    }
}
