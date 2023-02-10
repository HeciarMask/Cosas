/* A partir del documento HTML proporcionado para este ejercicio, implementar 
las funciones javascript necesarias para iniciar una promesa y atenderla para 
que lea el texto incluido en el input y lo añada al párrafo de salida pasados 
dos segundos. Para este ejercicio no será necesario controlar el posible 
error del objeto Promise y se debe usar async/await. */

document.getElementById("iniciaPromesa").addEventListener("click", creaPromesa);

async function creaPromesa() {
	let cadena = document.getElementById("msjExito").textContent;

	let promesa = new Promise((resolve, reject) => {});
}
