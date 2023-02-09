import "./App.css";
import Ej1 from "./components/Ej1";
import Ej2 from "./components/Ej2";
import Ej3 from "./components/Ej3";
import Ej4 from "./components/Ej4";
import Ej5 from "./components/Ej5";
//import Ej7 from "./components/Ej7";
import NameForm from "./components/NameForm";

function App() {
	return (
		<>
			<h2>EJERCICIO 1</h2>
			<Ej1 />

			<h2>EJERCICIO 2</h2>
			<Ej2 />

			<h2>EJERCICIO 3</h2>
			<Ej3 button="1" />
			<Ej3 button="2" />
			<Ej3 button="3" />

			<h2>EJERCICIO 4</h2>
			<Ej4 />

			<h2>EJERCICIO 5 y 6</h2>
			<Ej5 lista={["dog", "cat", "chicken", "cow", "sheep", "horse"]} />

			<h2>EJERCICIO 7</h2>
			<NameForm />
		</>
	);
}

export default App;
