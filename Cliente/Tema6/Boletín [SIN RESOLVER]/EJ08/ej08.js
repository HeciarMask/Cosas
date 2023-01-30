document.addEventListener("change", selector);

function selector(event) {
	let sel = formulario.opciones.value;
	switch (sel) {
		case "quitarEstilos":
			quitarEstilos();
			break;
		case "atributoStyle":
			atributoStyle();
			break;
		case "asignandoClases":
			asignandoClases();
			break;
		case "estilosPagina":
			estilosPagina();
			break;
		default:
			console.log("Error en switch");
	}
}

function quitarEstilos() {
	console.log(object);
}

function atributoStyle() {
	console.log(object);
}

function asignandoClases() {
	console.log(object);
}

function estilosPagina() {
	console.log(object);
}
