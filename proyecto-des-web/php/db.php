<?php
$host = "127.0.0.1"; 
$user = "root";      
$password = "";      
$dbname = "healthy_habits"; 

// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
