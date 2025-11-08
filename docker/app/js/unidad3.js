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

for (let i = 0; i <= 10; i++) {
    console.log(i);
}
console.log(listaFrutas[1]);
for (let x in listaFrutas) {
    console.log(listaFrutas[x]);
}

for (let i = 0; i <= 10; i++) {
    console.log("5 x " + i + "=" + (i * 5));
}

edad = 45;

do { // ejecuta al menos una vez el bloque de codigo, sin importar la condicion
    edad++;
    console.log("dowhile", edad);
} while (edad < 30); //  ve la condicion y si true vuelve ejecutar y si no sale de la  iteracion
console.log("Salio con edad", edad);

edad = 45;
while (edad < 30) { // ve la condicion si cumple ejecuta y si no tan siquiera entra
    edad++;
    console.log("while", edad);
}

function sumar(a, b) {
    return a + b;
}

function restar(a, b) {
    return a - b;
}

function saludar(nombre) {
    console.log("Hola! " + nombre)
}
let numero1 = 6;
let numero2 = 3;
let operador = "*";
let total_calculadora = 0;
switch (operador) {
    case "+":
        total_calculadora = sumar(numero1, numero2);
        break;
}
console.log(total_calculadora);
saludar("Karol");

document.addEventListener("DOMContentLoaded", function () { // me aseguro que el DOM este cargado
    document.getElementById("mensaje").style.display = "none";
    document.getElementById("titulo").innerText = "Unidad 3";
    //document.getElementById("actividades").innerHTML = "<h2>Actividades</h2>";
    let nuevoLi = document.createElement("li");
    nuevoLi.innerText = "Conferencias";
    document.getElementById("listaActividades").appendChild(nuevoLi);

    document.getElementById("actividades").style.backgroundColor = "orange";
    document.getElementById("listaActividades").style.backgroundColor = "orange";
    document.getElementById("actividad").style.backgroundColor = "white";
    document.getElementById("actividad").style.borderColor = "violet";

    document.getElementById("agregarActividades").addEventListener("click", function () {
        let actividad = document.getElementById("actividad").value;
        if (actividad != "") {
            let nuevoLi = document.createElement("li");
            nuevoLi.innerText = actividad;
            document.getElementById("listaActividades").appendChild(nuevoLi);
            document.getElementById("actividad").value = "";
            document.getElementById("actividad").style.backgroundColor = "white";
            document.getElementById("mensaje").style.display = "none";
        } else {
            document.getElementById("actividad").style.backgroundColor = "red";
            document.getElementById("mensaje").style.display = "block";
        }
        console.log(actividad);
    })
})
