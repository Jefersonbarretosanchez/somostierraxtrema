<?php
include('config.php');
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE from usuarios where id_usuarios=$id";
    $result = mysqli_query($con, $sql);
    header("HTTP/1.1 302 Moved Temporarily"); 
    header('Location: ../administrador/adm.php');
   
}

