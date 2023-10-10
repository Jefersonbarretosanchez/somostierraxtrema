<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/tablero.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon " href="../img/logo.ico">
    <title>Somos Tierra</title>
</head>

<body>
    <div class="dashboard"> <!-- CUERPO -->


        <div class="dashboard-nav custom-scrollbar"> <!-- CUERPO NAVBAR -->
            <!-- NAVBAR PRINCIPAL -->
            <header class="dashboard-header">
                <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
                <a href="/"><img height="60px" src="../img/logo.png" class="mCS_img_loaded"></a>
            </header>
            <!-- NAVBAR LATERAL -->

            <nav class="dashboard-nav-list">
                <a href="../usuario/usuario.php">
                    <div class="btn-home mt-4 dashboard-nav-item">
                        <i class="fa-solid fa-house"></i>
                        Inicio
                    </div>
                </a>
                <div class='dashboard-nav-dropdown'>
                    <a href="./tableroAdm.php" class="dashboard-nav-item disabled"><i class="fa-solid fa-user"></i>Mi Cuenta</a>
                </div>

                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item"><i class=" fas fa-user-lock "></i>Admin</a>
                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item disabled"><i class="fa-solid fa-shop"></i>Reservas</a>
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
                            <div class="container">
                                <h1 class="title-principal">Usuarios</h1>
                                <hr class="hr-title">
                                <div class="row">
                                    <div class="col-md-3 title">Nombre</div>
                                    <div class="col-md-3 title">Correo</div>
                                    <div class="col-md-3 title">Perfil</div>
                                    <hr class="hr-encabezado">
                                </div>
                                <?php $inc = include("../bd/config.php");
                                if ($inc) {
                                    $consulta = "SELECT * FROM usuarios";
                                    $resultado = mysqli_query($con, $consulta);
                                    if ($resultado) {
                                        while ($row = $resultado->fetch_array()) {
                                            $id = $row['id_usuarios'];
                                            $nombre = $row['nombre'];
                                            $email = $row['email'];
                                            $perfil = $row['perfil'];
                                ?>
                                            <div class="row">
                                                <div class="col-md-1 disabled">
                                                <h1 class="text"><?php echo $id; ?></h1>
                                                </div>
                                                <div class="col-md-3">
                                                    <h1 class="text"><?php echo $nombre; ?></h1>
                                                </div>
                                                <div class="col-md-3">
                                                    <h1 class="text"><?php echo $email; ?></h1>
                                                </div>
                                                <div class="col-md-3">
                                                    <h1 class="text"><?php echo $perfil; ?></h1>
                                                </div>
                                                <div class="col-md-1">
                                                    <a href="../bd/actualizar.php" class="btn"><i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
                                                <div class="col-md-1">
                                                    <a href="../bd/eliminar.php" class="btn"><i class="fa-solid fa-trash"></i></a>
                                                </div>

                                                <hr class="hr-datos">
                                            </div>
                                <?php
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- FIN CUERPO -->
    <script src="https://kit.fontawesome.com/24bba0bedc.js" crossorigin="anonymous"></script>

</body>

</html>