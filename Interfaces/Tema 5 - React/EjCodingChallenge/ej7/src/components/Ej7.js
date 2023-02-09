import {Input} from "@mui/material";
import Button from "@mui/material/Button";
import React from "react";

class Ej7 extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			nombre: "",
		};
	}
	onClickHandler(event) {
		this.setState({
			nombre: event.target.value,
		});
	}
	alertaClick() {
		window.alert(`You clicked on Button ${this.state.nombre}!`);
	}
	render() {
		return (
			<div>
				<TextField
					id="outlined-basic"
					label="Outlined"
					variant="outlined"
					value={this.state.nombre}
					onChange={(event) => this.onClickHandler(event)}
				/>
				<Button variant="contained" onClick={() => this.alertaClick()}>
					Contained
				</Button>
			</div>
		);
	}
}

export default Ej7;
