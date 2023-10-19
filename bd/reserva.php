<?php
  include('../bd/config.php');
if (isset($_POST['btnReserva'])) {
    $idUsr = $_POST['id'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $plan = $_POST['plan'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];
    
    $sql = "INSERT INTO `reservas` (`id_reserva`, `id_usuario`, `nombre`, `telefono`, `plan`, `fecha`, `estado`) VALUES (NULL, '$idUsr', '$nombre', '$telefono', '$plan', '$fecha', '$estado')";
    // $sql = "INSERT into reservas(id_usuario, nombre,telefono,plan,fecha, estado) values ('$idUsr,'$nombre','$telefono','$plan','$fecha','$estado')";
    $result = mysqli_query($con, $sql);
    $row = mysqli_insert_id($con);
    // exit();
    // Redirecciono al usuario a la página principal del usuario.
    if($result){
        echo "<script languaje='javascript'>alert('Reserva Exitosa $nombre'); location.href = '../usuario/reservas.php';</script>";
    }else{
        echo "<script languaje='javascript'>alert('Error $nombre'); location.href = '../usuario/reservas.php';</script>";
    }
    
}

if (isset($_POST['btnReservaAdm'])) {
    $idUsr = $_POST['id'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $plan = $_POST['plan'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];
    
    $sql = "INSERT INTO `reservas` (`id_reserva`, `id_usuario`, `nombre`, `telefono`, `plan`, `fecha`, `estado`) VALUES (NULL, '$idUsr', '$nombre', '$telefono', '$plan', '$fecha', '$estado')";
    // $sql = "INSERT into reservas(id_usuario, nombre,telefono,plan,fecha, estado) values ('$idUsr,'$nombre','$telefono','$plan','$fecha','$estado')";
    $result = mysqli_query($con, $sql);
    $row = mysqli_insert_id($con);
    // exit();
    // Redirecciono al usuario a la página principal del usuario.
    if($result){
        echo "<script languaje='javascript'>alert('Reserva Exitosa $nombre'); location.href = '../administrador/reservas.php';</script>";
    }else{
        echo "<script languaje='javascript'>alert('Error $nombre'); location.href = '../administrador/reservas.php';</script>";
    }
    
}

// include('config.php');

// $idUsr = $_POST['id'];
// $nombre = $_POST['nombre'];
// $telefono = $_POST['telefono'];
// $plan = $_POST['plan'];
// $fecha = $_POST['fecha'];
// $estado = $_POST['estado'];

// $sql = "INSERT into reservas(id_usuario, nombre,telefono,plan,fecha, estado) values ('$idUsr,'$nombre','$telefono','$plan','$fecha','$estado')";
// $result = mysqli_query($con, $sql);

// echo "<script languaje='javascript'>alert('Reserva Exitosa .$nombre.'); location.href = '../usuario/reservas.php';</script>";


// if ($perfil == "Administrador") {
//     $_SESSION['perfil'] =  "Administrador";
//     // Redirecciono al usuario a la página principal del administrador del sitio.
//     header("HTTP/1.1 302 Moved Temporarily");
//     header("Location: ../administrador/Adm.php");
// } else {
//     $_SESSION['perfil'] =  "Usuario";
//     // Redirecciono al usuario a la página principal del sitio.
//     header("HTTP/1.1 302 Moved Temporarily");
//     header("Location: ../registro.php");
// }
