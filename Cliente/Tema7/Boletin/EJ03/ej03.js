document.getElementById("addTexto").addEventListener("click", procesarFichero);

function procesarFichero() {
	const nombreFichero = formulario.nombreFichero.value;
	console.log(nombreFichero);

	fetch(nombreFichero)
		.then((response) => response.text())
		.then(addTextoCapa)
		.catch(console.log);
}

const addTextoCapa = (texto) =>
	(document.getElementById("capa").innerHTML += texto);
