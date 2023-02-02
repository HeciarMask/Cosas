/*
Cuando se inicia la aplicación todas las mesas estarán libres, se habrán cargado
todos los productos que se ofrecen en el catálogo y se pondrá la mesa 1 como
actual.
*/

let catalogo = new Catalogo();
let divCuenta = document.getElementById("cuenta");
let gestor = new Gestor();
comienzo();

function comienzo() {
  let cuentas = new Array();

  let mesas = document.getElementsByClassName("mesa");
  for (let mesa of mesas) {
    mesa.setAttribute("class", "mesa libre");
  }

  for (let i = 1; i <= 9; i++) {
    cuentas[i] = new Cuenta(i, true);
  }
  gestor.cuentas = cuentas;

  anadirProdCat();
  crearCuenta();
  cambiaCuenta(1);
}

function crearCuenta() {
  let salto = document.createTextNode("\n");
  let h1 = document.createElement("h1");
  h1.textContent = "Cuenta";

  divCuenta.append(h1);
  divCuenta.append(salto);
}

function cambiaCuenta(numMesa) {
  gestor.mesaActual = numMesa;
}

function anadirProdCat() {
  categorias = ["Bebidas", "Tostadas", "Bollería"];

  catalogo.addProducto(1, "Café con leche", 0.95, 0);
  catalogo.addProducto(2, "Té", 1.05, 0);
  catalogo.addProducto(3, "Cola-cao", 1.35, 0);
  catalogo.addProducto(4, "Chocolate a la taza", 1.95, 0);
  catalogo.addProducto(5, "Media con aceite", 1.25, 1);
  catalogo.addProducto(6, "Entera con aceite", 1.95, 1);
  catalogo.addProducto(7, "Media con aceite y jamón", 1.95, 1);
  catalogo.addProducto(8, "Entera con aceite y jamón", 2.85, 1);
  catalogo.addProducto(9, "Media con mantequilla", 1.15, 1);
  catalogo.addProducto(10, "Entera con mantequilla", 1.75, 1);
  catalogo.addProducto(11, "Media con manteca colorá", 1.45, 1);
  catalogo.addProducto(12, "Entera con manteca colorá", 2.15, 1);
  catalogo.addProducto(13, "Croissant", 0.95, 2);
  catalogo.addProducto(14, "Napolitana de chocolate", 1.45, 2);
  catalogo.addProducto(15, "Caracola de crema", 1.65, 2);
  catalogo.addProducto(16, "Caña de chocolate", 1.35, 2);
}
