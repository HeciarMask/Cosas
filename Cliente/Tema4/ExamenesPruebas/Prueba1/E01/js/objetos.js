class Arbol {
	#codigo;
	#tallaje;
	#especie;

	constructor(codigo, tallaje, especie) {
		this.#codigo = codigo;
		this.#tallaje = tallaje;
		this.#especie = especie;
	}

	get especie() {
		return this.#especie;
	}
	set especie(value) {
		this.#especie = value;
	}

	get tallaje() {
		return this.#tallaje;
	}
	set tallaje(value) {
		this.#tallaje = value;
	}

	get codigo() {
		return this.#codigo;
	}
	set codigo(value) {
		this.#codigo = value;
	}

	toHTMLrow() {
		let salida =
			"<tr><td>" +
			this.codigo +
			"</td><td>" +
			this.tallaje +
			"</td><td>" +
			this.especie +
			"</td></tr>";

		return salida;
	}
}

class Perenne extends Arbol {
	#frutal;

	constructor(codigo, tallaje, especie, frutal) {
		super(codigo, tallaje, especie);
		this.#frutal = frutal;
	}

	get frutal() {
		return this.#frutal;
	}
	set frutal(value) {
		this.#frutal = value;
	}

	toHTMLrow() {
		let salidaPadre = super.toHTMLrow();
		let salida =
			salidaPadre.replace("</tr>", "") + "<td>" + this.frutal
				? "Sí"
				: "No" + "</td></tr>";
		return salida;
	}
}

class Caduco extends Arbol {
	#mesFloracion;

	constructor(codigo, tallaje, especie, frutal) {
		super(codigo, tallaje, especie);
		this.#mesFloracion = this.mesFloracion;
	}

	get mesFloracion() {
		return this.#mesFloracion;
	}
	set mesFloracion(value) {
		this.#mesFloracion = value;
	}

	toHTMLrow() {
		let salidaPadre = super.toHTMLrow();
		let salida =
			salidaPadre.replace("</tr>", "") +
			"<td>" +
			this.mesFloracion +
			"</td></tr>";
		return salida;
	}
}

class Vivero {
	#arboles;

	constructor(arboles) {
		this.#arboles = [];
	}

	get arboles() {
		return this.#arboles;
	}
	set arboles(value) {
		this.#arboles = value;
	}

	altaArbol(arbol) {
		let encontrado = false;
		for (let i = 0; i < this.arboles.length && !encontrado; i++) {
			if (arbol.codigo == this.arboles[i].codigo) encontrado = true;
		}

		if (!encontrado) {
			this.arboles.push(arbol);
			return true;
		} else return false;
	}
}
