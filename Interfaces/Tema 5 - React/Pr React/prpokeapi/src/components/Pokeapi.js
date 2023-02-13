import React from "react";
import Tableando from "./Tableando";

class Pokeapi extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			tipo: "",
			info: "",
			salida: "",
			activado: false,
		};
	}

	buscarPoke() {
		fetch("https://pokeapi.co/api/v2/pokemon/" + this.state.info)
			.then((response) => response.json())
			.then((response) => this.escribeSalida(response))
			.catch(this.incorrecto);
	}

	incorrecto() {
		alert("Datos no válidos");
		this.setState({activado: false});
	}

	escribeSalida(datos) {
		this.setState({activado: true});
		this.setState({salida: datos});
	}

	handleTipoChange(event) {
		this.setState({tipo: event.target.value});
	}

	handleInfoChange(event) {
		this.setState({info: event.target.value});
	}

	render() {
		return (
			<div>
				<form name="formulario">
					<label htmlFor="tipoDato">Seleccione tipo de busqueda: </label>
					<select
						name="tipoDato"
						value={this.state.tipo}
						id="tipoDato"
						onChange={(event) => this.handleTipoChange(event)}
					>
						<option value={"id"}>ID</option>
						<option value={"nombre"}>Nombre</option>
					</select>
					<br />
					<label htmlFor="txtPkm">Introduzca la búsqueda: </label>
					<input
						name="txtPkm"
						id="txtPkm"
						type="text"
						value={this.state.info}
						onChange={(event) => this.handleInfoChange(event)}
					/>
					<input
						type="button"
						name="buscar"
						value="Buscar"
						onClick={() => this.buscarPoke()}
					/>
				</form>
				<Tableando activado={this.state.activado} datos={this.state.salida} />
			</div>
		);
	}
}

export default Pokeapi;
