<?php
$servename = "db";
$usernameDB = "appuser";
$passwordDB = "apppass";
$database = "appdb";

try {
    $conn = new mysqli($servename, $usernameDB, $passwordDB, $database, 3306);
} catch (mysqli_sql_exception $e) {
    die("Error de conexión: " . $e->getMessage());
}

echo "Conexion exitosa<br>";

// CRUD

//Read - SELECT
$sql = "SELECT * FROM tareas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $tareas = $result->fetch_all(MYSQLI_ASSOC);
    print_r($tareas);
    foreach ($tareas as $tarea) {
        echo $tarea["descripcion"] . "-" . $tarea["activo"] . "<br>";
    }
} else {

    echo "No hay datos en la tabla tareas<br>";
}


//insert  - Create
/*
$sql = "INSERT INTO tareas (descripcion, activo) VALUES ('Nueva tarea', 1)";

if ($conn->query($sql) === TRUE) {
    echo "Se registro correctamente! <br>";
} else {
   echo "Hubo un error al insertar <br>";
}
*/
$sql = "update tareas set descripcion = 'Nuevo dato de tarea' where id = 1";

if ($conn->query($sql) === TRUE) {
    echo "Se actualizo correctamente! <br>";
} else {
    echo "Hubo un error al actualizar <br>";
}

$sql = "delete from tareas  where id = 1";

if ($conn->query($sql) === TRUE) {
    echo "Se elimino correctamente! <br>";
} else {
    echo "Hubo un error al eliminar <br>";
}

// HASHING

$clave = "12346";
$hash = password_hash($clave, PASSWORD_BCRYPT);
//echo $hash;
$hash = '$2y$10$JT.aYnkcRTyzluaLr.nu.uvVjpHlfzRfWhtpvT1z8M4T5.dij15rO';

if (password_verify($clave, $hash)) {
    echo "Si es correcta la clave";
} else {
    echo "No es correcta la clave";
}
