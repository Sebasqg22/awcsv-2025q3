<?php
require_once '../../config/database.php'; 

class User
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    
    public function login($username): array
    {
        try {
            $stmt = $this->conn->prepare("select * from usuario  where usuario = :username");
            $stmt->execute(['username' => $username]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return ["error" => "Error al obtener tareas: " . $e->getMessage()];
        }
    }


}
