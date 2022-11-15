class Semaforo {
	#color;
	#parpadeando;
	constructor() {
		this.#color = 0; // Rojo
		this.#parpadeando = false;
	}

	get color() {
		return this.#color;
	}
	set color(x) {
		if (x < 3) this.#color = x;
	}

	get parpadeando() {
		return this.#parpadeando;
	}
	set parpadeando(x) {
		if (this.color == 1) this.#parpadeando = x;
	}

	cadenaColor() {
		switch (this.color) {
			case 0:
				return "ROJO";
			case 1:
				return "AMARILLO";
			default:
				return "VERDE";
		}
	}

	imprimir() {
		let parpadeo = "";
		if (this.color == 1)
			parpadeo = this.parpadeando ? "Parpadeando" : "No Parpadeando";
		console.log("Semáforo en " + this.cadenaColor() + " " + parpadeo);
	}

	cambia() {
		if (this.color == 0) this.color = 2;
		else if (this.color == 2) {
			this.color = 1;
			this.parpadeando = true;
		} else if (this.color == 1 && !this.parpadeando) this.color = 0;
		else if (this.color == 1 && this.parpadeando) this.parpadeando = false;
	}
}

let s = new Semaforo();
let s1;

s.color = 5;
s.imprimir();
s.color = 2;
s.imprimir();
s.parpadeando = true;
s.imprimir();
s.color = 1;
s.parpadeando = true;
s.imprimir();
s.cambia();
s.imprimir();
s.cambia();
s.imprimir();
s.cambia();
s.imprimir();
s.cambia();
s.imprimir();
s.cambia();
s.imprimir();

s1 = new Semaforo();
s1.color = s.color;
s1.parpadeando = s.parpadeando;

s1.imprimir();
