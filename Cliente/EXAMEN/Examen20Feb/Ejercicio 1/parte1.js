const apiRest =
	"https://examen20feb-default-rtdb.europe-west1.firebasedatabase.app/";

const salida = document.getElementById("salida");
formCrear.addEventListener("submit", crearClase);
formBorrar.addEventListener("submit", borrarClase);
formUpdate.addEventListener("submit", updateClase);
recuperarDatos();

function crearClase(event) {
	let nombre = formCrear.nombre.value;
	let curso = formCrear.curso.value;
	let profesor = formCrear.profesor.value;
	let alumnos = formCrear.alumnos.value;

	let clase = {
		nombre: nombre,
		curso: curso,
		profesor: profesor,
		alumnos: alumnos,
	};
	console.log("eo");
	event.preventDefault();
	fetch(apiRest + "modulos.json", {
		method: "POST",
		headers: {
			"Content-Type": "application/json;charset=utf-8",
		},
		body: JSON.stringify(clase),
	}).then((res) => res.json());

	setTimeout(recuperarDatos, 800);
}

function borrarClase(event) {
	event.preventDefault();
	let id = formBorrar.nombre.value;

	fetch(apiRest + "modulos/" + id + ".json", {
		method: "DELETE",
	})
		.then((res) => res.json())
		.catch(console.log("error"));

	setTimeout(recuperarDatos, 800);
}

function updateClase(event) {
	event.preventDefault();

	let id = formUpdate.id.value;
	let nombre = formUpdate.nombre.value;
	let curso = formUpdate.curso.value;
	let profesor = formUpdate.profesor.value;
	let alumnos = formUpdate.alumnos.value;

	let clase = {
		nombre: nombre,
		curso: curso,
		profesor: profesor,
		alumnos: alumnos,
	};

	fetch(apiRest + "modulos/" + id + ".json", {
		method: "PATCH",
		headers: {
			"Content-Type": "application/json;charset=utf-8",
		},
		body: JSON.stringify(clase),
	})
		.then((res) => res.json())
		.catch(console.log("error"));

	setTimeout(recuperarDatos, 800);
}

function recuperarDatos() {
	fetch(apiRest + "modulos.json")
		.then((res) => res.json())
		.then((data) => Object.values(data))
		.then(mostrarClases)
		.catch(console.log("error"));
}
function mostrarClases(clases) {
	let tabla = document.createElement("table");
	let cabecera = document.createElement("thead");
	let fila, celda;
	cabecera.innerHTML =
		"<th>Nombre</th><th>Curso</th><th>Profesor</th><th>Alumnos</th>";
	tabla.append(cabecera);
	for (let clase of clases) {
		fila = tabla.insertRow();
		celda = fila.insertCell();
		celda.textContent = clase.nombre;
		celda = fila.insertCell();
		celda.textContent = clase.curso;
		celda = fila.insertCell();
		celda.textContent = clase.profesor;
		celda = fila.insertCell();
		celda.textContent = clase.alumnos;
	}
	borrarSalida();
	salida.append(tabla);
}

function borrarSalida() {
	document.getElementById("salida").innerHTML = "";
}
