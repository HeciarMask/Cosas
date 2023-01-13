const btnSubmit = dformulario.btnAceptar;

btnSubmit.addEventListener("submit", validador);

btnAceptar.addEventListener("submit", (event) => {
	event.preventDefault();
	alert("submitting");
});

function validador(event) {
	event.preventDefault();
	if (txtTexto.length == 0) {
		event.stopPropagation();
		alert("cuidao");
	}
	alert(txtTexto.value);
}
