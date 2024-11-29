<?php
include('bd.php');

// Leer los datos enviados desde JavaScript
$data = json_decode(file_get_contents("php://input"), true);
$colorPiel = $data['colorPiel'];
$peinado = $data['peinado'];
$userId = 1; // Obtén el ID del usuario autenticado

// Guardar el avatar en la base de datos
$sql = "INSERT INTO avatars (user_id, color_piel, peinado) VALUES (?, ?, ?)
        ON DUPLICATE KEY UPDATE color_piel = VALUES(color_piel), peinado = VALUES(peinado)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iss", $userId, $colorPiel, $peinado);

if ($stmt->execute()) {
    echo "Avatar guardado correctamente.";
} else {
    echo "Error al guardar el avatar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
