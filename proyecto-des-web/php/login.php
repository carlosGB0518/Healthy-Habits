<?php

include ("db.php");

$correo= $_POST['email'];
$contra= $_POST['password'];

$resultado= mysqli_query($conn, "SELECT * FROM users WHERE email= '$correo' and password= '$contra'");
$fila= mysqli_num_rows($resultado);

if($fila>0){
    session_start();
    $_session['cliente']=$email;
    header("location:http://localhost/proyecto-des-web/inicio/inicio.html");
}else{
    echo'
    <script>
    alert("el correo o la contraseña son incorrectos")
    location.href="http://localhost/proyecto-des-web/iniciar_sesion/Iniciar_sesion.html"
    </script>
    ';
}
?>