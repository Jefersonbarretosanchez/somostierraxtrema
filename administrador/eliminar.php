<?php
include('../bd/config.php');
if(!empty($_GET["idr"])){
    $id = $_GET["idr"];
    $sql = "DELETE from reservas where id_reserva=$id";
    $result = mysqli_query($con, $sql);
    header("HTTP/1.1 302 Moved Temporarily"); 
    header('Location: ../administrador/reservas.php');
}

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE from formulario where id=$id";
    $result = mysqli_query($con, $sql);
    header("HTTP/1.1 302 Moved Temporarily"); 
    header('Location: ../administrador/informacion.php');
   
}