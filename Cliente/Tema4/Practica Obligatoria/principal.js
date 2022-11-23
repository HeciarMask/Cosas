let agencia = new Agencia();
ocultarTodo();

function ocultarTodo() {
	let oCustomPags = document.getElementsByClassName("customPag");

	for (let i = 0; i < oCustomPags.length; i++) {
		oCustomPags[i].style.display = "none";
	}
}

function gestionCustomPags(sCustomPag) {
	ocultarTodo();

	// Hacemos visible el formulario que llega como parámetro
	switch (sCustomPag) {
		case "Alta-Cliente":
			document.getElementById("AltaCliente").style.display = "block";
			break;

		case "Alta-Alojamiento":
			document.getElementById("AltaAlojamiento").style.display = "block";
			break;
		case "Alta-Reserva":
			document.getElementById("AltaReserva").style.display = "block";
			break;
		case "Baja-Reserva":
			document.getElementById("BajaReserva").style.display = "block";
			break;
	}
}

function tipoAloj() {
	if (document.getElementById("habitacion").checked) {
		document.getElementById("apartamentoPag").style.display = "none";
		document.getElementById("habitacionPag").style.display = "block";
	} else if (document.getElementById("apartamento").checked) {
		document.getElementById("habitacionPag").style.display = "none";
		document.getElementById("apartamentoPag").style.display = "block";
	}
}
