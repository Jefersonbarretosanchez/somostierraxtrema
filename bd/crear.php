<?php
try {
    include('config.php');

    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $password = $_POST['password'];
    $sql = "INSERT into usuarios(nombre, email, contraseña,perfil) values ('$nombre','$email','$password','usuario')";
    $result = mysqli_query($con, $sql);

    $row = mysqli_insert_id($con);
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: ../registro.php"); 
} catch (Exception $e) {
    echo $error->getMessage();
    die();
}
