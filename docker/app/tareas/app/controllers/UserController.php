<?php
session_start();
require_once '../../config/database.php';
require_once '../models/User.php';

$userModel = new User($conn);

header('Content-Type: application/json');

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // $data = json_decode(file_get_contents("php://input"), true);
        $data = $_POST;

        $action = $data['action'] ?? '';

        if ($action === 'login' && !empty($data['username']) && !empty($data['password'])) {
            $user = $userModel->login($data['username']);
            if (!empty($user) && password_verify($data["password"], $user[0]["clave"])) {
                $_SESSION["usuario"] = $data['username'];
                $_SESSION["id"] = $user[0]['id'];
                $_SESSION["rol"] = $user[0]['rol'];
                header("Location: ../../index.php");
            } else {
                echo "Error de autentificacion";
                session_destroy();
            }
        } else {
            throw new Exception("Acción no válida o parámetros incorrectos.");
        }
    }
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
