document.getElementById("boton").addEventListener("click", crearTabla);

function crearTabla() {
	let filas = formulario.filas.value;
	let columnas = formulario.columnas.value;
	let tabla = document.createElement("table");

	let contador = 1;

	for (let i = 0; i < filas; i++) {
		let fila = tabla.insertRow(i);
		for (let j = 0; j < columnas; j++) {
			let celda = fila.insertCell(j);
			celda.append(document.createTextNode(contador));
			contador++;
		}
	}

	document.getElementById("tabla").append(tabla);
	formulario.columnas.value = "";
	formulario.filas.value = "";
}
