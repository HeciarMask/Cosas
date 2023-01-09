function verProvincia() {
	for (let prov of formulario.provincias) {
		if (prov.selected == true)
			console.log("Provincia: " + prov.text + ", Valor: " + prov.value + ".");
	}
}

formulario.boton.addEventListener("click", verProvincia);
