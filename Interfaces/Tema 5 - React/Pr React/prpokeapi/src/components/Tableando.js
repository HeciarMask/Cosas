import React from "react";

class Tableando extends React.Component {
	constructor(props) {
		super(props);
	}

	render() {
		return (
			<div
				style={
					this.state.activado ? {pointerEvents: "none", opacity: "0.4"} : {}
				}
			></div>
		);
	}
}

export default Tableando;
