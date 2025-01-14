<?php
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode(['message' => 'Hola Mundo']);
} else {
    http_response_code(405);
}
?>
