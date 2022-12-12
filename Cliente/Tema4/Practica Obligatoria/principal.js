let agencia = datosIniciales();
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
		case "Lista-Clientes":
			document.getElementById("ListaClientes").style.display = "block";
			listarClientes();
			break;
		case "Lista-Alojamientos":
			document.getElementById("ListaAlojamientos").style.display = "block";
			listarAlojamientos();
			break;
		case "Lista-Reserva-Fecha":
			document.getElementById("ListaReservaFecha").style.display = "block";
			break;
		case "Lista-Reserva-Cliente":
			document.getElementById("ListaReservaCliente").style.display = "block";
			break;
		case "Lista-Habitacion":
			document.getElementById("ListaHabitacion").style.display = "block";
			listarHabitacion();
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

function darAltaAlojamiento() {
	document.getElementById("errorAltaCliente").innerHTML = "";
	let res;
	let idAloj = formAltaAlojamiento.idAlojamiento.value;
	let numPers = formAltaAlojamiento.numPersonas.value;
	let desayuno = false;
	let parking = false;
	let aloj;
	if (formAltaAlojamiento.aloj.value == "on") {
		if (document.getElementById("habitacion").checked) {
			if (document.getElementById("desayuno").checked) desayuno = true;

			aloj = new Habitacion(idAloj, numPers, desayuno);
		} else {
			if (document.getElementById("parking").checked) parking = true;

			let numHab = formAltaAlojamiento.numHabitaciones.value;

			aloj = new Apartamento(idAloj, numPers, parking, numHab);
		}

		res = agencia.altaAlojamiento(aloj, agencia);

		document.getElementById("errorAltaCliente").innerHTML = res;
	} else {
		document.getElementById("errorAltaCliente").innerHTML =
			"Seleccione un tipo de alojamiento.";
	}

	document.getElementById("idAlojamiento").value = "";
	document.getElementById("numPersonas").value = "";
	document.getElementById("desayuno").value = false;
	document.getElementById("parking").value = false;
	document.getElementById("numHabitaciones").value = "";
}

function darAltaReserva() {
	document.getElementById("errorAltaCliente").innerHTML = "";
	let res;
	let idRes = formAltaReserva.idReserva.value;
	let usuario = formAltaReserva.usuario.value;
	let fInicio = formAltaReserva.fInicio.value;
	let fFin = formAltaReserva.fFin.value;
	let reserva;
	if (formAltaReserva.listaAlojamientos.value != "") {
		let cadena = formAltaReserva.listaAlojamientos.value.replace(/ /g, "");
		let alojs = cadena.split(",");
		reserva = new Reserva(idRes, usuario, alojs, fInicio, fFin);
		res = agencia.altaReserva(reserva, agencia);
	} else {
		res = "No ha introducido ningún alojamiento.";
	}
	document.getElementById("errorAltaCliente").innerHTML = res;

	document.getElementById("idReserva").value = "";
	document.getElementById("usuario").value = "";
	document.getElementById("listaAlojamientos").value = "";
	document.getElementById("fInicio").value = "";
	document.getElementById("fFin").value = "";
}

function darBajaReserva() {
	document.getElementById("errorAltaCliente").innerHTML = "";
	let idRes = formBajaReserva.idReserva.value;
	let res = agencia.bajaReserva(idRes, agencia);

	document.getElementById("errorAltaCliente").innerHTML = res;
	document.getElementById("idReserva").value = "";
}

function listarClientes() {
	let cadena = agencia.listadoClientes();
	document.getElementById("listadoClientes").innerHTML = cadena;
}

function listarAlojamientos() {
	let cadena = agencia.listadoAlojamientos(agencia);
	document.getElementById("listadoAlojamientos").innerHTML = cadena;
}

function listarReservasFecha() {
	let fInicio = formListaReserva.fInicio.value;
	let fFin = formListaReserva.fFin.value;
	let cadena = agencia.listadoReservasFecha(fInicio, fFin);
	document.getElementById("listadoReservasFecha").innerHTML = cadena;
}

function listarReservasCliente() {
	let cliente = formListaReservaCliente.usuario.value;
	let cadena = agencia.listadoReservasCliente(cliente, agencia);
	document.getElementById("listadoReservasCliente").innerHTML = cadena;
}

function listarHabitacion() {
	let cadena = agencia.listadoHabitacion();
	document.getElementById("listadoHabitacion").innerHTML = cadena;
}

function datosIniciales() {
	let agencia = new Agencia();
	let cli1 = new Cliente("11111111A", "AAAA", "BBBBB CCCCC");
	agencia.altaCliente(cli1, agencia);
	let cli2 = new Cliente("22222222B", "BBBB", "CCCCC DDDDD");
	agencia.altaCliente(cli2, agencia);
	let cli3 = new Cliente("33333333C", "CCCC", "DDDDD EEEEE");
	agencia.altaCliente(cli3, agencia);
	let aloj1 = new Alojamiento("1111", 11);
	agencia.altaAlojamiento(aloj1, agencia);
	let aloj2 = new Alojamiento("2222", 22);
	agencia.altaAlojamiento(aloj2, agencia);
	let aloj3 = new Alojamiento("3333", 33);
	agencia.altaAlojamiento(aloj3, agencia);
	let aloj4 = new Habitacion("4444", 44, true);
	agencia.altaAlojamiento(aloj4, agencia);
	let res1 = new Reserva(
		"1111",
		"abbbccc111",
		new Array(aloj1, aloj2),
		"2022-12-01",
		"2022-12-10"
	);
	agencia.altaReserva(res1, agencia);

	return agencia;
}
