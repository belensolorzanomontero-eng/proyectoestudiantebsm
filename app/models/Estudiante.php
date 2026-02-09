<?php
class Estudiante {
    private $conn;
    private $table_name = "estudiantes";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function leerTodos() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function crear($nombre, $apellido, $email, $carrera) {
        $query = "INSERT INTO " . $this->table_name . " (nombre, apellido, email, carrera) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$nombre, $apellido, $email, $carrera]);
    }

    public function obtenerPorId($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($id, $nombre, $apellido, $email, $carrera) {
        $query = "UPDATE " . $this->table_name . " SET nombre=?, apellido=?, email=?, carrera=? WHERE id=?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$nombre, $apellido, $email, $carrera, $id]);
    }

    public function borrar($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$id]);
    }
}
?>