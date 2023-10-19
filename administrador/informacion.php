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
                    <img height="60px" width="60px" src="../assets/img/perfil2.jpg" class="avatar mx-auto d-block" id="avatar">
                    <h2 class="username text-center info-user" id="username"> <?php echo $_SESSION["username"]; ?></h2>
                    <h2 class="rol text-center info-user" id="rol"><?php echo $_SESSION['perfil']; ?></h2>
                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="./adm.php" class="dashboard-nav-item"><i class=" fas fa-user-lock "></i>Admin</a>
                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="#" class="dashboard-nav-item"><i class="fa-solid fa-clipboard"></i>Solicitudes</a>
                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="./reservas.php" class="dashboard-nav-item disabled"><i class="fa-solid fa-shop"></i>Reservas</a>
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
                <!-- Inicio Listar Solicitudes -->
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <h1 class="title-principal">Solicitudes Pendientes</h1>
                                <hr class="hr-title">
                                <div class="row">
                                    <div class="col-md-2 title">Nombre</div>
                                    <div class="col-md-3 title">Correo</div>
                                    <div class="col-md-2 title">Telefono</div>
                                    <div class="col-md-2 title">Motivo</div>
                                    <div class="col-md-2 title">Mensaje</div>
                                    <hr class="hr-encabezado">
                                </div>
                                <!-- Traer la información de la BD -->
                                <?php
                                $inc = include("../bd/config.php");
                                include('eliminar.php');
                                if ($inc) {
                                    $consulta = "SELECT * FROM formulario";
                                    $resultado = mysqli_query($con, $consulta);
                                    if ($resultado) {
                                        while ($row = $resultado->fetch_array()) {
                                            $id = $row['id'];
                                            $nombre = $row['nombres'];
                                            $email = $row['email'];
                                            $telefono = $row['telefono'];
                                            $motivo =$row['motivo'];
                                            $mensaje =$row['mensaje'];
                                ?>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <h1 class="text"><?php echo $nombre; ?></h1>
                                                </div>
                                                <div class="col-md-3">
                                                    <h1 class="text"><?php echo $email; ?></h1>
                                                </div>
                                                <div class="col-md-2">
                                                    <h1 class="text"><?php echo $telefono; ?></h1>
                                                </div>
                                                <div class="col-md-2">
                                                    <h1 class="text"><?php echo $motivo; ?></h1>
                                                </div>
                                                <div class="col-md-2">
                                                    <h1 class="text"><?php echo $mensaje; ?></h1>
                                                </div>
                                                <?php 
                                                echo '                                               
                                                <div class="col-md-1">
                                                    <a href="../administrador/eliminar.php?id='.$id.'" class="btn"><i class="fa-solid fa-trash"></i></a>
                                                </div>
                                                ' ?>

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
        </div> <!-- FIN CUERPO -->
        <script src="../js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/24bba0bedc.js" crossorigin="anonymous"></script>

</body>

</html>