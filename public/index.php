<?php
/**
 * FRONT CONTROLLER
 * Punto de entrada único a la aplicación.
 */

// 1. Importar el controlador necesario
require_once '../app/controllers/EstudianteController.php';

// 2. Instanciar el controlador
$controller = new EstudianteController();

/**
 * 3. Enrutamiento (Routing)
 * Capturamos la variable 'action' que viene por la URL (GET) 
 * Ejemplo: index.php?action=eliminar&id=5
 */
$action = isset($_GET['action']) ? $_GET['action'] : 'listar';

switch ($action) {
    case 'listar':
        // Llama al método que carga la vista de la tabla
        $controller->listar();
        break;

    case 'guardar':
        // Llama al método que procesa el formulario (INSERT o UPDATE)
        // Se le pasan los datos enviados por el método POST
        $controller->guardar($_POST);
        break;

    case 'eliminar':
        // Llama al método que borra el registro
        if (isset($_GET['id'])) {
            $controller->eliminar($_GET['id']);
        } else {
            // Si no hay ID, volvemos a mostrar la lista
            header("Location: index.php");
        }
        break;

    default:
        // Si la acción no existe, cargamos la lista por defecto
        $controller->listar();
        break;
}

?>