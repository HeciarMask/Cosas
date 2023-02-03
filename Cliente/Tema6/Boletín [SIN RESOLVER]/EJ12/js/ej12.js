document.addEventListener("DOMContentLoaded", function () {
	document.getElementById("btnBorrar").onclick = borrarSeleccionados;
	document.getElementById("btnAplicar").onclick = aplicarSeleccion;
	let imagenes = document.getElementsByTagName("img");
	for (let i = 0; i < imagenes.length; i++)
		imagenes[i].onclick = function () {
			permutarSeleccion(this);
		};
});

function borrarSeleccionados() {
	const seleccionados = document.getElementsByClassName("seleccionado");
	for (let i = seleccionados.length - 1; i >= 0; i--) {
		seleccionados[i].remove();
	}
}

function permutarSeleccion(img) {
	if (img.classList.contains("seleccionado")) {
		img.classList.remove("seleccionado");
	} else {
		img.classList.add("seleccionado");
	}
}

function aplicarSeleccion() {
	const destino = document.querySelector("[name='sitio']:checked").value;
	const lugar = document.querySelector("[name='lugar']:checked").value;
	const clonar = document.querySelector("[name='clonar']").checked;
	const contenedorDestino = document.getElementById(destino);
	const seleccionados = document.querySelectorAll(".seleccionado");
	let nodo;

	for (let selec of seleccionados) {
		console.log(selec.getAttribute("id"));
		if (clonar) {
			nodo = selec.cloneNode();
			nodo.onclick = function () {
				permutarSeleccion(this);
			};
		} else {
			nodo = selec;
		}
		if (lugar == "first" && contenedorDestino.children.length > 1) {
			console.log(selec.getAttribute("id"));
			contenedorDestino.children[0].after(nodo);
		} else {
			console.log(selec.getAttribute("id"));
			contenedorDestino.append(nodo);
		}
	}
	quitarSeleccion();
}

function quitarSeleccion() {
	let seleccionados = document.querySelectorAll(".seleccionado");
	for (let i = 0; i < seleccionados.length; i++) {
		seleccionados[i].classList.remove("seleccionado");
	}
}
