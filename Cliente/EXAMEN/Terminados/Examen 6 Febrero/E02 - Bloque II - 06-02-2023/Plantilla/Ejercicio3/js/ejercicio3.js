document.addEventListener("submit", procesar);
let salida = document.getElementById("salida");

let vacio = document.createElement("ul");
let fallo = document.createElement("ul");
let vacioAux = document.createElement("li");
let falloAux = document.createElement("li");
vacioAux.textContent = "Campos vacios";
falloAux.textContent = "Campos Fallidos";

vacio.append(vacioAux);
fallo.append(falloAux);

salida.append(vacio);
salida.append(fallo);

function procesar(event) {
	let marca = document.querySelector("[name='marca'").value;
	let modelo = document.querySelector("[name='modelo'").value;
	let fechMatr = document.querySelector("[name='fechaMatriculacion'").value;
	let tipoMatr = document.querySelector("[name='tipoMatricula'").value;
	let matricula = document.querySelector("[name='matricula'").value;
	let color = document.querySelector("[name='color'").value;

	let expMarca = /^[A-ZÑÁÉÍÓÚ][a-zñáéíóú]+$/;
	let expModelo = expMarca;
	let expFechMatr = /^[\d]{4}[-][\d]{2}[-][\d]{2}$/;
	let expMatricula;
	let expColor = /^[A-ZÑÁÉÍÓÚ]+$/i;
	switch (tipoMatr) {
		case "actual":
			expMatricula = /^[\d]{4}[A-Z]{3}$/;
			break;
		case "antigua":
			expMatricula = /^[A-Z]{1,2}[\d]{4}[A-Z]{1,2}$/;
			break;
		case "historica":
			expMatricula = /^[H][\d]{4}[A-Z]{3}$/;
			break;
	}

	if (
		!expMarca.test(marca) ||
		!expModelo.test(modelo) ||
		!expFechMatr.test(fechMatr) ||
		!expMatricula.test(matricula) ||
		!expColor.test(color)
	) {
		if (marca == "") error(vacio, "Marca");
		else if (!expMarca.test(marca)) error(fallo, "Marca");

		if (modelo == "") error(vacio, "Modelo");
		else if (!expModelo.test(modelo)) error(fallo, "Modelo");

		if (fechMatr == "") error(vacio, "Fecha Matriculacion");
		else if (!expFechMatr.test(fechMatr)) error(fallo, "Fecha Matriculacion");

		if (matricula == "") error(vacio, "Matricula");
		else if (!expMatricula.test(matricula)) error(fallo, "Matricula");

		if (color == "") error(vacio, "Color");
		else if (!expColor.test(color)) error(fallo, "Color");

		event.preventDefault();
	}
}

function error(contenedor, cadena) {
	let msj = document.createElement("li");
	msj.textContent = cadena;
	contenedor.append(msj);
}
