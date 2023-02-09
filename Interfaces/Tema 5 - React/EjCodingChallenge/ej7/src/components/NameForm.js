import React from "react";
import {Input, TextField} from "@mui/material";
import Button from "@mui/material/Button";

class NameForm extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			nombre: "",
			apellido: "",
		};
	}

	handleNameChange(event) {
		this.setState({nombre: event.target.value});
	}
	handleApellidoChange(event) {
		this.setState({apellido: event.target.value});
	}

	handleSubmit() {
		alert(
			"Nombre: " + this.state.nombre + "\n" + "Apellido: " + this.state.apellido
		);
	}

	render() {
		return (
			<div>
				<Input
					id="outlined-basic"
					placeholder="Nombre"
					variant="outlined"
					value={this.state.nombre}
					onChange={(event) => this.handleNameChange(event)}
				/>
				<Input
					id="outlined-basic"
					placeholder="Apellido"
					variant="outlined"
					value={this.state.apellido}
					onChange={(event) => this.handleApellidoChange(event)}
				/>
				<Button variant="contained" onClick={() => this.handleSubmit()}>
					Contained
				</Button>
			</div>
		);
	}
}

/* <form onSubmit={this.handleSubmit}>
				<label>
					Name:
					<input
						type="text"
						value={this.state.nombre}
						onChange={this.handleNameChange}
					/>
				</label>
				<br />
				<label>
					Apellido:
					<input
						type="text"
						value={this.state.apellido}
						onChange={this.handleApellidoChange}
					/>
				</label>
				<input type="submit" value="Submit" />
			</form> */

export default NameForm;
