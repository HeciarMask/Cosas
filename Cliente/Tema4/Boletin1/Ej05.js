class Bonobus {}

class BonoDiezViajes extends Bonobus {
	#nViajes;
	constructor() {
		super();
		this.#nViajes = 10;
	}

	get nViajes() {
		return this.#nViajes;
	}
	set nViajes(x) {
		this.#nViajes = x;
	}

	picarViaje(linea, dia, mes, anno, hh, mm) {
		let valido = false;

		if (this.nViajes > 0) {
			this.nViajes--;
			valido = true;
		}

		return valido;
	}
}

class BonoDiezViajesConTrasbordo extends BonoDiezViajes {
	#nLinea;
	#dia;
	#mes;
	#anno;
	#hh;
	#mm;

	constructor() {
		super();
	}

	descontarViajes(linea, dia, mes, anno, hh, mm) {
		this.#nlinea = linea;
		this.#dia = dia;
		this.#mes = mes;
		this.#anno = anno;
		this.#hh = hh;
		this.#mm = mm;

		this.nViajes--;
	}

	dentroDePrimeraHora(dia, mes, anno, hh, mm) {
		let actual = new Date(anno, mes, dia, hh, mm);
		let picado = new Date(this.#dia, this.#mes, this.#anno, this.#hh, this.#mm);
		let dif = actual - picado;
		dif = dif / (1000 * 60 * 60 * 60);

		if (dif <= 1) return true;
		return false;
	}

	picarViaje(linea, dia, mes, anno, hh, mm) {
		let valido = false;

		if (this.nViajes == 10) {
			descontarViajes(linea, dia, mes, anno, hh, mm);
			valido = true;
		} else if (this.nViajes > 0) {
			if (!this.#nlinea && dentroDePrimeraHora(dia, mes, anno, hh, mm)) {
				valido = true;
			} else {
				descontarViajes(linea, dia, mes, anno, hh, mm);
				valido = true;
			}
		} else if ((this.nViajes = 0)) {
			if (!this.#nlinea && dentroDePrimeraHora(dia, mes, anno, hh, mm)) {
				valido = true;
			}
		}
		if (valido) console.log("Es válido");
		else console.log("No es válido");
		return valido;
	}
}

class BonoTarifaPlana extends Bonobus {
	#caducidad;
	constructor() {
		super();
	}
	get caducidad() {
		return this.#caducidad;
	}
	set caducidad(x) {
		this.#caducidad = x;
	}

	picarViaje(dia, mes, anno, hh, mm) {
		let valido = false;

		let actual = new Date(anno, mes, dia, hh, mm);

		if (caducidad === undefined) {
			caducidad = new Date(anno, mes, dia, hh, mm);
		} else {
			if (caducidad >= actual) valido = true;
		}

		if (valido) console.log("Es válido");
		else console.log("No es válido");

		return valido;
	}
}

class BonoTraifaPlanaUnDia extends BonoTarifaPlana {
	constructor() {
		super();
	}

	picarViaje(dia, mes, anno, hh, mm) {
		let valido = false;

		let actual = new Date(anno, mes, dia, hh, mm);

		if (caducidad === undefined) {
			caducidad = new Date(anno, mes, dia + 1, hh, mm);
		} else {
			if (caducidad >= actual) valido = true;
		}

		if (valido) console.log("Es válido");
		else console.log("No es válido");

		return valido;
	}
}

class BonoTraifaPlanaTresDias extends BonoTarifaPlana {
	constructor() {
		super();
	}

	picarViaje(dia, mes, anno, hh, mm) {
		let valido = false;

		let actual = new Date(anno, mes, dia, hh, mm);

		if (caducidad === undefined) {
			caducidad = new Date(anno, mes, dia + 3, hh, mm);
		} else {
			if (caducidad >= actual) valido = true;
		}

		if (valido) console.log("Es válido");
		else console.log("No es válido");

		return valido;
	}
}

class BonoTraifaPlanaUnMes extends BonoTarifaPlana {
	constructor() {
		super();
	}

	picarViaje(dia, mes, anno, hh, mm) {
		let valido = false;

		let actual = new Date(anno, mes, dia, hh, mm);

		if (caducidad === undefined) {
			caducidad = new Date(anno, mes + 1, dia, hh, mm);
		} else {
			if (caducidad >= actual) valido = true;
		}

		if (valido) console.log("Es válido");
		else console.log("No es válido");

		return valido;
	}
}

class BonoTraifaPlanaUnAnno extends BonoTarifaPlana {
	constructor() {
		super();
	}

	picarViaje(dia, mes, anno, hh, mm) {
		let valido = false;

		let actual = new Date(anno, mes, dia, hh, mm);

		if (caducidad === undefined) {
			caducidad = new Date(anno + 1, mes, dia, hh, mm);
		} else {
			if (caducidad >= actual) valido = true;
		}

		if (valido) console.log("Es válido");
		else console.log("No es válido");

		return valido;
	}
}
