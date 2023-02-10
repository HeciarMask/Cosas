import React from "react";

export default function Pokeapi() {
	return (
		<div>
			<form name="formulario">
				<label for="tipoDato">Seleccione tipo de busqueda: </label>
				<select name="tipoDato" id="tipoDato">
					<option value={"id"}>ID</option>
					<option value={"nombre"}>Nombre</option>
				</select>
				<br />
				<label for="txtPkm">Introduzca la búsqueda: </label>
				<input type="text" name="txtPkm" id="txtPkm"></input>
			</form>
		</div>
	);
}
