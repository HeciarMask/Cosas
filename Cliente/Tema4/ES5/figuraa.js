function Figura(color) {
  this.color = color;
}

Figura.prototype.getColor = function () {
  return this.color;
};

Figura.prototype.setColor = function (color) {
  this.color = color;
};

Figura.prototype.imprimir = function () {
  return "Soy una figura de color " + this.getColor();
};

// Rectángulo
function Rectangulo(color, base, altura) {
  Figura.call(this, color); // Llamada al constructor del objeto padre
  this.base = base;
  this.altura = altura;
}

// Aqui es donde heredamos propiedades y metodos
Rectangulo.prototype = Object.create(Figura.prototype);
Rectangulo.prototype.constructor = Rectangulo;

let r = new Rectangulo("Rojo", 45, 6);
console.log(r.imprimir());
