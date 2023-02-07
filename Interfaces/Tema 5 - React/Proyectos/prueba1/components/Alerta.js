import React from "react";
/* import PropTypes from "prop-types"; */

const Alerta = (props) => {
	function manejoAlerta(props) {
		alert(props.msj);
	}
	return (
		<div>
			<button onClick={manejoAlerta}>Alerta {props.num}</button>
		</div>
	);
};

Alerta.propTypes = {};

export default Alerta;
