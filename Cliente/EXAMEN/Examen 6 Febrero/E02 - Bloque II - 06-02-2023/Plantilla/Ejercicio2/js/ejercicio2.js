document
	.getElementById("botonRestaurar")
	.addEventListener("click", () => location.reload());

document.getElementById("botonEjecutar").addEventListener("click", ejecutar);

function ejecutar() {
	let origen = document.getElementById("origen");
	let checks = origen.querySelectorAll("[name='seleccion']:checked");
	let dst = document.getElementById("destino");
	let destino = dst.querySelectorAll("[name='seleccionDestinos']:checked")[0]
		.parentElement.parentElement;
	let operacion = dst.querySelectorAll("[name='operaciones']:checked")[0].value;
	let clonar = dst.querySelectorAll("[name='clonar']:checked")[0].value;
	let node;

	if (clonar == "si") clonar = true;
	else clonar = false;

	for (let check of checks) {
		let imagen = check.nextElementSibling.nextElementSibling;
		if (clonar) node = imagen.cloneNode();
		else node = imagen;

		console.log(operacion);
		console.log(destino);

		switch (operacion) {
			case "append":
				destino.append(node);
				break;
			case "prepend":
				destino.prepend(node);
				break;
			case "before":
				destino.before(node);
				break;
			case "after":
				destino.after(node);
				break;
		}
	}
}
