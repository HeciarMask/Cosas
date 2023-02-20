class Electrodomestico {
	#nombre;
	#precio;

	constructor(nombre, precio) {
		this.#nombre = nombre;
		this.#precio = precio;
	}

	get precio() {
		return this.#precio;
	}
	set precio(value) {
		this.#precio = value;
	}

	get nombre() {
		return this.#nombre;
	}
	set nombre(value) {
		this.#nombre = value;
	}

	toString() {
		let cad = this.nombre + ": " + this.precio + ".";
		return cad;
	}
}

class Televisor extends Electrodomestico {
	#pulgadas;
	#fullHD;

	constructor(nombre, precio, pulgadas, hd) {
		super(nombre, precio);
		this.#pulgadas = pulgadas;
		this.#fullHD = hd;
	}

	get fullHD() {
		return this.#fullHD;
	}
	set fullHD(value) {
		this.#fullHD = value;
	}

	get pulgadas() {
		return this.#pulgadas;
	}
	set pulgadas(value) {
		this.#pulgadas = value;
	}

	toHTMLRow() {
		let cad = "<tr><td>" + this.nombre + "</td><td>" + this.precio + "</td>";
		cad += "<td>" + this.pulgadas + "</td><td>" + this.fullHD + "</td></tr>";

		return cad;
	}
}

class Lavadora extends Electrodomestico {
	#carga;

	constructor(nombre, precio, carga) {
		super(nombre, precio);
		this.#carga = carga;
	}

	get carga() {
		return this.#carga;
	}
	set carga(value) {
		this.#carga = value;
	}

	toHTMLRow() {
		let cad = "<tr><td>" + this.nombre + "</td><td>" + this.precio + "</td>";
		cad += "<td>" + this.carga + "</td></tr>";

		return cad;
	}
}

class StockProducto {
	#producto;
	#stock;

	constructor(producto, stock) {
		this.#producto = producto;
		this.#stock = stock;
	}

	get stock() {
		return this.#stock;
	}
	set stock(value) {
		this.#stock = value;
	}
	get producto() {
		return this.#producto;
	}
	set producto(value) {
		this.#producto = value;
	}

	toHTMLRow() {
		let cad = producto.toHTMLRow().slice(0, -5);
		cad +=
			"<td>" +
			this.stock +
			"</td><td>" +
			this.stock * this.producto.precio +
			"</td></tr>";
		return cad;
	}
}

class Almacen {
	#catalogo;
	#stock;

	constructor() {
		this.#catalogo = [];
		this.#stock = [];
	}

	get stock() {
		return this.#stock;
	}
	set stock(value) {
		this.#stock = value;
	}

	get catalogo() {
		return this.#catalogo;
	}
	set catalogo(value) {
		this.#catalogo = value;
	}

	altaCatalogo(oElectro) {
		let encontrado = false;

		for (let elec of this.catalogo) {
			if (elec.nombre == oElectro.nombre) encontrado = true;
		}

		if (!encontrado) {
			this.catalogo.push(oElectro);
			return true;
		}

		return false;
	}

	entradaStock(nombre, unidades) {
		let cad = "";
		let encontrado = false;
		let encStock = false;
		let electro;
		let stProdc;

		for (let elec of this.catalogo) {
			if (elec.nombre == nombre) encontrado = true;
		}

		if (encontrado) {
			for (let elec of this.stock) {
				if (elec.producto.nombre == nombre) {
					elec.stock = elec.stock + unidades;
					stProdc = elec;
					encStock = true;
				}
			}

			if (!encStock) {
				this.stock.push((stProdc = new StockProducto(electro, unidades)));
			}

			cad = "Producto: " + nombre + ", Stock: " + stProdc.stock;
		} else {
			cad = "No se ha encontrado el producto en el catalogo";
		}

		return cad;
	}

	salidaStock(nombreA, unidades) {
		let cad = "";
		let encontrado = false;
		let encStock = false;
		let electro;
		let stProdc;

		for (let elec of this.catalogo) {
			if (elec.nombre == nombreA) encontrado = true;
		}

		if (encontrado) {
			for (let elec of this.stock) {
				if (elec.producto.nombre() == nombreA) {
					elec.stock = elec.stock - unidades;
					stProdc = elec;
					encStock = true;
				}
			}

			if (!encStock) {
				unidades = 0 - unidades;
				this.stock.push((stProdc = new StockProducto(electro, unidades)));
			}

			cad = "Producto: " + nombreA + ", Stock: " + stProdc.stock;
		} else {
			cad = "No se ha encontrado el producto en el catalogo";
		}

		return cad;
	}

	listadoCatalogo() {
		let tabla = "<h1>Listado</h1><br><table border='solid'>";
		tabla +=
			"<tr><td>Tipo</td><td>Nombre</td>" +
			"<td>Precio</td><td>Pulgadas</td>" +
			"<td>Full HD</td><td>Carga</td></tr>";

		tabla += this.catalogo.forEach((e) => {
			let cad = "";

			if (e instanceof Televisor) {
				cad +=
					"<tr><td>TV</td><td>" +
					e.nombre +
					"</td><td>" +
					e.precio +
					"</td><td>" +
					e.pulgadas +
					"</td><td>" +
					e.fullHD +
					"</td><td>" +
					"-" +
					"</td></tr>";
			} else {
				cad +=
					"<tr><td>Lavadora</td>" +
					e.nombre +
					"</td><td>" +
					e.precio +
					"</td><td>" +
					"-" +
					"</td><td>" +
					"-" +
					"</td><td>" +
					e.carga +
					"</td></tr>";
			}

			tabla += cad;
		});

		tabla += "</table>";

		return tabla;
	}

	listadoStock() {
		let cad = "";
		let tablaTV = "<h2>Listado stock TV</h2><br><table border='solid'>";
		let tablaLV = "<h2>Listado stock Lavadoras</h2><br><table border='solid'>";

		tablaTV +=
			"<tr>" +
			"<th>Nombre</th>" +
			"<th>Precio</th>" +
			"<th>Pulgadas</th>" +
			"<th>Full HD</th>" +
			"<th>Stock</th>" +
			"<th>Valor</th>" +
			"</tr>";

		tablaLV +=
			"<tr>" +
			"<th>Nombre</th>" +
			"<th>Precio</th>" +
			"<th>Carga</th>" +
			"<th>Stock</th>" +
			"<th>Valor</th>" +
			"</tr>";

		tablaTV += this.stock.forEach((s) => {
			if (s.producto instanceof Televisor) return s.producto.toHTMLRow();
		});

		tablaLV += this.stock.forEach((s) => {
			if (s.producto instanceof Lavadora) return s.producto.toHTMLRow();
		});

		tablaTV += "</table><br>";
		tablaLV += "</table><br>";

		return cad;
	}

	numTelevisoresStock() {
		let num = 0;

		num += this.stock.forEach((s) => {
			if (s.producto instanceof Televisor) return s.stock;
			else return 0;
		});

		return num;
	}

	numLavadorasStock() {
		let num = 0;

		num += this.stock.forEach((s) => {
			if (s.producto instanceof Lavadora) return s.stock;
			else return 0;
		});

		return num;
	}

	importeTotalStock() {
		let num = 0;

		num += this.stock.forEach((s) => {
			return s.stock;
		});

		return num;
	}
}
