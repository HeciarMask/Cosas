
import java.util.ArrayList;
import java.util.List;


public class ListaPersonas {

    private List<Persona> personajes;
    
    public ListaPersonas() {
    }

    public List<Persona> getPersonajes() {
        personajes = new ArrayList<Persona>();
        personajes.add(new Persona("111","Lisa","Perez"));
        personajes.add(new Persona("222","EO","Juanes"));
        return personajes;
    }

    public void setPersonajes(List<Persona> personajes) {
        this.personajes = personajes;
    }
    
}
