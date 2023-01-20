formulario.btnGuardar.addEventListener("click", cookieGuardar);
formulario.btnRecuperar.addEventListener("click", cookieRecuperar);

function cookieGuardar(event) {
	let valor = formulario.txtValor.value;
	let clave = formulario.txtClave.value;
	if (clave.length == 0 || valor.length == 0) {
		event.preventDefault();
	} else {
		setCookie(clave, valor, 1);
	}
}

function cookieRecuperar(event) {}

function setCookie(cname, cvalue, exdays) {
	const d = new Date();
	d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
	let expires = "expires=" + d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
