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
                <a href="/"><img height="60px" src="../assets/img/logo.png" class=""></a>
            </header>
            <!-- NAVBAR LATERAL -->

            <nav class="dashboard-nav-list">
                <div class='dashboard-nav-dropdown'>
                    <img height="60px" width="60px" src="../assets/img/perfil2.jpg" class="avatar mx-auto d-block" id="avatar">
                    <h2 class="username text-center info-user" id="username"> <?php echo $_SESSION["username"]; ?></h2>
                    <h2 class="rol text-center info-user" id="rol"><?php echo $_SESSION['perfil']; ?></h2>
                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item"><i class=" fas fa-user-lock "></i>Admin</a>
                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="./informacion" class="dashboard-nav-item"><i class="fa-solid fa-clipboard"></i>Solicitudes</a>
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
                <!-- Modal Para Actualizacion -->
                <?php
                include('../bd/config.php');
                include('../bd/actualizar.php');
                $sql = "SELECT * from usuarios";
                $result = mysqli_query($con, $sql);
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id_usuarios'];
                    $nombre = $row['nombre'];
                    $email = $row['email'];
                    $perfil = $row['perfil'];
                    echo '
                    <div class="modal fade" id="staticBackdrop' . $id . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">    <div class="modal-dialog">
                         <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar Datos</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="../bd/actualizar.php?id=' . $id . '" method="POST">
                                    <div class="mb-3" style="text-align: left;">
                                         <label>Nombre:</label>
                                        <input value="' . $nombre . '" name="nombre" class="form-control" id="nombre">
                                    </div>
                                    <div class="mb-3" style="text-align: left;">
                                        <label>Correo:</label>
                                        <input value="' . $email . '" name="correo" class="form-control" id="correo">
                                    </div>
                                    <div class="mb-3" style="text-align: left;">
                                        <label>Perfil:</label>
                                        <input value="' . $perfil . '" name="perfil" class="form-control" id="perfil">
                                    </div>        
                            </div>
                            <div class="modal-footer">
                                <input type="submit" name="btnActualizarAdm" class="btn btn-primary" value="Guardar Cambios"> 
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                                </form>
                    </div>
                </div>
                </div>';
                }
                ?>
                <!-- Fin Modal Actualizacion -->
                <!-- Inicio Modal Creacion Nuevo Registro -->
                <div class="modal fade" id="createAdm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Nuevo Registro</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="../bd/crear.php" method="POST">
                                    <div class="mb-3" style="text-align: left;">
                                        <label>Nombre:</label>
                                        <input name="nombre" class="form-control" id="nombre">
                                    </div>
                                    <div class="mb-3" style="text-align: left;">
                                        <label>Correo:</label>
                                        <input name="correo" class="form-control" id="correo">
                                    </div>
                                    <div class="mb-3" style="text-align: left;">
                                        <input type="password" name="password" id="password" class="form-control input-text" placeholder="Contraseña ">
                                        <input type="hidden" name="perfil" class="form-control input-text" id="perfil" value="Administrador">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" name="btnRegistroAdm" class="btn btn-primary" value="Guardar Cambios">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Fin modal creacion registros -->
                <!-- Inicio Listar Usuarios -->
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
                                    <div class="col-md-3 title">
                                        <a class="btn" data-bs-toggle="modal" data-bs-target="#createAdm">
                                            <i class="fa-solid fa-user-plus"></i> Nuevo Registro
                                        </a>
                                    </div>
                                    <hr class="hr-encabezado">
                                </div>
                                <!-- Traer la información de la BD -->
                                <?php
                                $inc = include("../bd/config.php");
                                include('../bd/eliminar.php');
                                if ($inc) {
                                    $consulta = "SELECT * FROM usuarios order by perfil";
                                    $resultado = mysqli_query($con, $consulta);
                                    if ($resultado) {
                                        while ($row = $resultado->fetch_array()) {
                                            $id = $row['id_usuarios'];
                                            $nombre = $row['nombre'];
                                            $email = $row['email'];
                                            $perfil = $row['perfil'];
                                ?>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h1 class="text"><?php echo $nombre; ?></h1>
                                                </div>
                                                <div class="col-md-3">
                                                    <h1 class="text"><?php echo $email; ?></h1>
                                                </div>
                                                <div class="col-md-3">
                                                    <h1 class="text"><?php echo $perfil; ?></h1>
                                                </div>
                                                <?php echo '
                                                <div class="col-md-1">
                                                    <a class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop' . $id . '">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                </div>
                                                
                                                <div class="col-md-1">
                                                    <a href="../bd/eliminar.php?id=' . $id . '" class="btn" name="btnEliminar"><i class="fa-solid fa-trash"></i></a>
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
        <script src="../js/user.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/24bba0bedc.js" crossorigin="anonymous"></script>

</body>

</html>