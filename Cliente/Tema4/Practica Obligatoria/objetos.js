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
      "<tr><td>" + this.idReserva + "</td><td>" + this.cliente + "</td><td>";

    for (let aloj of this.alojamientos) {
      res += aloj.idAlojamiento + ", ";
    }
    res = res.slice(0, -2);
    res +=
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

  altaCliente(oCliente, agencia) {
    let res = 2;
    let encontrado = false;

    try {
      if (
        oCliente.nombre == "" ||
        oCliente.Apellidos == "" ||
        oCliente.dniCliente == ""
      ) {
        res = 4;
        throw res;
      }
      let dni = oCliente.dniCliente.slice(0, -1);
      dni = dni.slice(-3);

      let apellidos =
        oCliente.Apellidos.slice(0, 3) +
        oCliente.Apellidos.slice(
          oCliente.Apellidos.indexOf(" ") + 1,
          oCliente.Apellidos.indexOf(" ") + 4
        );

      if (dni.length < 3) {
        res = 3;
        throw res;
      } else if (isNaN(Number.parseInt(dni)) == true) {
        res = 3;
        throw res;
      }

      let user = oCliente.nombre.slice(0, 1) + apellidos + dni;
      user = user.toLocaleLowerCase();

      for (let cliente of agencia.clientes) {
        if (cliente.usuario == user) encontrado = true;
      }

      if (!encontrado) {
        oCliente.usuario = user;
        this.clientes.push(oCliente);
        return 0;
      } else {
        return 1;
      }
    } catch (err) {
      return res;
    }
  }

  altaAlojamiento(oAlojamiento, agencia) {
    let res = "Error al realizar el alta de alojamiento";

    let encontrado = false;

    for (let aloj of agencia.alojamientos) {
      if (aloj.idAlojamiento == oAlojamiento.idAlojamiento) {
        encontrado = true;
      }
    }

    if (!encontrado && oAlojamiento.numPersonas > 0) {
      agencia.alojamientos.push(oAlojamiento);
      res = "Alta de alojamiento correcto";
    }

    return res;
  }

  altaReserva(oReserva, agencia) {
    let res = "Error al realizar el alta de reserva";
    let encontrado = false;
    let fallo = false;

    for (let reserva of agencia.reservas) {
      if (reserva.idReserva == oReserva.idReserva) {
        encontrado = true;
      }
    }

    for (let reserva of agencia.reservas) {
      if (
        reserva.alojamientos.some((x) => {
          for (let aux of oReserva.alojamientos) {
            if (aux.idAlojamiento == x.idAlojamiento) return false;
          }
        })
      ) {
        if (
          (oReserva.fechaInicio <= reserva.fechaInicio &&
            oReserva.fechaFin >= reserva.fechaInicio) ||
          (oReserva.fechaInicio >= reserva.fechaInicio &&
            oReserva.fechaInicio <= reserva.fechaFin)
        ) {
          fallo = true;
        }
      }
    }

    if (!encontrado && !fallo) {
      this.reservas.push(oReserva);
      res = "Alta de reserva correcta";
    }

    return res;
  }

  bajaReserva(idReserva, agencia) {
    res = "Error al realizar la baja de reserva";

    let encontrado = agencia.reservas.forEach(function (
      currentValue,
      oReserva
    ) {
      if (currentValue.idReserva == idReserva) {
        aagencia.reservas.pop(currentValue);
        return true;
      }
    });

    if (encontrado) {
      res = "Baja de reserva realizada";
    }

    return res;
  }

  listadoClientes() {
    let res = "";

    res += "<table class='table'><thead>";
    res +=
      "<tr><th>Dni</th><th>Nombre</th><th>Apellidos</th><th>Usuario</th></tr>";
    res += "</thead><tbody>";

    this.clientes.forEach(function (currentValue) {
      res += currentValue.toHTMLRow();
    });

    res += "</tbody></table>";
    return res;
  }

  listadoAlojamientos() {
    let res = "";

    res += "<table class='table'><thead>";
    res += "<tr><th>Id Alojamiento</th><th>Num Personas</th></tr>";
    res += "</thead><tbody>";

    this.alojamientos.forEach(function (currentValue) {
      res += currentValue.toHTMLRow();
    });

    res += "</tbody></table>";
    return res;
  }

  listadoReservasFecha(fInicio, fFin) {
    let res = "";

    res += "<table class='table'><thead>";
    res +=
      "<tr><th>Id Reserva</th><th>Cliente</th><th>Alojamientos</th><th>Fecha Inicio</th><th>Fecha Fin</th></tr>";
    res += "</thead><tbody>";

    for (let reserva of this.reservas) {
      if (
        (fInicio <= reserva.fechaInicio && fFin >= reserva.fechaInicio) ||
        (fInicio >= reserva.fechaInicio && fFin <= reserva.fechaFin)
      ) {
        res += reserva.toHTMLRow();
      }
    }
    res += "</tbody></table>";
    return res;
  }

  listadoReservasCliente(user) {
    let res = "";

    res += "<table class='table'><thead>";
    res +=
      "<tr><th>Id Reserva</th><th>Cliente</th><th>Alojamientos</th><th>Fecha Inicio</th><th>Fecha Fin</th></tr>";
    res += "</thead><tbody>";

    for (let reserva of this.reservas) {
      if (reserva.cliente == user) res += reserva.toHTMLRow();
    }

    res += "</tbody></table>";
    return res;
  }

  listadoHabitacion() {
    let res = "";

    res += "<table class='table'><thead>";
    res +=
      "<tr><th>Dni</th><th>Id Habitacion</th><th>Num Personas</th><th>Desayuno</th></tr>";
    res += "</thead><tbody>";

    for (let aloj of agencia.alojamientos) {
      if (aloj instanceof Habitacion && aloj.desayuno == true) {
        this.alojamientos.forEach(function (x) {
          if (x == user) res += x.toHTMLRow;
        });
      }
    }

    res += "</table>";
    return res;
  }
}
