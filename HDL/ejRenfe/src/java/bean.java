
import java.util.ArrayList;
import javax.faces.model.SelectItem;


public class bean {

    /**
     * Creates a new instance of bean
     */
    public bean() {
    }
    
    public ArrayList arrayTrenes(){
        ArrayList trenes=new ArrayList();
        trenes.add(new SelectItem("AVE"));
        trenes.add(new SelectItem("Tren con literas"));
        trenes.add(new SelectItem("Corta Distancia"));
        trenes.add(new SelectItem("Taigo: Fabricado en España"));
        
        return trenes;
    }
    
}
