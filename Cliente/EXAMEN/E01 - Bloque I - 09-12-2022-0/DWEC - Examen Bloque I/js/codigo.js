datosIniciales();
let almacen = new Almacen();

function datosIniciales() {}

// Gestión de formularios
function gestionFormularios(sFormularioVisible) {
	ocultarTodosLosFormularios();

	// Hacemos visible el formulario que llega como parámetro
	switch (sFormularioVisible) {
		case "frmAltaCatalogo":
			frmAltaCatalogo.style.display = "block";
			break;
		case "frmEntradaStock":
			frmEntradaStock.style.display = "block";
			break;
		case "frmSalidaStock":
			frmSalidaStock.style.display = "block";
			break;
	}
}

function ocultarTodosLosFormularios() {
	let oFormularios = document.querySelectorAll("form");

	for (let i = 0; i < oFormularios.length; i++) {
		oFormularios[i].style.display = "none";
	}
}

function aceptarAltaCatalogo() {
	document.getElementById("listas").innerHTML = "";
	let correcto = false;
	let precio = 0;
	let oElectro;

	let nombre = frmAltaCatalogo.txtNombre.value;
	precio = frmAltaCatalogo.txtPrecio.value;
	let tipo = frmAltaCatalogo.rbtElectrodomestico.value;
	let pulgadas = frmAltaCatalogo.txtPulgadas.value;
	let fullhd = frmAltaCatalogo.rbtFullHD.value;
	let carga = frmAltaCatalogo.txtCarga.value;

	if (tipo == "LAV") {
		oElectro = new Lavadora(nombre, precio, carga);
	} else if (tipo == "TV") {
		oElectro = new Televisor(nombre, precio, pulgadas, fullhd);
	} else {
		alert("Error antes de alta");
	}

	correcto = almacen.altaCatalogo(oElectro);

	if (correcto) {
		alert("Alta Exitosa");
	} else {
		alert("Error al hacer el alta");
	}

	ocultarTodosLosFormularios();
}

function aceptarEntradaStock() {
	document.getElementById("listas").innerHTML = "";
	let res = "";
	let unidades = 0;
	let nombre = frmEntradaStock.txtNombre.value;
	unidades = frmEntradaStock.txtUnidades.value;

	res = almacen.entradaStock(nombre, unidades);

	alert(res);
	ocultarTodosLosFormularios();
}

function aceptarSalidaStock() {
	document.getElementById("listas").innerHTML = "";
	let res = "";
	let unidades = 0;
	let nombre = frmSalidaStock.txtNombre.value;
	unidades = frmSalidaStock.txtUnidades.value;

	res = almacen.salidaStock(nombre, unidades);

	alert(res);
	ocultarTodosLosFormularios();
}

function mostrarListadoCatalogo() {
	document.getElementById("listas").innerHTML = "";
	let res = almacen.listadoCatalogo();

	document.getElementById("listas").innerHTML = res;
}

function mostrarListadoStock() {
	document.getElementById("listas").innerHTML = "";
	let res = almacen.listadoStock();

	document.getElementById("listas").innerHTML = res;
}

function mostrarTotales() {
	let res = "<h1>Totales</h1>";
	res += "<br>Total Stock TVs: " + almacen.numTelevisoresStock();
	res += "<br>Total Stock Lavadoras: " + almacen.numLavadorasStock();
	res += "<br>Importe total stock: " + almacen.importeTotalStock();

	document.getElementById("listas").innerHTML = res;
}
