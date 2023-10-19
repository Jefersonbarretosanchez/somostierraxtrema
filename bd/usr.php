<?php
 require('config.php');
// Obtengo los datos cargados en el formulario de login.
$email = $_POST['correo'];
$email = addslashes($email);
$email = strip_tags($email);

$password = sha1($_POST['password']);
$password = addslashes($password);
$password = strip_tags($password);
// Consulta segura para evitar inyecciones SQL.
$sql = "SELECT id_usuarios,nombre,email, perfil FROM usuarios WHERE email='$email' AND contraseña = '$password'";

$resultUsuario = $con->query($sql);
$row = $resultUsuario->fetch_assoc();
$id= $row['id_usuarios'];
$nombre = $row['nombre'];
$perfil =$row['perfil'];
if ($resultUsuario->num_rows === 0) {
    echo '<script language="javascript">alert("Datos Incorrectos");window.location.href="../registro.php"</script>';
} else {
    session_start();
    $_SESSION["username"] = $nombre;
    $_SESSION["perfil"] = $perfil;
    $_SESSION["id_usuario"]=$id;
    if ($row['perfil'] == "Administrador") {
        // Redirecciono al usuario a la página principal del administrador del sitio.
        header("HTTP/1.1 302 Moved Temporarily");
        header("Location: ../administrador/Adm.php");
    } else {
        // Redirecciono al usuario a la página principal del usuario 
        header("HTTP/1.1 302 Moved Temporarily");
        header("Location: ../usuario/tablerousr.php");
    }
}
