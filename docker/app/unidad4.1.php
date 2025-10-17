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
            $esEstudiante = true;

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


            /*

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
    */

            ?>
        </section>
    </main>
    <footer>
        <p> Conferencia 2025</p>
    </footer>
</body>

</html>