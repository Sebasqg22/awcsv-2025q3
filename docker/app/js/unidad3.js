// declarar variables
let nombre = "Karol";
let apellido = "Leal";
let edad = 35;
let altura = 1.60;
let esEstudiante = false;

let informacionGeneral = {
    nombre: "Karol",
    apellido: "Leal",
    edad: 35,
    altura: 1.60,
    esEstudiante: true
}

let listaEdades = [23, 40, 46, 10];
let listaFrutas = ["manzana", "pera", "melon"];

const mayorEdad = 18;

console.log("Hola mundo!");
console.log(nombre);
console.log(apellido);
console.log(edad);
console.log(esEstudiante);
console.log(informacionGeneral);
console.log(listaEdades);
console.log(listaFrutas);

// Ambito

let total = 0; // global
console.log(total);
function sumar(a, b) {
    let total = a + b; //local
    console.log(total);
}
sumar(5, 6);
console.log(total);

console.log("Longitud de nombre: " + nombre.length);
console.log(nombre.toLowerCase());
console.log(nombre.replace("l", "i"));
console.log(edad.toString());
console.log(altura.toFixed(1));
console.log(esEstudiante.toString());

console.log(listaFrutas.pop());
console.log(listaFrutas);

let validacionCamposRequerido = true;

let mensaje = "";
if (validacionCamposRequerido) {
    mensaje = "Se guardo exitosamente!";
} else {
    mensaje = "Campos requeridos vacios, error guardar";
}
validacionCamposRequerido = false;
console.log(mensaje);
mensaje = (validacionCamposRequerido) ? "Se guardo exitosamente!" : "Campos requeridos vacios, error guardar";

console.log(mensaje);

let color = 'verde';

if (color == "verde") {
    console.log("Siga!");
} else if (color == "amarillo") {
    console.log("con cuidado!");
} else if (color == "rojo") {
    console.log("detengase!");
} else {
    console.log("no esta definido!");
}
color = "amarillo";
switch (color) {
    case 'verde':
        console.log("Siga!");
        break;
    case 'amarillo':
        console.log("con cuidado!");
        break;
    case 'rojo':
        console.log("detengase!");
        break;
    default:
        console.log("no esta definido!");
        break;
}