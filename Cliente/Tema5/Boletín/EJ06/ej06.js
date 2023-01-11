document
	.getElementById("cuadrado")
	.addEventListener("mouseover", cuadradoAmarillo);

document
	.getElementById("cuadrado")
	.addEventListener("mouseout", cuadradoNoAmarillo);

document.getElementById("txtEntrada").addEventListener("keypress", textoFocus);

function cuadradoAmarillo(event) {
	const list = document.getElementById("cuadrado").classList;
	list.add("amarillo");

	document.getElementById("salida").innerHTML =
		"Evento: " + event.type + ", en el objeto: " + event.currentTarget;
}

function cuadradoNoAmarillo() {
	const list = document.getElementById("cuadrado").classList;
	list.remove("amarillo");
	document.getElementById("salida").innerHTML = "";
}

function textoFocus(event) {
	document.getElementById("salida").innerHTML =
		"Letra introducida: " + event.key;
}
