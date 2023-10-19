<?php
include('config.php');

$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$password = sha1($_POST['password']);
$perfil = $_POST['perfil'];

if (buscarRepetido($email, $con) == 1) {
    if($perfil=="Administrador"){
    echo "<script languaje='javascript'>alert('Usuario Ya existe'); location.href = '../administrador/adm.php';</script>";
    }else{
    echo "<script languaje='javascript'>alert('Usuario Ya existe'); location.href = '../registro.php';</script>";
    }
} else {
    $sql = "INSERT into usuarios(nombre, email, contraseña,perfil) values ('$nombre','$email','$password','$perfil')";
    $result = mysqli_query($con, $sql);

    $row = mysqli_insert_id($con);
    if ($perfil == "Administrador") {
        $_SESSION['perfil'] =  "Administrador";
        // Redirecciono al usuario a la página principal del administrador del sitio.
        header("HTTP/1.1 302 Moved Temporarily");
        header("Location: ../administrador/Adm.php");
    } else {
        $_SESSION['perfil'] =  "Usuario";
        // Redirecciono al usuario a la página principal del sitio.
        header("HTTP/1.1 302 Moved Temporarily");
        header("Location: ../registro.php");
    }
}

function buscarRepetido($user, $con)
{
    $sql = "SELECT * from usuarios where email='$user'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        return 1;
    } else {
        return 0;
    }
}
