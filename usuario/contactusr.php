<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap">
    <link rel="stylesheet" href="../styles/registro.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon " href="../assets/img/logo.ico">
    <title>Somos Tierra</title>
</head>
<?php
include('menu_usuario.php');
?>
<div class="contenedor-login">
    <div class="contenedor-slider">
        <div class="slider">
            <!-- Slide 1 -->
            <div class="slide fade ">
                <img src="../assets/img/canocristales.jpg" alt="">
                <div class="contenido-slider">
                    <div class="logo">
                        <img src="../assets/img/logo.png" alt="">
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide fade ">
                <img src="../assets/img/miradorecologico.jpg" alt="">
                <div class="contenido-slider">
                    <div class="logo">
                        <img src="../assets/img/logo.png" alt="">
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="slide fade">
                <img src="../assets/img/Cascadas.jpg" alt="">
                <div class="contenido-slider">
                    <div class="logo">
                        <img src="../assets/img/logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- botones next y prev -->
        <a href="#" class="prev"><i class="fa-solid fa-chevron-left"></i></a>
        <a href="#" class="next"><i class="fa-solid fa-chevron-right"></i></i></a>
        <!-- dots -->
        <div class="dots">
            <!-- <span class="dot "></span>
                <span class="dot active"></span>
                <span class="dot"></span> -->
        </div>
    </div>
    <!-- ||||||||||||||||||||||Formularios|||||||||||||||||||||||||| -->
    <div class="contenedor-texto">
        <div class="contenedor-form">
            <h1 class="titulo text-center">¡Contactanos!</h1>
            <p class="descripcion text-center">¿Tienes alguna duda?Quieres saber mas de nuestros planes.<br>Contactanos, nuestro equipo estara feliz de atenderle</p>
            <!-- tabs -->

            <!-- Formulario Login -->
            <form action="../bd/formulariousr.php" method="POST" id="formContact" class="formulario  active">
                <div class="error-text">
                    <p>Aqui estan los errores</p>
                </div>
                <input type="text" placeholder="Nombre Completo" class="input-text" name="nombre" autocomplete="off">
                
                <input type="text" placeholder="Correo Electronico" class="input-text" name="correo" autocomplete="off">
               
                <input type="number" placeholder="Telefono Contacto" class="input-text" name="telefono" autocomplete="off">
                
                <select name="motivo" id="motivo" class="input-text">
                <option value="">--------------</option>
                    <option value="Consulta">Consulta</option>
                    <option value="Peticion">Peticion</option>
                    <option value="Queja">Queja</option>
                    <option value="Queja">Reserva</option>
                </select>
               
                <textarea class="input-text" name="mensaje" id="mensaje" cols="64" rows="4" placeholder="Indica tu mensaje"></textarea>
                <button class="btn" id="btnContact" type="button">Enviar</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/24bba0bedc.js" crossorigin="anonymous"></script>
<script src="../js/app.js"></script>


<?php include('../footer.html'); ?>