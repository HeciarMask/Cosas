import React from "react";

const Tableando = (props) => {
  return (
    <div
      style={props.activado ? { pointerEvents: "none", opacity: "0.4" } : {}}
    >
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
