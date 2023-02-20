const salida = document.getElementById("salida");

fetch("coches.json")
	.then((res) => res.json())
	.then(imprimir);

function imprimir(res) {
	let tabla = document.createElement("table");
	let cabecera = document.createElement("thead");
	let fila, celda;
	cabecera.innerHTML =
		"<th>Marca</th><th>Modelo</th><th>Matricula</th><th>Kms</th>";
	tabla.append(cabecera);
	for (let coche of res.coches) {
		fila = tabla.insertRow();
		celda = fila.insertCell();
		celda.textContent = coche.marca;
		celda = fila.insertCell();
		celda.textContent = coche.modelo;
		celda = fila.insertCell();
		celda.textContent = coche.matricula;
		celda = fila.insertCell();
		celda.textContent = coche.kilometros;
	}
	salida.append(tabla);
}
