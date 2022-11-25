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

function darAltaCliente() {
	/*
		Devuelve 
		4 si faltan datos.
		3 si el dni es inválido.
		2 error desconocido
		1 si ya existe el usuario
		0 se ha añadido el usuario correctamente
	*/
	let res;

	let nombre = formAltaCliente.nombreCliente.value;
	let apellidos = formAltaCliente.apellidosCliente.value;
	let dni = formAltaCliente.dniCliente.value;

	if (nombre == "" || apellidos == "" || dni == "") {
		res = 4;
	} else if (dni.length < 3) {
		res = 3;
	} else if (isNaN(Number.parseInt(dni)) == true) {
		res = 3;
	} else {
		dni = Number.parseInt(dni);
	}

	let cliente = new Cliente(dni, nombre, apellidos);
	res = agencia.altaCliente(cliente);
	if (res != 0) document.getElementById("errorAltaCliente").innerHTML = res;
}
