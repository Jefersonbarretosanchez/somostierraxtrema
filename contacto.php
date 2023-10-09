<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="shortcut icon " href="./img/logo.ico">
  <title>Somos Tierra</title>
</head>
<?php include './menu.php'; ?>

<section class="Form " style="border: 2px red solid;">
    <!--Section: Contact v.2-->
    <div class="container-form " style="background-image: url('./img/paisaje2.jpeg');
        height: 70vh;">
        <!--Section heading-->
        <h2 class="contact-text">Contactanos</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">¿Tienes alguna duda?Quieres saber mas de nuestros
            planes.Contactanos, nuestro equipo estara feliz de atenderle</p>
        <div class="row">
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Nombres Completos</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Correo Electronico</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Motivo</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Tu Mensaje</label>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Enviar</a>
                </div>
                <div class="status"></div>
            </div>
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Villavicencio, Meta</p>
                    </li>
                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 57 3232907739</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>info@tierraxtrema.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </div>

</section>

<a href="https://wa.me/573232907739?text=Hola%20quiero%20explorar%20al%20extremo" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i></a>
<?php include './footer.html'; ?>