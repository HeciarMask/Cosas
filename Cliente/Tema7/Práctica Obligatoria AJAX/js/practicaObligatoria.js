/*
Cuando se inicia la aplicación todas las mesas estarán libres, se habrán cargado
todos los productos que se ofrecen en el catálogo y se pondrá la mesa 1 como
actual.
*/

let catalogo = new Catalogo();
let divCuenta = document.getElementById("cuenta");
let cuentaSeleccionada; //Objeto Cuenta
let productoSeleccionado; //Objeto producto
let listaCategorias = [];
let gestor = new Gestor();
const apiLink =
  "https://flb-test-firebase-default-rtdb.europe-west1.firebasedatabase.app/";

let salida = document.getElementById("salida");

comienzo();
document.getElementById("mesas").addEventListener("click", cambiarMesa);
document.frmControles.addEventListener("change", cambioProducto);
document.getElementById("teclado").addEventListener("click", teclaPulsada);
document.getElementById("cuenta").addEventListener("click", cambioUnidades);
document.getElementById("consultar").addEventListener("click", mostrar);
document.getElementById("formulario").addEventListener("submit", formProductos);

function comienzo() {
  let mesas = document.getElementsByClassName("mesa");
  for (let mesa of mesas) {
    mesa.setAttribute("class", "mesa libre");
  }
  anadirProdCatApi();

  setTimeout(cargarControles, 800);
  setTimeout(() => {
    cambiaCuenta(1);
  }, 1000);
}

function cargarControles() {
  let cat = frmControles.categorias;
  cat.innerHTML = "";
  for (let i = 0; i < listaCategorias.length; i++) {
    let opcion = document.createElement("option");
    opcion.setAttribute("value", i);
    opcion.textContent = listaCategorias[i];

    cat.append(opcion);
  }

  let seleccionado = cat.value;
  let productos = frmControles.productos;
  productos.innerHTML = "";

  for (let prod of catalogo.productos) {
    if (prod.idCategoria == seleccionado) {
      let opcion = document.createElement("option");
      opcion.setAttribute("value", prod.idProducto);
      opcion.textContent = prod.nombreProducto;

      productos.append(opcion);
    }
  }
  for (let prod of catalogo.productos) {
    if (prod.idProducto == productos.value) {
      productoSeleccionado = prod;
    }
  }
}

function cambioProducto(event) {
  let objetivo = event.target;
  if (objetivo.getAttribute("name") == "categorias") {
    let seleccionado = objetivo.value;

    let productos = frmControles.productos;
    productos.innerHTML = "";
    for (let prod of catalogo.productos) {
      if (prod.idCategoria == seleccionado) {
        let opcion = document.createElement("option");
        opcion.setAttribute("value", prod.idProducto);
        opcion.textContent = prod.nombreProducto;

        productos.append(opcion);
      }
    }
    for (let prod of catalogo.productos) {
      if (prod.idProducto == productos.value) {
        productoSeleccionado = prod;
      }
    }
  } else {
    let seleccionado = frmControles.productos.value;
    for (let prod of catalogo.productos) {
      if (prod.idProducto == seleccionado) {
        productoSeleccionado = prod;
      }
    }
  }
}

function cambiarMesa(event) {
  let clickado = event.target;
  let patron = /mesa/g;
  if (patron.test(clickado.getAttribute("class"))) {
    cambiaCuenta(clickado.textContent);
  }
}

function cambiaCuenta(numMesa) {
  gestor.mesaActual = numMesa;

  while (divCuenta.children.length > 0) {
    divCuenta.children[0].remove();
  }

  for (let cuenta of gestor.cuentas) {
    if (cuenta.mesa == numMesa) {
      cuentaSeleccionada = cuenta;
    }
  }

  let suma = cuentaSeleccionada.calculaCuenta(catalogo);

  let salto = document.createTextNode("\n");
  let h1 = document.createElement("h1");
  h1.textContent = "Cuenta";

  divCuenta.append(h1);
  divCuenta.append(salto.cloneNode());

  let mesa = document.createElement("h2");
  mesa.textContent = "Mesa " + numMesa;

  divCuenta.append(mesa);
  divCuenta.append(salto.cloneNode());
  if (!cuentaSeleccionada.pagada) {
    let sCuenta = document.createElement("h2");
    sCuenta.textContent = "Total: " + suma.toFixed(2) + "€";

    divCuenta.append(sCuenta);
    divCuenta.append(salto.cloneNode());

    let botonPagar = document.createElement("input");
    botonPagar.setAttribute("type", "button");
    botonPagar.setAttribute("value", "PAGAR Y LIBERAR LA MESA");
    botonPagar.setAttribute("class", "boton");
    botonPagar.setAttribute("id", "pagar");

    divCuenta.append(botonPagar);
    divCuenta.append(salto.cloneNode());

    let tabla = document.createElement("table");
    divCuenta.append(tabla);
    tabla.setAttribute("border", "solid");
    tabla.setAttribute("name", "lineas");
    tabla.insertRow();

    let th = document.createElement("th");
    th.textContent = "Modificar";
    tabla.children[0].append(th);
    th = th.cloneNode();
    th.textContent = "Uds.";
    tabla.children[0].append(th);
    th = th.cloneNode();
    th.textContent = "Id.";
    tabla.children[0].append(th);
    th = th.cloneNode();
    th.textContent = "Producto";
    tabla.children[0].append(th);
    th = th.cloneNode();
    th.textContent = "Precio";
    tabla.children[0].append(th);

    for (let linea of cuentaSeleccionada.lineasDeCuentas) {
      let prod;
      for (let producto of catalogo.productos) {
        if (linea.idProducto == producto.idProducto) prod = producto;
      }

      let fila = tabla.insertRow();
      let td = document.createElement("td");
      let suma = document.createElement("input");
      suma.setAttribute("type", "button");
      suma.setAttribute("class", "boton");
      suma.setAttribute("name", "suma");
      let resta = suma.cloneNode();
      suma.setAttribute("value", "+");
      resta.setAttribute("value", "-");
      td.append(suma);
      td.append(resta);
      fila.append(td);
      td = td.cloneNode();
      td.innerHTML = "";
      td.textContent = linea.unidades;
      fila.append(td);
      td = td.cloneNode();
      td.textContent = prod.idProducto;
      fila.append(td);
      td = td.cloneNode();
      td.textContent =
        prod.nombreProducto +
        " (ud: " +
        Math.round(prod.precioUnidad * 100) / 100 +
        "€)";
      fila.append(td);
      td = td.cloneNode();
      td.textContent =
        Math.round(prod.precioUnidad * linea.unidades * 100) / 100 + "€";
      fila.append(td);
    }
  }

  fetch(apiLink + "gestor.json", {
    method: "PUT",
    headers: {
      "Content-Type": "application/json;charset=utf-8",
    },
    body: JSON.stringify(gestor),
  }).then((res) => res.json());
}

function teclaPulsada(event) {
  let lineaYaIntroducida = false;

  for (let linea of cuentaSeleccionada.lineasDeCuentas)
    if (productoSeleccionado.idProducto == linea.idProducto) {
      lineaYaIntroducida = true;
      alert(
        "Este producto ya se ha introducido anteriormente en esta cuenta, por favor use las teclas '+' y '-' para modificar las unidades de los productos"
      );
    }

  if (event.target.getAttribute("class") == "tecla") {
    let num = event.target.getAttribute("value");
    let mesas = document.getElementsByClassName("mesa");
    for (let mesa of mesas) {
      if (mesa.textContent == gestor.mesaActual)
        mesa.setAttribute("class", "mesa ocupada");
    }
    cuentaSeleccionada.pagada = false;
    let encontrado = false;

    for (let linea of cuentaSeleccionada.lineasDeCuentas) {
      if (productoSeleccionado.idProducto == linea.idProducto) {
        linea.unidades = parseInt(num);
        encontrado = true;
      }
    }
    if (!encontrado) {
      let linea = new LineaCuenta(
        productoSeleccionado.idProducto,
        parseInt(num)
      );
      cuentaSeleccionada.lineasDeCuentas.push(linea);
    }
    actualizamos(gestor);
    setTimeout(cambiaCuenta(gestor.mesaActual), 800);
  }
}

function cambioUnidades(event) {
  let selec = event.target;
  let linea;
  if (selec.getAttribute("name") == "suma") {
    let id = selec.parentElement.parentElement.cells[2].textContent;
    for (let lin of cuentaSeleccionada.lineasDeCuentas) {
      if (lin.idProducto == id) linea = lin;
    }

    if (selec.value == "+") linea.unidades++;
    else if (selec.value == "-") {
      linea.unidades--;
      if (linea.unidades == 0) cuentaSeleccionada.lineasDeCuentas.pop(linea);
    }
    //No se si esta feo refrescar el DOM entero de la cuenta pero no me voy a comer la cabeza

    actualizamos(gestor);
    setTimeout(cambiaCuenta(gestor.mesaActual), 800);
  } else if (selec.getAttribute("id") == "pagar") pagamosCuenta();
}

function anadirProdCat() {
  listaCategorias = ["Bebidas", "Tostadas", "Bollería"];
  let catFile = "categorias.json";
  fetch(apiLink + catFile, {
    method: "PUT",
    headers: {
      "Content-Type": "application/json;charset=utf-8",
    },
    body: JSON.stringify(listaCategorias),
  }).then((res) => res.json());

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

  fetch(apiLink + "catalogo.json", {
    method: "PUT",
    headers: {
      "Content-Type": "application/json;charset=utf-8",
    },
    body: JSON.stringify(catalogo),
  }).then((res) => res.json());

  fetch(apiLink + "gestor.json", {
    method: "PUT",
    headers: {
      "Content-Type": "application/json;charset=utf-8",
    },
    body: JSON.stringify(gestor),
  }).then((res) => res.json());
}

function anadirProdCatApi() {
  catalogo.productos = [];
  fetch(apiLink + ".json")
    .then((res) => res.json())
    .then((res) => {
      for (let prod of res.catalogo._productos) {
        catalogo.addProducto(
          prod._idProducto,
          prod._nombreProducto,
          prod._precioUnidad,
          prod._idCategoria
        );
      }

      listaCategorias = res.categorias;

      let cuentas = [];

      for (let cnt of res.gestor._cuentas) {
        let cuenta = new Cuenta(cnt._mesa, cnt._pagada);
        let lineas = [];
        if (!cnt._pagada) {
          let mesas = document.getElementsByClassName("mesa");
          mesas[cnt._mesa - 1].setAttribute("class", "mesa ocupada");
        }
        if (cnt._lineasDeCuentas) {
          for (let linea of cnt._lineasDeCuentas) {
            lineas.push(new LineaCuenta(linea._idProducto, linea._unidades));
          }
        }
        cuenta.lineasDeCuentas = lineas;
        cuentas.push(cuenta);
      }

      gestor = new Gestor(cuentas);
    })
    .catch((res) => console.log(res));
}

function pagamosCuenta() {
  let suma = cuentaSeleccionada.calculaCuenta(catalogo).toFixed(2);

  fetch(apiLink + "pagadas/" + gestor.mesaActual + ".json", {
    method: "POST",
    headers: {
      "Content-Type": "application/json;charset=utf-8",
    },
    body: JSON.stringify([
      cuentaSeleccionada.lineasDeCuentas,
      new Date(),
      { total: suma },
    ]),
  }).then((res) => res.json());

  cuentaSeleccionada.pagada = true;
  cuentaSeleccionada.lineasDeCuentas = new Array();

  let mesas = document.getElementsByClassName("mesa");
  for (let mesa of mesas) {
    if (mesa.textContent == gestor.mesaActual)
      mesa.setAttribute("class", "mesa libre");
  }
  cambiaCuenta(gestor.mesaActual);

  fetch(apiLink)
    .then((res) => res.json())
    .then((res) => console.log(res))
    .then((res) => actualizamos(res))
    .catch(console.log("error"));
}

function actualizamos(datos) {
  fetch(apiLink + ".json", {
    method: "PATCH",
    headers: {
      "Content-Type": "application/json;charset=utf-8",
    },
    BODY: JSON.stringify(datos),
  }).catch(console.log("error"));
}

function mostrar() {
  salida.innerHTML = "";
  let mesa = document.getElementById("selCerradas").value;

  fetch(apiLink + "pagadas/" + mesa + ".json")
    .then((res) => res.json())
    .then((data) => Object.values(data))
    .then((res) => {
      let lista = [];
      for (let cuenta of res) {
        lista.push([cuenta[1], cuenta[2].total]);
      }
      lista.sort(function (a, b) {
        return a[0] - b[0];
      });

      let tabla = document.createElement("table");
      let cabecera = document.createElement("thead");
      let fila, celda;
      cabecera.innerHTML = "<th>Fecha</th><th>Importe</th>";
      tabla.append(cabecera);
      for (let item of lista) {
        fila = tabla.insertRow();
        celda = fila.insertCell();
        celda.textContent = item[0];
        celda = fila.insertCell();
        celda.textContent = item[1];
      }
      return tabla;
    })
    .then((res) => {
      setTimeout(darSalida(res), 800);
    })
    .catch("error");
}

function darSalida(res) {
  salida.append(res);
}

function formProductos(event) {
  event.preventDefault();
  let idProd = formulario.idProducto.value;
  let idCat = formulario.idCat.value;
  let nombre = formulario.nombre.value;
  let precio = formulario.precio.value;
  let prodAux = {
    _idProducto: idProd,
    _idCategoria: idCat,
    _precioUnidad: precio,
    _nombreProducto: nombre,
  };
  let idFire = idProd - 1;

  fetch(apiLink + "catalogo/_productos.json")
    .then((res) => res.json())
    .then((res) => Object.values(res))
    .then((res) => {
      setTimeout(() => {
        let encontrado = false;
        for (let prod of res) {
          if (prod._idProducto == idProd) {
            fetch(apiLink + "catalogo/_productos/" + idFire + ".json", {
              method: "PATCH",
              headers: {
                "Content-Type": "application/json;charset=utf-8",
              },
              body: JSON.stringify(prodAux),
            }).then((res) => res.json());

            encontrado = true;
          }
        }
        if (!encontrado) {
          catalogo.addProducto(idProd, nombre, precio, idCat);

          fetch(apiLink + "catalogo.json", {
            method: "PUT",
            headers: {
              "Content-Type": "application/json;charset=utf-8",
            },
            body: JSON.stringify(catalogo),
          })
            .then((res) => res.json())
            .catch(console.log("error"));
        }
      }, 800);
    })
    .catch("error");

  setTimeout(comienzo, 1200);
}
/* 
function gestionFrom(res){
  for(let prod of res){
    if(res._idProducto)
  }
} */
