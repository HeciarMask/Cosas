/* document.getElementById("principal").addEventListener("click", priDiagonal);
document.getElementById("secundaria").addEventListener("click", secDiagonal);
document.getElementById("resetear").addEventListener("click", resetear); */

document.addEventListener("click", clicacion);

function clicacion(event) {
	switch (event.target.id) {
		case "principal":
			priDiagonal();
			break;
		case "secundaria":
			secDiagonal();
			break;
		case "resetear":
			resetear();
			break;
	}
}

function priDiagonal() {
	let tabla = encuentraTabla();
	for (let i = 0; i < tabla.rows.length; i++) {
		for (let j = 0; j < tabla.rows[i].cells.length; j++) {
			if (i == j) {
				tabla.rows[i].cells[j].style.backgroundColor = "red";
			} else {
				tabla.rows[i].cells[j].style.backgroundColor = "white";
			}
		}
	}
}

function secDiagonal() {
	let tabla = encuentraTabla();
	for (let i = 0; i < tabla.rows.length; i++) {
		for (let j = 0; j < tabla.rows[i].cells.length; j++) {
			if (i + j == 4) {
				tabla.rows[i].cells[j].style.backgroundColor = "red";
			} else {
				tabla.rows[i].cells[j].style.backgroundColor = "white";
			}
		}
	}
}

function resetear() {
	let tabla = encuentraTabla();
	for (let i = 0; i < tabla.rows.length; i++) {
		for (let j = 0; j < tabla.rows[i].cells.length; j++) {
			tabla.rows[i].cells[j].style.backgroundColor = "white";
		}
	}
}

function encuentraTabla() {
	let tabla = document.getElementsByTagName("table")[0];
	return tabla;
}
