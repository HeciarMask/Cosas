/* function verProvincia() {
	console.log(formulario.provincias.value);
} */

/* function verProvincia() {
	for (let prov of formulario.provincias)
		if (prov.selected == true) console.log(prov.value);
} */

function verProvincia() {
	console.log(
		formulario.provincias.options[formulario.provincias.selectedIndex].value
	);
}

formulario.boton.addEventListener("click", verProvincia);
