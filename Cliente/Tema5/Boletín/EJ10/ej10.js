document.addEventListener("mousedown", manejador);
document.addEventListener("contextmenu", manejador);

function manejador(event) {
	let pulsado = "";
	switch (event.button) {
		case 0:
			pulsado = "Botón Izquierdo";
			break;
		case 1:
			pulsado = "Botón Central";
			break;
		case 2:
			pulsado = "Botón Derecho";
			break;
	}
	document.getElementById("salida").innerHTML = pulsado;
	if (event.button == 2) event.preventDefault();
}
