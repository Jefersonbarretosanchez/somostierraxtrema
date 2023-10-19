<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/tablero.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon " href="../assets/img/logo.ico">
    <title>Somos Tierra</title>
</head>

<body>
    <div class="dashboard"> <!-- CUERPO -->


        <div class="dashboard-nav custom-scrollbar"> <!-- CUERPO NAVBAR -->
            <!-- NAVBAR PRINCIPAL -->
            <header class="dashboard-header">
                <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
                <a href="/"><img height="60px" src="../assets/img/logo.png" class="mCS_img_loaded"></a>
            </header>
            <!-- NAVBAR LATERAL -->

            <nav class="dashboard-nav-list">
                <div class='dashboard-nav-dropdown'>
                    <img height="80px" width="80px" src="../assets/img/perfil1.jpg" class="avatar mx-auto d-block" id="avatar">
                    <h2 class="username text-center info-user" id="username"> <?php echo $_SESSION["username"]; ?></h2>
                </div>
                <a href="../usuario/usuario.php">
                    <div class="btn-home mt-4 dashboard-nav-item">
                        <i class="fa-solid fa-house"></i>
                        Inicio
                    </div>
                </a>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item disabled"><i class="fa-solid fa-user"></i>Mi Cuenta</a>
                </div>

                <!-- <div class='dashboard-nav-dropdown'>
            <a href="#!" class="dashboard-nav-item"><i
                    class=" fas fa-user-lock "></i>Admin</a>
        </div> -->
                <div class='dashboard-nav-dropdown'>
                    <a href="reservas.php" class="dashboard-nav-item disabled"><i class="fa-solid fa-shop"></i>Reservas</a>
                </div>
                <div class="dasboard-nav-dropdown">
                    <a href="../bd/logout.php" class="dashboard-nav-item"><i class="fa-solid fa-right-from-bracket"></i>Cerrar Sesion</a>
                </div>

            </nav>
        </div> <!-- FIN CUERPO NAVBAR -->

        <div class='dashboard-app'>

            <header class='dashboard-toolbar d-flex'>
            </header>

            <div class='dashboard-content'>
                <!-- CONTENIDO -->

                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            $inc = include("../bd/config.php");
                            $idUsr= $_SESSION["id_usuario"];
                            if ($inc) {
                                $consulta = "SELECT * FROM usuarios where id_usuarios='$idUsr'";
                                $resultado = mysqli_query($con, $consulta);
                                $row = mysqli_fetch_array($resultado);
                                if ($resultado) {

                                    $id = $row['id_usuarios'];
                                    $nombre = $row['nombre'];
                                    $email = $row['email'];
                                    $password = $row['contraseña'];
                                    $perfil = $row['perfil'];
                                    echo '
                            <form action="../bd/actualizar.php?id=' . $id . '" method="POST" id="FormUser" class="formulario">
                                <div class="form-group row">
                                    <h4>INFORMACION PERSONAL</h4>
                                    <hr>                                                                        
                                    <div class="col-md-6 col-sm-12">
                                        <label for="matricula">Nombre</label>
                                        <input type="text" class="form-control table-filter" id="nombre" name="nombre" value="' . $nombre . '">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label for="nombre">Correo</label>
                                        <input type="text" class="form-control table-filter" id="correo" name="correo" value="' . $email . '">
                                        <input type="hidden" name="perfil" class="form-control input-text" id="perfil" value="Usuario">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button class="btn" name="btnActualizarUsr" id="btnActualizarUsr" type="submit">Guardar Cambios</button>
                                    </div>
                                </div>
                                <br>';
                                }
                            }

                            ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- FIN CUERPO -->
    <script src="https://kit.fontawesome.com/24bba0bedc.js" crossorigin="anonymous"></script>

</body>

</html>