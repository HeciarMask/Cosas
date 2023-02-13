import React from "react";
import Tableando from "./Tableando";

class Pokeapi extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      info: "",
      salida: [],
      activado: false,
    };
    this.mostrar = React.createRef();
    this.lista = [];
    this.contador = 0;
  }

  buscarPoke() {
    fetch("https://pokeapi.co/api/v2/pokemon/" + this.state.info)
      .then((response) => response.json())
      .then((response) => this.escribeSalida(response));
  }

  incorrecto() {
    alert("Datos no válidos");
    this.setState({ activado: false });
  }

  escribeSalida(datos) {
    let aux = [];

    aux["id"] = datos.id;
    aux["name"] = datos.name;
    aux["height"] = datos.height;
    aux["sprite1"] = datos.sprites["front_default"];
    aux["sprite2"] = datos.sprites["back_default"];

    this.lista[this.contador] = aux;
    this.contador++;

    this.setState({ salida: this.lista });
  }

  borrarLista() {
    this.lista = [];
    this.setState({ salida: this.lista });
  }

  handleTipoChange(event) {
    this.setState({ tipo: event.target.value });
  }

  handleInfoChange(event) {
    this.setState({ info: event.target.value });
  }

  render() {
    return (
      <div>
        <form name="formulario">
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

          <input
            type="button"
            name="borrar"
            value="Borrar"
            onClick={() => this.borrarLista()}
          />
        </form>
        <Tableando activado={this.state.activado} datos={this.state.salida} />
      </div>
    );
  }
}

export default Pokeapi;
