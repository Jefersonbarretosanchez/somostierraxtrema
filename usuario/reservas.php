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
                    <img height="60px" width="60px" src="../assets/img/perfil1.jpg" class="avatar mx-auto d-block" id="avatar">
                    <h2 class="username text-center info-user" id="username"> <?php echo $_SESSION["username"]; ?></h2>
                </div>

                <a href="../usuario/usuario.php">
                    <div class="btn-home mt-4 dashboard-nav-item">
                        <i class="fa-solid fa-house"></i>
                        Inicio
                    </div>
                </a>
                <div class='dashboard-nav-dropdown'>
                    <a href="tablerousr.php" class="dashboard-nav-item disabled"><i class="fa-solid fa-user"></i>Mi Cuenta</a>
                </div>

                <!-- <div class='dashboard-nav-dropdown'>
            <a href="#!" class="dashboard-nav-item"><i
                    class=" fas fa-user-lock "></i>Admin</a>
        </div> -->
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
                <?php
                include('../bd/config.php');
                include('../bd/actualizar.php');
                $id_usuario = $_SESSION["id_usuario"];
                $sql = "SELECT * from reservas";
                $result = mysqli_query($con, $sql);
                while ($row = $result->fetch_array()) {
                    $idr = $row['id_reserva'];
                    $nombre = $row['nombre'];
                    $telefono = $row['telefono'];
                    $plan = $row['plan'];
                    $fecha = $row['fecha'];
                    $estado = $row['estado'];
                    echo '
                            <div class="modal fade" id="actualizarReserva' . $idr . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">    <div class="modal-dialog">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar Datos</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../bd/actualizar.php?id=' . $idr . '" method="POST">
                                            <div class="mb-3" style="text-align: left;">
                                                <input Type="hidden" value="' . $id_usuario . '" name="id_usuario" class="form-control" id="nombre">
                                            </div>
                                            <label>Telefono</label>
                                            <input  value="' . $telefono . '" name="telefono" class="form-control" id="nombre">
                                            <div>
                                            </div>
                                            <div class="mb-3" style="text-align: left;">
                                                <label>Plan Turistico</label>
                                                <select name="plan" id="plan" class="form-control table-filter">
                                    <option value="">--------------</option>
                                        <option value="Cocina Criolla">Cocina Criolla</option>
                                        <option value="Excursion Motorizada">Excursion Motorizada</option>
                                        <option value="Piscina Natural">Piscinas Naturales</option>
                                    </select>
                                            </div>
                                            <div class="mb-3" style="text-align: left;">
                                                <label>Fecha Agenda</label>
                                                <input Type="date" value="' . $fecha . '" name="fecha" class="form-control" id="perfil">
                                                <input type="hidden" value="Pendiente" name="estado" class="form-control" id="nombre">
                                            </div>        
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" name="btnActualizarReser" class="btn btn-primary" value="Guardar Cambios"> 
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                        </form>
                            </div>
                        </div>
                        </div>';
                }
                ?>
                <!-- Listar Reservas -->
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <h1 class="title-principal">Mis reservas</h1>
                                <hr class="hr-title">
                                <div class="row">
                                    <div class="col-md-2 title">Telefono</div>
                                    <div class="col-md-3 title">Plan</div>
                                    <div class="col-md-3 title">Fecha</div>
                                    <div class="col-md-3 title">Estado</div>
                                    <hr class="hr-encabezado">
                                </div>
                                <!-- Traer la información de la BD -->
                                <?php
                                $inc = include("../bd/config.php");
                                include('../bd/eliminar.php');
                                $id_usuario = $_SESSION["id_usuario"];
                                if ($inc) {
                                    $consulta = "SELECT * FROM reservas where id_usuario='$id_usuario'  order by fecha ";
                                    $resultado = mysqli_query($con, $consulta);
                                    if ($resultado) {
                                        while ($row = $resultado->fetch_array()) {
                                            $idr = $row['id_reserva'];
                                            $nombre = $row['nombre'];
                                            $telefono = $row['telefono'];
                                            $plan = $row['plan'];
                                            $fecha = $row['fecha'];
                                            $estado = $row['estado'];
                                ?>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <h1 class="text"><?php echo $telefono; ?></h1>
                                                </div>
                                                <div class="col-md-3">
                                                    <h1 class="text"><?php echo $plan; ?></h1>
                                                </div>
                                                <div class="col-md-3">
                                                    <h1 class="text"><?php echo $fecha; ?></h1>
                                                </div>
                                                <div class="col-md-3">
                                                    <h1 class="text"><?php echo $estado; ?></h1>
                                                </div>
                                                <?php echo '
                                                <div class="col-md-1">
                                                    <a class="btn" data-bs-toggle="modal" data-bs-target="#actualizarReserva' . $idr . '">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                </div>'; ?>


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
                <!-- Fin listar Reservas -->
                <!-- Crear nueva reserva -->
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            $inc = include("../bd/config.php");
                            if ($inc) {
                                $consulta = "SELECT * FROM usuarios";
                                $resultado = mysqli_query($con, $consulta);
                                $row = mysqli_fetch_array($resultado);
                                if ($resultado) {

                                    $nombre = $row['nombre'];
                                    $email = $row['email'];
                                    $password = $row['contraseña'];
                                    $perfil = $row['perfil'];

                                    echo '
                                    <form action="../bd/reserva" method="POST" id="FormReserva" class="formulario">
                                    <div class="form-group row">
                                    <h4>Nueva Reserva</h4>
                                    <hr>                                                                        
                                    <div class="col-md-6 col-sm-12">
                                    <input type="hidden" class="form-control table-filter" id="id" name="id" value="' . $id_usuario . '">
                                    <input type="hidden" class="form-control table-filter" id="nombre" name="nombre" value="' . $nombre . '">
                                        <label for="nombre">Telefono</label>
                                        <input type="text" class="form-control table-filter" id="telefono" name="telefono" value="">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                    <label for="nombre">Plan</label>
                                    <select name="plan" id="plan" class="form-control table-filter">
                                    <option value="">--------------</option>
                                        <option value="Cocina Criolla">Cocina Criolla</option>
                                        <option value="Excursion Motorizada">Excursion Motorizada</option>
                                        <option value="Piscina Natural">Piscinas Naturales</option>
                                    </select>
                                </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label for="nombre">Fecha Agenda</label>
                                        <input type="date" class="form-control table-filter" id="fecha" name="fecha" value="">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <input type="hidden" name="estado" class="form-control input-text" id="estado" value="Pendiente">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button class="btn" name="btnReserva" id="btnReserva" type="submit">Guardar Cambios</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/24bba0bedc.js" crossorigin="anonymous"></script>


</body>

</html>