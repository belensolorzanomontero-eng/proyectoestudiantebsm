<?php
require_once '../app/config/conndb.php';
require_once '../app/models/Estudiante.php';

class EstudianteController {
    private $db;
    private $estudiante;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->estudiante = new Estudiante($this->db);
    }

    public function listar() {
        $estudiantes = $this->estudiante->leerTodos();
        // Cargamos la vista de consulta de estudiantes
        include '../app/views/listar.php';
    }

    public function guardar() {
        if ($_POST) {
            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $this->estudiante->actualizar($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['carrera']);
            } else {
                $this->estudiante->crear($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['carrera']);
            }
            header("Location: ../public/index.php");
        }
    }

    public function eliminar($id) {
        $this->estudiante->borrar($id);
        header("Location: ../public/index.php");
    }
}
?>