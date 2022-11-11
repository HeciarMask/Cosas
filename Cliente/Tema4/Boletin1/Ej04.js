class Figura {
	#color;
	constructor(color) {
		this.#color = color;
	}

	imprimir() {
		return "Soy una figura de color " + this.#color;
	}

	get color() {
		return this.#color;
	}

	set color(x) {
		this.#color = x;
	}
}

class Rectangulo extends Figura {
	#base;
	#altura;
	constructor(color, base, altura) {
		super(color);
		this.#base = base;
		this.#altura = altura;
	}
	get base() {
		return this.#base;
	}

	set base(x) {
		this.#base = x;
	}

	get altura() {
		return this.#altura;
	}

	set altura(x) {
		this.#altura = x;
	}

	area() {
		return this.#base * this.#altura;
	}

	imprimir() {
		return (
			"Soy una rectangulo de color " + this.color + " y de area " + this.area()
		);
	}
}

class Circulo extends Figura {
	#radio;
	constructor(color, radio) {
		super(color);
		this.#radio = radio;
	}

	get radio() {
		return this.#radio;
	}

	set radio(x) {
		this.#radio = x;
	}
}

let x = new Rectangulo("verde", 3, 4);
