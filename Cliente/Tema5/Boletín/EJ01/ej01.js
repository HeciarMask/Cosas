/* function verActor() {
	console.log(formulario.actores.value);
} */

function verActor() {
	for (let actor of formulario.actores)
		if (actor.checked == true) console.log(actor.value);
}

consultar.addEventListener("click", verActor);
