<?php
class Database {
    private $host = "localhost"; // Servidor de base de datos
    private $db_name = "mi_base_de_datos"; // Nombre de la base de datos (Cambia esto por el tuyo)
    private $username = "root"; // Usuario de phpMyAdmin (por defecto en XAMPP es "root")
    private $password = ""; // Contraseña (vacía por defecto en XAMPP)
    public $conn;

    // Método para conectar a la base de datos
    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>