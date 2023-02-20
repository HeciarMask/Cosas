const salida = document.getElementById("salida");

document
	.getElementById("formularioConsulta")
	.addEventListener("submit", consultar);
document
	.getElementById("formularioModificar")
	.addEventListener("submit", modificar);
document
	.getElementById("formularioEliminar")
	.addEventListener("submit", eliminar);
document
	.getElementById("formularioInsercion")
	.addEventListener("submit", insertar);

function consultar(event) {
	event.preventDefault();
	let datos = new FormData(document.getElementById("formularioConsulta"));

	fetch("seleccionar.php", {
		method: "POST",
		body: datos,
	})
		.then((res) => res.json())
		.then(imprimirResultados);
}
function imprimirResultados(lista) {
	let cadenaSalida = "<ul>";
	for (let coche of lista) {
		cadenaSalida +=
			"<li>" +
			coche.marca +
			" - " +
			coche.modelo +
			" - " +
			coche.matricula +
			" - " +
			coche.kilometros +
			"</li>";
	}
	salida.innerHTML = cadenaSalida + "</ul>";
}
function modificar(event) {
	event.preventDefault();
	let datos = new FormData(document.getElementById("formularioModificar"));

	fetch("actualizar.php", {
		method: "POST",
		body: datos,
	})
		.then((res) => res.text())
		.then(resultado);
}
function eliminar(event) {
	event.preventDefault();
	let datos = new FormData(document.getElementById("formularioEliminar"));

	fetch("borrar.php", {
		method: "POST",
		body: datos,
	})
		.then((res) => res.text())
		.then(resultado);
}
function insertar(event) {
	event.preventDefault();
	let datos = new FormData(document.getElementById("formularioInsercion"));

	fetch("insertar.php", {
		method: "POST",
		body: datos,
	})
		.then((res) => res.text())
		.then(resultado);
}
function resultado(res) {
	salida.innerHTML = res;
}
