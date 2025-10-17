<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferencias 2025 Tech</title>
    <style></style>
    <link rel="stylesheet" href="./css/unidad2.css">
</head>

<body>

    <header>
        <h1>Conferencias Tech 2025</h1>
        <p>Las mejores conferencias de innovacion y desarrollo</p>
    </header>
    <main>
        <section class="info">
            <h2>Sobre el evento</h2>
            <p> Unete a nuestro evento</p>
        </section>
        <section class="speakers">
            <h2>Conferencistas</h2>
            <div class="speakers-list">
                <div class="speaker">
                    <h3>Conferencista 1</h3>
                    <p>experto en tecnologia</p>
                </div>
                <div class="speaker" id="unico">
                    <h3>Conferencista 2</h3>
                    <p>ssss</p>
                    <p>experto en tecnologia</p>
                    <p>ssss</p>
                </div>
                <div class="speaker">
                    <h3>Conferencista 3</h3>
                    <p>experto en tecnologia</p>
                </div>
            </div>
        </section>
        <section class="register">
            <h2>Registrarse</h2>
            <button>Unete!</button>
        </section>
        <section>
            <form>
                <input type="text" id="i1">
                <input type="number" id="i2">
                <input type="date" id="i3">
                <input type="color" id="c1">
                <button>Unete!</button>
            </form>
        </section>
        <section>
            <h2>PHP</h2>
            <?php
            echo "Hola mundo!"; // imprimir en pantalla

            // declarar variables
            $nombre = "Karol";
            $apellido = "Leal";
            $edad = 35;
            $altura = 1.60;
            $esEstudiante = false;

            $espacio = "<br>";
            echo $espacio;

            echo "<h3>" . $nombre . " " . $apellido . " " . $edad . " " . $altura . " " . $esEstudiante . "</h3>" . $espacio;

            $validacionCamposRequerido = true;
            $mensaje = "";

            // IF ELSE
            if ($validacionCamposRequerido) {
                $mensaje = "Se guardo exitosamente!";
            } else {
                $mensaje = "Campos requeridos vacios, error guardar";
            }
            echo $mensaje . $espacio;
            $validacionCamposRequerido = false;
            // TERNARIO
            $mensaje = ($validacionCamposRequerido) ? "Se guardo exitosamente!" : "Campos requeridos vacios, error guardar";
            echo $mensaje . $espacio;
            $edad = 30;
            //IF ELSEIF ELSE
            if ($edad > 65) {
                echo "Adulta mayor" . $espacio;
            } elseif ($edad >= 18) {
                echo "Adulto" . $espacio;
            } else {
                echo "menor de edad" . $espacio;
            }
            // condicional anidado
            if ($edad >= 18) {
                if ($esEstudiante) {
                    echo "Es mayor de edad estudiante" . $espacio;
                } else {
                    echo "Es mayor de edad, no es estudiante" . $espacio;
                }
            } else {
                if ($esEstudiante) {
                    echo "Es menor de edad estudiante" . $espacio;
                } else {
                    echo "Es menor de edad, no es estudiante" . $espacio;
                }
            }
            $color = "verde";
            switch ($color) {
                case 'verde':
                    echo "Siga!" . $espacio;
                    break;
                case 'amarillo':
                    echo "Con cuidado!" . $espacio;
                    break;
                case 'rojo':
                    echo "Detengase!" . $espacio;
                    break;
                default:
                    echo "No esta definido!" . $espacio;
                    break;
            }

            $a = 5; // valor 5 y de tipo numerico
            $b = "5"; // valor es 5 , tipo string

            if ($a == $b) { // a  b son iguales en valor
                echo "a y b tienen el mismo valor" . $espacio;
            }

            if ($a === $b) { // a b son iguales en valor y tipo
                echo "a y b tienen el mismo valor y el mismo tipo" . $espacio;
            }

            if ($a != $b) { // a y b es diferente en valor
                echo "a y b tienen diferente valor" . $espacio;
            }
            if ($a !== $b) { // a y b son diferentes en valor o en tipo
                echo "a y b tienen diferente valor o tipo" . $espacio;
            }
            $a = 50;
            $b = 10;
            if ($a >= $b) {
                echo "a es mayor o igual a b" . $espacio;
            }
            if ($a > $b) {
                echo "a es mayor a b" . $espacio;
            }

            if ($a < $b) {
                echo "b es mayor o igual a a" . $espacio;
            }

            //and or 

            // condicional anidado
            if ($edad >= 18 && $esEstudiante) {
                echo "Es mayor de edad estudiante" . $espacio;
            } else {
                if ($edad >= 18 && !$esEstudiante) {
                    echo "Es mayor de edad y no es estudiante" . $espacio;
                } elseif ($edad < 18 || $esEstudiante) {
                    echo "Es menor de edad o es estudiante" . $espacio;
                }
            }

            for ($i = 0; $i <= 10; $i++) {
                echo $i . "<br>";
            }

            // dowhile se ejecuta al menos una vez
            $edad = 50;
            do {
                $edad++;
                echo "dowhile".$edad . $espacio;
            } while ($edad < 40);

            while ($edad < 50) {
                $edad++;
                echo "while".$edad . $espacio;
            }
            ?>
        </section>
    </main>
    <footer>
        <p> Conferencia 2025</p>
    </footer>
</body>

</html>