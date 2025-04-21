<?php
header('Content-Type: application/json');

if (isset($_GET['endpoint'])) {
    switch ($_GET['endpoint']) {
        case 'servicios':
            require_once 'controllers/serviciosController.php';
            break;
        // Otros casos según sea necesario
        default:
            http_response_code(404);
            echo json_encode(['error' => 'Endpoint no se encuentra disponible']);
            break;
    }
} else {
    http_response_code(400);
    echo json_encode(['error' => 'Parámetro endpoint requerido']);
}
?>
