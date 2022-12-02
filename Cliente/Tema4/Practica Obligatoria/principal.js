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
	document.getElementById("errorAltaCliente").innerHTML = "";
	/*
		Devuelve 
		4 si faltan datos.
		3 si el dni es inválido.
		2 error desconocido
		1 si ya existe el usuario
		0 se ha añadido el usuario correctamente
	*/
	let res;
	let cliente;

	let nombre = formAltaCliente.nombreCliente.value;
	let apellidos = formAltaCliente.apellidosCliente.value;
	let dni = formAltaCliente.dniCliente.value;

	cliente = new Cliente(dni, nombre, apellidos);

	res = agencia.altaCliente(cliente, agencia);

	switch (res) {
		case 0:
			document.getElementById("errorAltaCliente").innerHTML +=
				"Se ha completado el alta";
			break;
		case 1:
			document.getElementById("errorAltaCliente").innerHTML +=
				"Ya existe el usuario.";
			break;
		case 2:
			document.getElementById("errorAltaCliente").innerHTML +=
				"Fallo en los datos.";
			break;
		case 3:
			document.getElementById("errorAltaCliente").innerHTML +=
				"El dni es inválido.";
			break;
		case 4:
			document.getElementById("errorAltaCliente").innerHTML += "Faltan datos.";
			break;
	}

	document.getElementById("nombreCliente").value = "";
	document.getElementById("apellidosCliente").value = "";
	document.getElementById("dniCliente").value = "";
}
