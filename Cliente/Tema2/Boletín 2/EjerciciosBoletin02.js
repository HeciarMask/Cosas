/*  1. Cree un programa que almacene en variables el valor de la edad, el nombre y el
estado civil de una persona y a continuación lo muestre por pantalla.   */

function ejercicio01() {
  
  let edad = prompt("Introduzca su Edad:");
  let nombre = prompt("Introduzca su Nombre:");
  let eCivil = prompt("Introduzca su Estado Civil:");

  console.log(
    "Bienvenido: " +
      nombre +
      ". Su estado civil es " +
      eCivil +
      " y su edad es " +
      edad +
      "."
  );
}
