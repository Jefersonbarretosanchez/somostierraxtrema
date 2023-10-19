<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/registro.css">
    <link rel="shortcut icon " href="./assets/img/logo.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap">
    <!-- Boopstrat 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS Alertify -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <!-- Sweat Alert -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css" rel="stylesheet">
    <title>Somos Tierra</title>
</head>
<?php
include('menu.php');
?>
<div class="contenedor-login">
    <div class="contenedor-slider">
        <div class="slider">
            <!-- Slide 1 -->
            <div class="slide fade ">
                <img src="./assets/img/canocristales.jpg" alt="">
                <div class="contenido-slider">
                    <div class="logo">
                        <img src="./assets/img/logo.png" alt="">
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide fade ">
                <img src="./assets/img/miradorecologico.jpg" alt="">
                <div class="contenido-slider">
                    <div class="logo">
                        <img src="./assets/img/logo.png" alt="">
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="slide fade">
                <img src="./assets/img/Cascadas.jpg" alt="">
                <div class="contenido-slider">
                    <div class="logo">
                        <img src="./assets/img/logo.png" alt="">
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

            <h1 class="titulo text-center">¡Bienvenido a Somos Tierra!</h1>
            <p class="descripcion text-center">Ingresa a tu cuenta para disfrutar de tus beneficios</p>
            <!-- tabs -->
            <ul class="tabs-links">
                <li class="tab-link active">iniciar sesion</li>
                <li class="tab-link">Registrate</li>
            </ul>
            <!-- Formulario Login -->
            <form action="./bd/usr.php" method="POST" id="formLogin" class="formulario  active">
                <div class="error-text">
                    <p>Aqui estan los errores</p>
                </div>
                <input type="text" placeholder="correo Electronico" class="input-text" name="correo" autocomplete="off">
                <div class="grupo-input">
                    <input type="password" placeholder="Contraseña" name="password" class="input-text clave">
                    <button type="button" class="icono fa-solid fa-eye mostrarClave"></button>
                </div>

                <a href="#" class="link">¿Olvidaste tu contraseña?</a>
                <button class="btn" id="btnLogin" type="button"> Iniciar Sesion</button>
            </form>

            <!-- Formulario Registro -->
            <form action="./bd/crear.php" method="POST" id="formRegistro" class="formulario  ">
                <div class="error-text ">
                    <p></p>
                </div>
                <input type="text" placeholder="Nombres y Apellidos" class="input-text" name="nombre" autocomplete="off">
                <input type="text" placeholder="correo Electronico" class="input-text" name="correo" autocomplete="off">
                <div class="grupo-input">
                    <input type="password" placeholder="Contraseña" name="password" class="input-text clave">
                    <button type="button" class="icono fa-solid fa-eye mostrarClave"></button>
                    <input type="hidden" name="perfil" class="form-control input-text" id="perfil" value="Usuario">
                </div>

                <!-- CheckBox Personalizados -->
                <label for="" class="contenedor-cbx animate">
                    Me gustaria recibir notificaciones sobre productos
                    <input type="checkbox" name="cbx_notificaciones" checked>
                    <span class="cbx-marca"></span>
                </label>

                <label for="" class="contenedor-cbx animate">
                    He leido y acepto los <a href="#" class="link">Terminos y condiciones</a>
                    <a href="#" class="link">y Politicas de privacidad</a>
                    <input type="checkbox" name="cbx_terminos" checked>
                    <span class="cbx-marca"></span>
                </label>
                <button class="btn" id="btnRegistro" type="button"> Crear Cuenta</button>
            </form>
        </div>
    </div>
</div>
<script src="./js/app.js"></script>


<?php include('footer.html'); ?>