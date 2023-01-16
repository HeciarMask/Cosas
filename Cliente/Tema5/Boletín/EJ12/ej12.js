formulario.addEventListener("submit", validador);

// DETIENE EL SUBMIT CUANDO EL INPUT ESTÁ VACÍO

function validador(event) {
	if (formulario.txtTexto.value.length == 0) {
		event.preventDefault();
		alert("cuidao");
	}
}
