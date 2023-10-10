<?php
try {
    include('../bd/config.php');

    $id = $_GET['id_usuarios'];
    $consultaSQL = "DELETE FROM usuarios WHERE id_usuarios =" . $id;
    $result = mysqli_query($con, $consultaSQL);
    header('Location: ../administrador/adm.php');
} catch (PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
}
