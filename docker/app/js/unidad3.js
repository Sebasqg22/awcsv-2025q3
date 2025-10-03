console.log("Hello world!");

var name = "Karol";
let lastname = "Leal";
let age = 35;
let isStudent = false;
let salary = 100.89;

console.log(name);
console.log(lastname);
console.log(age);
console.log(isStudent);
console.log(salary);

const mayorEdad = 18;

let total = 20;

console.log(total);

function suma(a, b) {
    let total = a + b;
    console.log(total);
}

suma(5, 6);
console.log(total);

// propiedades

console.log(lastname.length);
// Ejemplo si una clave tiene min 5 a 10 digitos
console.log(lastname.charAt(2));
console.log(lastname.replace("L", "1"))
console.log("Edad: " + age.toString());
console.log(salary.toFixed(1));
console.log(isStudent.toString());

let fruits = ["manzana", "melon", "sandia"];
console.log(fruits)

let personalInfo = {
    name: "Karol",
    lastname: "Leal",
    age: 35,
    salary: 100.90,
    isStudent: false
}

console.log(personalInfo);
console.log(personalInfo.age);

let permiso = (isStudent) ? false : true;

//variable = condicion ? true : false;

// Variable mensaje si puede conducir
age = 12;

let mensaje2 = "";

if (mayorEdad < age) {
    mensaje2 = "Si puede conducir ";
} else {
    mensaje2 = "No puede conducir";
}
console.log(mensaje2);

let mensaje = (mayorEdad < age) ? "Si puede conducir " : "No puede conducir";
console.log(mensaje);


let color = "rojo";

if (color == "verde") { // 1 if
    console.log("Siga!");
} else if (color == 'amarillo') { // 1 else if
    console.log("cuidado!");
} else if (color == "rojo") { // 2 else if
    console.log("detengase!")
} else { // else
    console.log("color no esta definido");
}
color = "verde";
switch (color) {
    case 'rojo':
        console.log("detengase!")
        break;
    case 'amarillo':
        console.log("cuidado!");
        break;
    case 'verde':
        console.log("Siga!");
        break;
    default:
        console.log("color no esta definido");
        break;
}