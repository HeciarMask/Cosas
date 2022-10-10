
public class datos {
    
    private String nombre;
    private String correo;
    private String dni;
    private boolean asiduo;
    private String[] provincias;
    private String[] peliculas;
    private String[] aperitivos;
    
    public datos() {
    }

    /**
     * @return the nombre
     */
    public String getNombre() {
        return nombre;
    }

    /**
     * @param nombre the nombre to set
     */
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    /**
     * @return the correo
     */
    public String getCorreo() {
        return correo;
    }

    /**
     * @param correo the correo to set
     */
    public void setCorreo(String correo) {
        this.correo = correo;
    }

    /**
     * @return the dni
     */
    public String getDni() {
        return dni;
    }

    /**
     * @param dni the dni to set
     */
    public void setDni(String dni) {
        this.dni = dni;
    }

    /**
     * @return the asiduo
     */
    public boolean isAsiduo() {
        return asiduo;
    }

    /**
     * @param asiduo the asiduo to set
     */
    public void setAsiduo(boolean asiduo) {
        this.asiduo = asiduo;
    }

    /**
     * @return the provincias
     */
    public String[] getProvincias() {
        return provincias;
    }

    /**
     * @param provincias the provincias to set
     */
    public void setProvincias(String[] provincias) {
        this.provincias = provincias;
    }

    /**
     * @return the peliculas
     */
    public String[] getPeliculas() {
        return peliculas;
    }

    /**
     * @param peliculas the peliculas to set
     */
    public void setPeliculas(String[] peliculas) {
        this.peliculas = peliculas;
    }

    /**
     * @return the aperitivos
     */
    public String[] getAperitivos() {
        return aperitivos;
    }

    /**
     * @param aperitivos the aperitivos to set
     */
    public void setAperitivos(String[] aperitivos) {
        this.aperitivos = aperitivos;
    }
    
}
