formulario.addEventListener("submit", validador);

function validador(event) {
	const elementos = formulario.childNodes;
	let algunoVacio = elementos.forEach(estanVacios(node));

	if (algunoVacio) event.preventDefault();
}

function estanVacios(node) {
	if (node.nodeName == "INPUT") {
		console.log("encontraste el Input");
	}
}
