/* Dado el documento HTML facilitado con este ejercicio, añadir un único manejador de 
eventos que gestione la pulsación de las teclas de los diferentes dígitos mostrándolos 
en el input de solo lectura. */

document.getElementById("teclado").addEventListener("click", mostrarNumero);

function mostrarNumero(event) {
	if (event.target.tagName == "INPUT") {
		document.getElementById("salida").value += event.target.value;
	}
}
