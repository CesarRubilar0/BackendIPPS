<?php
require_once '../config.php';

class ServiciosModel {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->conn->connect_error) {
            die(json_encode(['error' => 'Conexión fallida: ' . $this->conn->connect_error]));
        }
    }

    public function getAllServicios() {
        $sql = "SELECT id, nombre, descripcion, valor_clp, valor_usd FROM servicios";
        $result = $this->conn->query($sql);
        $servicios = [];
        while ($row = $result->fetch_assoc()) {
            $servicios[] = $row;
        }
        return $servicios;
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>
