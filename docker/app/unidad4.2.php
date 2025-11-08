<?php
session_start();
$espacio = "<br>";


$elementosArreglo = array(2, 4, 10, 5, 15, 3); // [2, 4, 10, 5, 15, 3] 
//Funcion integrada permite pintar en pantalla arreglos print_r();
print_r($elementosArreglo);  //Arreglos donde el index son numeros -> indexados
echo $espacio;
echo $elementosArreglo[5];
echo $espacio;

// asignar datos a un arreglo 
$nombreEstudiante[0]  = "Paola";
$nombreEstudiante[10] = "Juan";
print_r($nombreEstudiante);
echo $espacio;
$nombreEstudiante[] = $elementosArreglo;
print_r($nombreEstudiante);
echo $espacio;

// Arreglos donde el index es una clave -> asociativos
$persona = [
    "nombre" => "Karol",
    "apellido" => "Leal",
    "edad" => 35,
    "esProfesor" => true,
    "coloresFavoritos" => [
        "amarillo",
        "violeta"
    ]
];

print_r($persona);
echo $espacio;
echo $persona["nombre"];
echo $espacio;
echo $persona["coloresFavoritos"][1];
echo $espacio;
$persona["hobbie"] = "Ver television";
print_r($persona);
echo $espacio;

$listadoEstudiantes = [
    ["nombre" => "Maria", "nota" => 95],
    ["nombre" => "Juan", "nota" => 70],
    ["nombre" => "Lucas", "nota" => 60],
];
print_r($listadoEstudiantes);
echo $espacio;
for ($i = 0; $i < count($listadoEstudiantes); $i++) {
    if ($listadoEstudiantes[$i]["nota"] >= 70) {
        echo $listadoEstudiantes[$i]["nombre"] . $espacio;
    }
}


foreach ($listadoEstudiantes as $estudiante) {
    if ($estudiante["nota"] <= 70) {
        echo $estudiante["nombre"] . $espacio;
    }
}

echo $listadoEstudiantes[1]["nota"];
echo $espacio;


$listadoNumeros = [1, 2, 3, 4, 5];
print_r($listadoNumeros);
array_push($listadoNumeros, 6);

print_r($listadoNumeros);
echo $espacio;

$posicion = array_search("Karol", $persona);

echo $posicion;
echo $espacio;

$posicion = array_search(5, $listadoNumeros);
echo $posicion;
echo $espacio;

echo $listadoNumeros[$posicion];

echo $espacio;

$arregloFusinado = array_merge($elementosArreglo, $listadoNumeros);
print_r($arregloFusinado);
echo $espacio;

// FUNCIONES

// funcion simple
function sumar($a, $b)
{
    return $a + $b;
}
echo sumar(2, 3);



echo $espacio;

function saludar()
{
    echo str_replace("a","*","Hola a todos!!");
}
saludar();

echo $espacio;
// anonima
$suma = function ($a, $b) {
    return $a + $b;
};

echo $suma(6, 6);
echo $espacio;

$duplica = fn($a) => $a * 2;

echo $duplica(8);
echo $espacio;

// Archivos


$archivo = fopen("archivo.txt", "w"); // agrega a lo que hay y con w siempre sobreescribe el archivo
$txt = "Nueva linea \n";
fwrite($archivo, $txt);
$txt = "Otra Nueva linea\n";
fwrite($archivo, $txt);
fclose($archivo);

$_SESSION["usuario"] = "kleal";
$_SESSION["rol"] = "profesor";
$_SESSION["wish_list"] = [
    "id" => 1,
    "item" => "Arroz"
];
print_r($_SESSION);

