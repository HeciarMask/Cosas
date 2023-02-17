class Producto {
	_idProducto;
	_nombreProducto;
	_precioUnidad;
	_idCategoria;

	constructor(idProd, nomProd, precio, idCat) {
		this._idProducto = idProd;
		this._nombreProducto = nomProd;
		this._precioUnidad = precio;
		this._idCategoria = idCat;
	}

	get idProducto() {
		return this._idProducto;
	}
	set idProducto(value) {
		this._idProducto = value;
	}
	get nombreProducto() {
		return this._nombreProducto;
	}
	set nombreProducto(value) {
		this._nombreProducto = value;
	}
	get precioUnidad() {
		return this._precioUnidad;
	}
	set precioUnidad(value) {
		this._precioUnidad = value;
	}
	get idCategoria() {
		return this._idCategoria;
	}
	set idCategoria(value) {
		this._idCategoria = value;
	}
}

class Catalogo {
	_productos = Array();

	addProducto(idProducto, nombreProducto, precioUnidad, idC) {
		let prod = new Producto(idProducto, nombreProducto, precioUnidad, idC);
		this.productos.push(prod);
	}

	get productos() {
		return this._productos;
	}
	set productos(value) {
		this._productos = value;
	}
}

class LineaCuenta {
	_unidades;
	_idProducto;

	constructor(idProducto, unidades) {
		this._idProducto = idProducto;
		this._unidades = unidades;
	}

	get idProducto() {
		return this._idProducto;
	}
	set idProducto(value) {
		this._idProducto = value;
	}
	get unidades() {
		return this._unidades;
	}
	set unidades(value) {
		this._unidades = value;
	}
}

class Cuenta {
	_mesa;
	_lineasDeCuentas = new Array();
	_pagada = true;

	constructor(mesa, pagada) {
		this._mesa = mesa;
		this._pagada = pagada;
	}

	get pagada() {
		return this._pagada;
	}
	set pagada(value) {
		this._pagada = value;
	}
	get lineasDeCuentas() {
		return this._lineasDeCuentas;
	}
	set lineasDeCuentas(value) {
		this._lineasDeCuentas = value;
	}
	get mesa() {
		return this._mesa;
	}
	set mesa(value) {
		this._mesa = value;
	}

	calculaCuenta(catalogo) {
		let sum = 0;

		for (let linea of this.lineasDeCuentas) {
			for (let prod of catalogo.productos) {
				if (prod.idProducto == linea.idProducto) {
					sum += prod.precioUnidad * linea.unidades;
				}
			}
		}

		return sum;
	}
}

class Gestor {
	_cuentas;
	_mesaActual = 0;

	constructor(cuentas) {
		this._cuentas = cuentas;
	}

	get mesaActual() {
		return this._mesaActual;
	}
	set mesaActual(value) {
		this._mesaActual = value;
	}
	get cuentas() {
		return this._cuentas;
	}
	set cuentas(value) {
		this._cuentas = value;
	}
}
