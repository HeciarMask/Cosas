const selectProvincia = document.getElementById("idprovincia");
const selectPoblacion = document.getElementById("idpoblacion");
const btnAceptar = document.getElementById("btnaceptar");
const contenedorTarjetas = document.getElementsByClassName("contenedor-tarjetas")[0];

const getProvincias = () => {
    fetch("provincias.php")
        .then((res) => res.json())
        .then((res) => {
            for (const provincia of Object.values(res)) {
                const opcion = document.createElement("option");
                opcion.value = provincia.id;
                opcion.innerText = provincia.nombre;
                selectProvincia.append(opcion);
            }
        })
        .catch((error) => console.log(error));
};

const getPoblaciones = () => {
    let idProv = selectProvincia.value;
    
    for (let i = selectPoblacion.children.length - 1; i > 0; i--){
        selectPoblacion.remove(i);
    }

    if (idProv == 0) return;

    let formData = new FormData();
    formData.append("id_provincia", idProv);
    fetch("poblaciones.php", {
        method: "POST",
        body: formData,
    })
        .then((res) => res.json())
        .then((res) => {

            for (const poblacion of Object.values(res)) {
                const opcion = document.createElement("option");
                opcion.value = poblacion.id;
                opcion.innerText = poblacion.nombre;
                selectPoblacion.append(opcion);
            }
        })
        .catch((error) => console.log(error));
};

const crearTarjetas = () => {
    let titulo = document.createElement("p");
    titulo.classList.add("titulo");
    titulo.innerText = selectPoblacion.options[selectPoblacion.selectedIndex].text;
    let subtitulo = document.createElement("p");
    subtitulo.classList.add("subtitulo");
    subtitulo.innerText = selectProvincia.options[selectProvincia.selectedIndex].text;;
    let tarjeta = document.createElement("div");
    tarjeta.classList.add("tarjeta");
    tarjeta.append(titulo);
    tarjeta.append(subtitulo);
    contenedorTarjetas.prepend(tarjeta);

    selectProvincia.value = 0;
    selectPoblacion.value = 0;
    getPoblaciones();

}

selectProvincia.addEventListener('change', getPoblaciones);
btnAceptar.addEventListener('click', crearTarjetas);
getProvincias();
