function agregarProvincia() {
	let pro = frmEntrada.txtProvincia.value;
	let cod = frmEntrada.txtCodigo.value;

	let encontrado = false;
	let sel, option;

	for (let i of frmEntrada.lstProvincias) {
		if (pro == i.text || cod == i.value) encontrado = true;
	}
	for (let i of frmEntrada.lstDestino) {
		if (pro == i.text || cod == i.value) encontrado = true;
	}

	if (!encontrado) {
		sel = document.getElementById("lstProvincias");
		option = document.createElement("option");
		option.text = pro;
		option.value = cod;
		sel.add(option);
	}
}

function pasarDerecha() {
	for (let prov of frmEntrada.lstProvincias) {
		if (prov.selected) {
			let og = document.getElementById("lstProvincias");
			let sel = document.getElementById("lstDestino");
			let option = document.createElement("option");
			option.text = prov.text;
			option.value = prov.value;
			sel.add(option);
			og.remove(option);
		}
	}
}

function pasarIzquierda() {
	for (let prov of frmEntrada.lstDestino) {
		if (prov.selected) {
			let og = document.getElementById("lstDestino");
			let sel = document.getElementById("lstProvincias");
			let option = document.createElement("option");
			option.text = prov.text;
			option.value = prov.value;
			sel.add(option);
			og.remove(option);
		}
	}
}
