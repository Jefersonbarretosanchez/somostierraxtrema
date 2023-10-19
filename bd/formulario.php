<?php

        $nombre = $_POST['nombre'];
        $email = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $motivo = $_POST['motivo'];
        $mensaje = $_POST['mensaje'];
        include('config.php');
        $sql = "INSERT into formulario(nombres, email, telefono,motivo, mensaje) values ('$nombre','$email','$telefono','$motivo','$mensaje')";
        $result = mysqli_query($con, $sql);
    
        $row = mysqli_insert_id($con);
        echo "<script languaje='javascript'>alert('Informacion Registrada Exitosamente'); location.href = '../contacto.php';</script>";
       
