/* listado reservas => reservas que inician y terminan en el rango */
/* alojamientos: orden por numero de personas y luego por id */

class Cliente {
	#dniCliente = "";
	#nombre;
	#Apellidos;
	#usuario = "";

	constructor(dniCliente, nombre, Apellidos) {
		this.#dniCliente = dniCliente;
		this.#nombre = nombre;
		this.#Apellidos = Apellidos;
	}

	get dniCliente() {
		return this.#dniCliente;
	}
	set dniCliente(value) {
		this.#dniCliente = value;
	}
	get nombre() {
		return this.#nombre;
	}
	set nombre(value) {
		this.#nombre = value;
	}
	get Apellidos() {
		return this.#Apellidos;
	}
	set Apellidos(value) {
		this.#Apellidos = value;
	}
	get usuario() {
		return this.#usuario;
	}
	set usuario(value) {
		this.#usuario = value;
	}

	toHTMLRow() {
		let res = "";

		res =
			"<tr><td>" +
			this.dniCliente +
			"</td><td>" +
			this.nombre +
			"</td><td>" +
			this.Apellidos +
			"</td><td>" +
			this.usuario +
			"</td></tr>";

		return res;
	}
}

class Alojamiento {
	#idAlojamiento;
	#numPersonas;

	constructor(idAlojamiento, numPersonas) {
		this.#idAlojamiento = idAlojamiento;
		this.#numPersonas = numPersonas;
	}

	get numPersonas() {
		return this.#numPersonas;
	}
	set numPersonas(value) {
		this.#numPersonas = value;
	}
	get idAlojamiento() {
		return this.#idAlojamiento;
	}
	set idAlojamiento(value) {
		this.#idAlojamiento = value;
	}

	toHTMLRow() {
		let res = "";

		res =
			"<tr><td>" +
			this.idAlojamiento +
			"</td><td>" +
			this.numPersonas +
			"</td></tr>";

		return res;
	}
}

class Habitacion extends Alojamiento {
	#desayuno;

	constructor(idAlojamiento, numPersonas, desayuno) {
		super(idAlojamiento, numPersonas);
		this.#desayuno = desayuno;
	}

	get desayuno() {
		return this.#desayuno;
	}
	set desayuno(value) {
		this.#desayuno = value;
	}

	toHTMLrow() {
		let salidaPadre = super.toHTMLrow();
		let salida =
			salidaPadre.replace("</tr>", "") + "<td>" + this.desayuno + "</td></tr>";
		return salida;
	}
}

class Apartamento extends Alojamiento {
	#parking;
	#dormitorios;

	constructor(idAlojamiento, numPersonas, parking, dormitorios) {
		super(idAlojamiento, numPersonas);
		this.#parking = parking;
		this.#dormitorios = dormitorios;
	}

	get dormitorios() {
		return this.#dormitorios;
	}
	set dormitorios(value) {
		this.#dormitorios = value;
	}
	get parking() {
		return this.#parking;
	}
	set parking(value) {
		this.#parking = value;
	}

	toHTMLrow() {
		let salidaPadre = super.toHTMLrow();
		let salida =
			salidaPadre.replace("</tr>", "") +
			"<td>" +
			this.parking +
			"<td>" +
			this.dormitorios +
			"</td></tr>";
		return salida;
	}
}

class Reserva {
	#idReserva;
	#cliente;
	#alojamientos;
	#fechaInicio;
	#fechaFin;

	constructor(idReserva, cliente, alojamientos, fechaInicio, fechaFin) {
		this.#idReserva = idReserva;
		this.#cliente = cliente;
		this.#alojamientos = alojamientos;
		this.#fechaInicio = fechaInicio;
		this.#fechaFin = fechaFin;
	}

	get fechaFin() {
		return this.#fechaFin;
	}
	set fechaFin(value) {
		this.#fechaFin = value;
	}
	get fechaInicio() {
		return this.#fechaInicio;
	}
	set fechaInicio(value) {
		this.#fechaInicio = value;
	}
	get alojamientos() {
		return this.#alojamientos;
	}
	set alojamientos(value) {
		this.#alojamientos = value;
	}
	get cliente() {
		return this.#cliente;
	}
	set cliente(value) {
		this.#cliente = value;
	}
	get idReserva() {
		return this.#idReserva;
	}
	set idReserva(value) {
		this.#idReserva = value;
	}

	toHTMLRow() {
		let res = "";

		res =
			"<tr><td>" +
			this.idReserva +
			"</td><td>" +
			this.cliente +
			"</td><td>" +
			this.alojamientos +
			"</td><td>" +
			this.fechaInicio +
			"</td><td>" +
			this.fechaFin +
			"</td></tr>";

		return res;
	}
}

class Agencia {
	#clientes;
	#reservas;
	#alojamientos;
	#pilaIds;
	#numMaxReservas;

	constructor() {
		this.#clientes = [];
		this.#reservas = [];
		this.#alojamientos = [];
		this.#pilaIds = [];
		this.#numMaxReservas = 0;
	}

	get numMaxReservas() {
		return this.#numMaxReservas;
	}
	set numMaxReservas(value) {
		this.#numMaxReservas = value;
	}
	get pilaIds() {
		return this.#pilaIds;
	}
	set pilaIds(value) {
		this.#pilaIds = value;
	}
	get alojamientos() {
		return this.#alojamientos;
	}
	set alojamientos(value) {
		this.#alojamientos = value;
	}
	get reservas() {
		return this.#reservas;
	}
	set reservas(value) {
		this.#reservas = value;
	}
	get clientes() {
		return this.#clientes;
	}
	set clientes(value) {
		this.#clientes = value;
	}

	altaCliente(oCliente) {
		let res = "Error ar introducir los datos";

		if (
			oCliente.Apellidos != "" &&
			oCliente.dniCliente != "" &&
			oCliente.nombre != ""
		) {
			/* let nombre = String(formNombre.nombre.value);
            let apellido1 = String(formNombre.apell1.value);
            let apellido2 = String(formNombre.apell2.value);

            let nomCompleto = nombre + " " + apellido1 + " " + apellido2;

            let nomJunto = nomCompleto.replace(/ /g, "");

            let apellido1Aux = apellido1.replace(/ /g, "");
            let apellido2Aux = apellido2.replace(/ /g, "");
            let usuario = nombre.slice(0,1) + apellido1Aux.slice(0,3) + apellido2Aux.slice(0,3); */
		}

		return res;
	}
}
