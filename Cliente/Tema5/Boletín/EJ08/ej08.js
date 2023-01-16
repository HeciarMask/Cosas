document.getElementById("txtEntrada").addEventListener("keypress", manejador);

function manejador(event) {
	if (event.key.match(/[0-9]/)) {
		event.preventDefault();
	}
}
