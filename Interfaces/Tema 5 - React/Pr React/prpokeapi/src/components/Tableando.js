import React from "react";

const Tableando = (props) => {
  return (
    <div
      style={props.activado ? { pointerEvents: "none", opacity: "0.4" } : {}}
    ></div>
  );
};

export default Tableando;
