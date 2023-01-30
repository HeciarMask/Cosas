document.getElementById("boton").addEventListener("click", annadirTarea);

const TABLA = document.getElementById("tbody");

function annadirTarea(event) {
	let tarea = document.getElementsByName("tarea")[0].value;
	let prio = document.getElementsByName("prioridad")[0].value;
	let fila = TABLA.insertRow(-1);
	let fuera = true;
	let contador = 0;

	let text0 = document.createTextNode(1);
	let text1 = document.createTextNode(tarea);
	let text2 = document.createTextNode(prio);
	let text3 = document.createTextNode("X");

	let celda0 = fila.insertCell(-1);
	let celda1 = fila.insertCell(-1);
	let celda2 = fila.insertCell(-1);
	let celda3 = fila.insertCell(-1);

	celda0.append(text0);
	celda1.append(text1);
	celda2.append(text2);
	celda3.append(text3);

	if (TABLA.lenght != 1) {
		for (let filas of TABLA.children) {
			if (obtenPrioridad(filas.children[2].innerHTML) > obtenPrioridad(prio)) {
				filas.before(fila);
				fuera = false;
			}
			if (!fuera) break;
			contador++;
		}
	}

	text0.nodeValue = contador + ".";
}

function obtenPrioridad(prioridad) {
	let num = 0;
	switch (prioridad) {
		case "Muy alta":
			num = 0;
			break;
		case "Alta":
			num = 1;
			break;
		case "Media":
			num = 2;
			break;
		case "Baja":
			num = 3;
			break;
		case "Muy baja":
			num = 4;
			break;
	}
	return num;
}
