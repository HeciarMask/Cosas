import React from "react";
import Tableando from "./Tableando";
import {TextField} from "@mui/material";
import Button from "@mui/material/Button";
import ButtonGroup from "@mui/material/ButtonGroup";
import Box from "@mui/material/Box";

class Pokeapi extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			info: "",
			salida: [],
		};
		this.lista = [];
	}

	buscarPoke(event) {
		fetch("https://pokeapi.co/api/v2/pokemon/" + this.state.info.toLowerCase())
			.then((response) => {
				if (response.ok) {
					return response.json();
				}
				throw new Error("Something went wrong");
			})
			.then((response) => this.escribeSalida(response))
			.catch(this.incorrecto);

		event.preventDefault();
		this.setState({salida: this.lista, info: ""});
	}

	incorrecto() {
		alert("Error");
	}

	escribeSalida(datos) {
		let aux = [];

		aux["id"] = datos.id;
		aux["name"] = datos.name;
		aux["height"] = datos.height;
		aux["sprite1"] = datos.sprites["front_default"];
		aux["sprite2"] = datos.sprites["back_default"];

		aux["types"] = datos.types.map((res) => {
			return res.type.name;
		});
		console.log(aux["types"]);
		this.lista.unshift(aux);
		this.setState({salida: this.lista});
	}

	recogeTipos(res) {}

	borrarLista() {
		this.lista = [];
		this.setState({salida: this.lista, info: ""});
	}

	handleInfoChange(event) {
		this.setState({info: event.target.value});
	}

	render() {
		return (
			<div>
				<form name="formulario">
					<br />

					<TextField
						id="outlined-basic"
						variant="outlined"
						label="Nombre de pokemon"
						value={this.state.info}
						onChange={(event) => this.handleInfoChange(event)}
					/>
					<br />
					<Box
						sx={{
							display: "flex",
							flexDirection: "column",
							alignItems: "center",
							"& > *": {
								m: 1,
							},
						}}
					>
						<ButtonGroup variant="contained" aria-label="outlined button group">
							<Button type="submit" onClick={(event) => this.buscarPoke(event)}>
								Buscar
							</Button>
							<Button onClick={() => this.borrarLista()}>Borrar</Button>
						</ButtonGroup>
					</Box>
				</form>
				<Tableando
					style={{margin: "auto", display: "flex", justifycontent: "center"}}
					activado={this.state.activado}
					datos={this.state.salida}
				/>
			</div>
		);
	}
}

export default Pokeapi;
