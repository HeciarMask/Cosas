document.getElementById("formulario").addEventListener("click", clickasion);
document.getElementById("capa").addEventListener("click", clickasion);
document.getElementById("parrafo").addEventListener("click", clickasion);

function clickasion(event) {
	console.log(
		"Manejador:\n" +
			"This: " +
			this.tagName +
			"\n" +
			", Current Target: " +
			event.currentTarget.tagName +
			"\n" +
			", Target: " +
			event.target.tagName
	);
}
