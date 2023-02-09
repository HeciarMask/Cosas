function Ej5(props) {
      const listItems = props.lista.map((animal) =>
        <li>{animal}</li>
        );
  return (
      <ul>{listItems}</ul>

  );
}

export default Ej5;
