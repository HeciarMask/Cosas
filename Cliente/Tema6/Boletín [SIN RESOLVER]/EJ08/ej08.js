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
	const estilos = document.getElementById("estilo");
	estilos.setAttribute("href", "");
}

function atributoStyle() {}

function asignandoClases() {}

function estilosPagina() {
	const estilos = document.getElementById("estilo");
	estilos.setAttribute("href", "ej08.css");
}
