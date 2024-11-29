<?php
include('db.php');

// Recoger los datos del formulario
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$phone = $_POST['phone'];

// Verificar si el nombre de usuario ya existe
$verificacion = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
$r = mysqli_num_rows($verificacion);

if ($r > 0) {
    echo '
    <script>
    alert("El nombre de usuario ya está siendo utilizado");
    location.href = "../registrar/Registro.html";
    </script>
    ';
    exit;
}
$verificacionC = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
$R = mysqli_num_rows($verificacionC);

if ($R > 0) {
    echo '
    <script>
    alert("El correo ya está siendo utilizado");
    location.href = "../registrar/Registro.html";
    </script>
    ';
    exit;
}

// Insertar el nuevo usuario en la base de datos
$insertar = mysqli_query($conn, "INSERT INTO users (username, email, password, phone) VALUES ('$username', '$email', '$password', '$phone')");

if ($insertar) {
    echo '
    <script>
    alert("Registro exitoso");
    location.href = "http://localhost/proyecto-des-web/index.php";
    </script>
    ';
} else {
    echo '
    <script>
    alert("Error al registrar el usuario");
    location.href = "../iniciar_sesion/Iniciar_sesion.html";
    </script>
    ';
}

mysqli_close($conn);
?>
