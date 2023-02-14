/* import React from "react";

const Tableando = (props) => {
	function escribir(fila) {
		let cadena = "<><li>ID: {" + fila["id"] + "}</li>";
		cadena += "<li}>Nombre: {" + fila["name"] + "}</li>";
		cadena += "<li>Altura: {" + fila["height"] + "}</li>";
		cadena +=
			"<li><img alt='Foto frontal' src={" + fila["sprite1"] + "}></img></li>";
		cadena +=
			"<li><img alt='Foto de atras' src={" +
			fila["sprite2"] +
			"}></img></li></>";

		return cadena;
	}
	function comprobar() {
		props.datos.reduceRight(escribir);
	}

	return (
		<div style={props.activado ? {pointerEvents: "none", opacity: "0.4"} : {}}>
			<ul>{props.activado ? {comprobar} : {}}</ul>
		</div>
	);
};

export default Tableando; */

import React from "react";

const Tableando = (props) => {
	return (
		<div style={props.activado ? {pointerEvents: "none", opacity: "0.4"} : {}}>
			<ul>
				{props.datos.map((fila) => (
					<>
						<li key={fila["id"]}>ID: {fila["id"]}</li>
						<li key={fila["id"] + 1}>Nombre: {fila["name"]}</li>
						<li key={fila["id"] + 2}>Altura: {fila["height"]}</li>
						<li key={fila["id"] + 3}>
							<img alt="Foto frontal" src={fila["sprite1"]}></img>
						</li>
						<li key={fila["id"] + 4}>
							<img alt="Foto de atras" src={fila["sprite2"]}></img>
						</li>
					</>
				))}
			</ul>
		</div>
	);
};

export default Tableando;
