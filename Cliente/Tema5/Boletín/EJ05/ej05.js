function addManejador() {
	botonMarcar.addEventListener("click", clicky);
}

function deleteManejador() {
	botonMarcar.removeEventListener("click", clicky);
}

function clicky() {
	formulario.verano.checked = !formulario.verano.checked;
}
