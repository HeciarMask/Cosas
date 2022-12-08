//Función constructora
function Producto(nombre, unidades, precio) {
  this.nombre = nombre;
  this.unidades = unidades;
  this.precio = precio;
}
// Métodos
Producto.prototype.incrementarStock = function (numero) {
  this.unidades += numero;
};
Producto.prototype.decrementarStock = function (numero) {
  this.unidades -= numero;
};
Producto.prototype.valorEnStock = function () {
  return this.unidades * this.precio;
};
// Getter y Setter
Producto.prototype.getUnidades = function () {
  return this.unidades;
};
Producto.prototype.setUnidades = function (unidades) {
  this.unidades = unidades;
};
Producto.prototype.getPrecio = function () {
  return this.precio;
};
Producto.prototype.setPrecio = function (precio) {
  this.precio = precio;
};
Producto.prototype.getNombre = function () {
  return this.nombre;
};
Producto.prototype.setNombre = function (nombre) {
  this.nombre = nombre;
};

let p = new Producto("Almendras", 45, 8.4);
console.log(p.getNombre() + " " + p.getUnidades() + " " + p.getPrecio());
