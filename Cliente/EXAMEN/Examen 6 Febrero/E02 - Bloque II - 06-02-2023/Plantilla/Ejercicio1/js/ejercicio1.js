document.addEventListener("change", cambioTips);

document.addEventListener("mouseover", añadeDiv);
document.addEventListener("mouseout", borraDiv);

function cambioTips(event) {
	if (event.target.checked == true) {
		document.addEventListener("mouseover", añadeDiv);
		document.addEventListener("mouseout", borraDiv);
	} else {
		document.removeEventListener("mouseover", añadeDiv);
		document.removeEventListener("mouseout", borraDiv);
	}
}
function nada() {}

function añadeDiv(event) {
	if (event.target.tagName == "IMG") {
		let div = event.target.parentElement;
		let dataTip = document.createElement("div");
		dataTip.setAttribute("class", "tooltip");
		let texto = div.children[0].getAttribute("data-tip");
		let dataTipAux = dataTip.cloneNode();
		dataTipAux.textContent = texto;
		div.append(dataTipAux);
	}
}
function borraDiv(event) {
	if (event.target.tagName == "IMG") {
		let div = event.target.parentElement;
		let imagen = div.children[0].cloneNode();
		div.innerHTML = "";
		div.append(imagen);
	}
}
