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

	/* dentroDePrimeraHora(dia, mes, anno, hh, mm) {
		if (anno == this.#anno) {
			if (mes == this.#mes) {
				if (dia == this.#dia) {
					if (hh == this.#hora) {
						return true;
					} else if (mm <= this.#mm) {
						return true;
					}
				} else if (dia == dia + 1) {
					if (this.#hh - hh == 23 && mm <= this.#mm) {
						return true;
					}
				}
			} else if (mes == mes + 1) {
				if (this.#mes - mes == 29 && this.#hh - hh == 23 && mm <= this.#mm) {
					return true;
				}
			}
		} else if (anno == anno + 1) {
		}

		return false;
	} */

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

		return valido;
	}
}

class BonoTarifaPlana extends Bonobus {}
