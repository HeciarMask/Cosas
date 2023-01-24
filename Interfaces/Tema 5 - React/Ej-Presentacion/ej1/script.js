let letras = [
	"T",
	"R",
	"W",
	"A",
	"G",
	"M",
	"Y",
	"F",
	"P",
	"D",
	"X",
	"B",
	"N",
	"J",
	"Z",
	"S",
	"Q",
	"V",
	"H",
	"L",
	"C",
	"K",
	"E",
];

formulario.btnCalc.addEventListener("click", calcular);

function calcular(event) {
	let numero = formulario.num.value;
	let salida = document.getElementById("salida");

	if (
		numero.parseInt() == NaN ||
		numero.parseInt() > 99999999 ||
		numero.parseInt() < 0
	) {
		salida.innerHTML = "No es válido";
	} else {
	}
}
