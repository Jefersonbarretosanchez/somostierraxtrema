<?php
if (isset($_POST['btnActualizarAdm'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $perfil = $_POST['perfil'];
    include('../bd/config.php');
    $sql = "UPDATE usuarios set nombre='$nombre', email='$correo',perfil='$perfil' where id_usuarios=$id";
    $result = mysqli_query($con, $sql);
    $_SESSION["username"] = $nombre;
    $_SESSION["perfil"] = $perfil;
    // Redirecciono al usuario a la página principal del administrador del sitio.
    echo "<script languaje='javascript'>alert('Registro Exitoso'); location.href = '../administrador/Adm.php';</script>";
    mysqli_close($con);
}
if (isset($_POST['btnActualizarUsr'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $perfil = $_POST['perfil'];
    include('../bd/config.php');
    $sql = "UPDATE usuarios set nombre='$nombre', email='$correo',perfil='$perfil' where id_usuarios=$id";
    $result = mysqli_query($con, $sql);
    // Redirecciono al usuario a la página principal del usuario.
    echo "<script languaje='javascript'>alert('Registro Exitoso'); location.href = '../usuario/tablerousr.php';</script>";
}

if (isset($_POST['btnActualizarReser'])) {
    $idReserva = $_GET['id'];
    $idUsuario=$_POST['id_usuario'];
    $telefono = $_POST['telefono'];
    $plan = $_POST['plan'];
    $fecha = $_POST['fecha'];
    $estado =$_POST['estado'];
    include('../bd/config.php');
    $sql = "UPDATE reservas set id_usuario='$idUsuario', telefono='$telefono',plan='$plan',fecha='$fecha',estado='$estado' where id_reserva=$idReserva";
    $result = mysqli_query($con, $sql);
    // Redirecciono al usuario a la página principal del usuario.
    echo "<script languaje='javascript'>alert('Registro Exitoso'); location.href = '../usuario/reservas.php';</script>";
}
if (isset($_POST['btnActualizarReserAdm'])) {
    $idReserva = $_GET['id'];
    $idUsuario=$_POST['id_usuario'];
    $telefono = $_POST['telefono'];
    $plan = $_POST['plan'];
    $fecha = $_POST['fecha'];
    $estado =$_POST['estado'];
    include('../bd/config.php');
    $sql = "UPDATE reservas set id_usuario='$idUsuario', telefono='$telefono',plan='$plan',fecha='$fecha',estado='$estado' where id_reserva=$idReserva";
    $result = mysqli_query($con, $sql);
    // Redirecciono al usuario a la página principal del usuario.
    echo "<script languaje='javascript'>alert('Registro Exitoso'); location.href = '../administrador/reservas.php';</script>";
}
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $id = $_GET['id'];
//     $nombre = $_POST['nombre'];
//     $correo = $_POST['correo'];
//     $password = $_POST['password'];
//     $perfil = $_POST['perfil'];
//     include('../bd/config.php');

//     if ($perfil == "Administrador") {
//         $sql = "UPDATE usuarios set nombre='$nombre', email='$correo',perfil='$perfil' where id_usuarios=$id";
//         $result = mysqli_query($con, $sql);
//         // Redirecciono al usuario a la página principal del administrador del sitio.
//         echo "<script languaje='javascript'>alert('Registro Exitoso'); location.href = '../administrador/Adm.php';</script>";
//     } else {
//         if ($password == "") {
//             $sql = "UPDATE usuarios set nombre='$nombre', email='$correo',perfil='$perfil' where id_usuarios=$id";
//             $result = mysqli_query($con, $sql);
//             // Redirecciono al usuario a la página principal del sitio.
//             echo "<script languaje='javascript'>alert('Registro Exitoso De Usuario'); location.href = '../usuario/tablerousr.php';</script>";
//         }
//         $sql = "UPDATE usuarios set nombre='$nombre', email='$correo',contraseña='$password',perfil='$perfil' where id_usuarios=$id";
//         $result = mysqli_query($con, $sql);
//         // Redirecciono al usuario a la página principal del sitio.
//         echo "<script languaje='javascript'>alert('Registro Exitoso De Usuario'); location.href = '../usuario/tablerousr.php';</script>";
//     }
// }
