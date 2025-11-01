<?php
session_start();
echo $_SESSION["usuario"];

session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Unidad 4</title>
</head>

<body>
    <h1>Unidad 4</h1>
    <?php
    echo "<h2>Hola a todos!!</h2>";
    $nombre = "Karol";
    $apellido = "Leal";
    $edad = 35;
    $altura = 1.6;
    $esEstudiante = true;

    $espacio = "<br>";

    echo $nombre . " " . $apellido . $espacio;
    echo "Edad " . $edad . $espacio;
    echo "Altura " . $altura . $espacio;
    echo "Es estudiante? " . $esEstudiante . $espacio;

    $validacionCamposRequerido = true;

    $mensaje = "";
    if ($validacionCamposRequerido) {
        $mensaje = "Se guardo exitosamente!";
    } else {
        $mensaje = "Campos requeridos vacios, error guardar";
    }
    $validacionCamposRequerido = false;
    echo $mensaje . $espacio;
    $mensaje = ($validacionCamposRequerido) ? "Se guardo exitosamente!" : "Campos requeridos vacios, error guardar";

    echo $mensaje . $espacio;

    if ($edad > 65) {
        echo "Adulto mayor" . $espacio;
    } elseif ($edad > 18) {
        echo "Adulto" . $espacio;
    } else {
        echo "Menor de edad" . $espacio;
    }

    if ($edad > 18) {
        if ($esEstudiante) {
            echo "mayor de edad y estudiante" . $espacio;
        } else {
            echo "mayor de edad y no es estudiante" . $espacio;
        }
    } else {
        if ($esEstudiante) {
            echo "menor de edad y estudiante" . $espacio;
        } else {
            echo "menor de edad y no es estudiante" . $espacio;
        }
    }

    $color = 'verde';
    switch ($color) {
        case 'verde':
            echo "Siga!" . $espacio;
            break;
        case 'amarillo':
            echo "con cuidado!" . $espacio;
            break;
        case 'rojo':
            echo "detengase!" . $espacio;
            break;
        default:
            echo "no esta definido!" . $espacio;
            break;
    }

    $a = 5;
    $b = "5";

    if ($a == $b) { // comparando por valor
        echo "valores de a y b son iguales" . $espacio;
    } else {
        echo "el valor de a y b son diferentes" . $espacio;
    }

    if ($a === $b) {  // valores y tipo de dato
        echo "valores y el tipo de datos de a y b son iguales" . $espacio;
    } else {
        echo "el valor o el tipo de dato de a y b son diferentes" . $espacio;
    }

    if ($a != $b) {
        echo "el valor de a y b son diferentes" . $espacio;
    } else {
        echo "valores de a y b son iguales" . $espacio;
    }


    if ($a !== $b) {
        echo "el valor O el tipo de dato de a y b son diferentes" . $espacio;
    } else {
        echo "el valor y el tipo de dato de a y b son iguales" . $espacio;
    }
    $b = 10;
    if ($a >= $b) {
        echo "a es mayor o igual a b" . $espacio;
    }

    if ($a <= $b) {
        echo "a es menor o igual a b" . $espacio;
    }

    if ($edad > 18 && $esEstudiante) {
        echo "es mayor de edad y es estudiante" . $espacio;
    }

    if ($edad > 18 || $esEstudiante) {
        echo "es mayor de edad o es estudiante" . $espacio;
    }
    $edad = 12;
    if (!($edad > 18)) {
        echo "es menor de edad" . $espacio;
    }

    for ($i = 1; $i <= 10; $i++) {
        echo $i . $espacio;
    }
    echo $espacio;
    $numero = 16;

    do {
        $numero++;
        echo "dowhile" . $numero . $espacio;
    } while ($numero <= 15);

    while ($numero <= 17) {
        $numero++;
        echo "while" . $numero . $espacio;
    }




    ?>
    <ul>
        <li>Opcion 1</li>
    </ul>
    <?php

    echo "Segundo bloque de PHP";
    ?>
</body>

</html>