<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="shortcut icon " href="./img/logo.ico">
  <title>Somos Tierra</title>
</head>

<?php include './menu.php'; ?>
<!-- Inicio del Carrusel de fotos -->
<div class="container-fluid carrusel">
    <!-- clase carousel, identifica que va a ser un carrusel -->
    <div id="carrusel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button data-bs-target="#carrusel" data-bs-slide-to="0" class="active"></button>
            <button data-bs-target="#carrusel" data-bs-slide-to="1" class="active"></button>
            <button data-bs-target="#carrusel" data-bs-slide-to="2" class="active"></button>
            <button data-bs-target="#carrusel" data-bs-slide-to="3" class="active"></button>
            <button data-bs-target="#carrusel" data-bs-slide-to="4" class="active"></button>
            <button data-bs-target="#carrusel" data-bs-slide-to="5" class="active"></button>
            <button data-bs-target="#carrusel" data-bs-slide-to="6" class="active"></button>
        </div>
        <!-- Contenido del carrusel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- carousel caption:titulos de las imagenes y descripcion -->
                <div class="carousel-caption c1">
                    <h2>Cascadas del amor</h2>
                    <p>Ubicadas en la Uribe Meta, a 5 horas de Villavicencio, es un maravilloso atractivo gracias a
                        su caida de agua de 15 metros.</p>
                </div>
                <img src="./img/cascadadelamor.jpg" class="d-block w-100" alt="paisajes colombia">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <h2>Cascadas Cristalinas</h2>
                    <p>Maravillosas cascadas de agua cristalina, rodeada del encanto natural del paisaje</p>
                </div>
                <img src="./img/Cascadas.jpg" class="d-block w-100" alt="paisajes colombia">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <h2>Caño Cristales</h2>
                    <p>El Rio de los 5 colores se encuentra ubicado en el Parque Nacional Natural Sierra de La
                        Macarena.</p>
                </div>
                <img src="./img/canocristales.jpg" class="d-block w-100" alt="paisajes colombia">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <h2>Grutas Naturales</h2>
                    <p>Ubicados a lo largo del departamento del meta, podemos encontrar diversidad de cascadas
                        dentro de ellas.</p>
                </div>
                <img src="./img/grutas.jpg" class="d-block w-100" alt="paisajes colombia">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <h2>Miradores Ecologicos</h2>
                    <p>a lo largo del departamento contamos con miradores desde donde podemos divisar la inmensidad
                        del departamento</p>
                </div>
                <img src="./img/miradorecologico.jpg" class="d-block w-100" alt="miradorecologico">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <h2>Miradores Naturales</h2>
                    <p>Desde estos puntos naturales podemos divisar las maravillas de la creacion.-</p>
                </div>
                <img src="./img/miradornatural.jpg" class="d-block w-100" alt="miradornatural">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <h2>Naturaleza Pura</h2>
                    <p>La inmensidad y el contraste de colores se pueden apreciar en la diversidad de paisajes, que
                        nunca nos cansaremos de apreciar.</p>
                </div>
                <img src="./img/piscina natutal.jpg" class="d-block w-100" alt="">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" data-bs-target="#carrusel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>

    </div>
</div>
<!-- Fin carrusel de fotos -->
<!-- Inicio de la seccion album -->
<section class="Seccion-album">
    <div class="container">
        <div class="row ">
            <h2 class="titlealbum">Nuestras Aventuras</h2>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <img class="card img-top" src="./img/album/336674168_743050460653899_5898796434721224237_n.jpg" alt="Naturaleza Activa">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <img class="card img-top" src="./img/album/340163631_238013892044107_5482462865587380996_n.jpg" alt="Naturaleza Activa">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <img class="card img-top" src="./img/album/340753424_887523945651922_2935621007880708193_n.jpg" alt="Naturaleza Activa">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <img class="card img-top" src="./img/album/340776758_1399630320870488_4978956324547012971_n.jpg" alt="Naturaleza Activa">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <img class="card img-top" src="./img/album/340916110_1447095879363754_3589627860800385458_n.jpg" alt="Naturaleza Activa">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <img class="card img-top" src="./img/album/340944578_1433210210783466_4741297528863912425_n.jpg" alt="Naturaleza Activa">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <img class="card img-top" src="./img/album/340959080_1647281742401324_6644383306071932500_n.jpg" alt="Naturaleza Activa">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <img class="card img-top" src="./img/album/341052360_522896570047940_995777073222583865_n.jpg" alt="Naturaleza Activa">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <img class="card img-top" src="./img/album/341088679_766589308505002_4164518169647964829_n.jpg" alt="Naturaleza Activa">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <img class="card img-top" src="./img/album/343063492_619248653077743_5759727825880342654_n.jpg" alt="Naturaleza Activa">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <img class="card img-top" src="./img/album/343076629_2289716311210593_4714910756209965075_n.jpg" alt="Naturaleza Activa">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <img class="card img-top" src="./img/album/naturaleza impactante.jpg" alt="Naturaleza Activa">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fin Seccioin Album -->
<!-- Inicio Seccion Videos -->
<section class="seccion-videos">
    <div class="container">
        <div class="row">
            <h2 class="title-videos">Videos</h2>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <video controls class="card video-top" src="./videos/329809601_593743849483064_1938375553402645190_n.mp4"></video>
                    <div class="card-body">
                        <h6 class="card-title">"Depronto abre tus ojos , te das cuenta que ese mundo mágico que
                            soñaste de niño; está allí siempre ..."</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <video controls class="card video-top" src="./videos/339840824_814779053596874_8311957987816704263_n.mp4"></video>
                    <div class="card-body">
                        <h6 class="card-title">"Nuestro deber es cuidar y alimentar nuestros pensamientos para
                            proteger a los no semejantes"</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <video controls class="card video-top" src="./videos/375866894_988461419065507_5327278683268677532_n.mp4"></video>
                    <div class="card-body">
                        <h6 class="card-title">"La vida no es para llevar .... Es para comer aquí 🙌🏽👏🏽🔆 Vive,
                            goza, viaja, disfruta hoy 🎊"</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <video controls class="card video-top" src="./videos/naturaleza.mp4"></video>
                    <div class="card-body">
                        <h6 class="card-title">"La naturaleza es un paraiso a nuestro alcance, conectemonos mas a
                            ella ¡Experimenta y viviras mejor ..."</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fin seccion Videos -->
<!-- Inicio Seccion Experiencias -->
<section class="seccion-experiencias">
    <div class="container">
        <div class="row">
            <h2 class="title-videos">Testimonios</h2>
            <div class="col-lg-3 col-md-4 col-sm-2">
                <div class="card text-center">
                    <video controls class="card video-top" src="./videos/Experiencias.mp4"></video>
                    <div class="card-body">
                        <h6 class="card-title">"Quien mejor que una niña para contarnos desde su autenticidad lo que
                            fue para ella su expériencia en la #rutamican a mi me encantó, Y a ti ?? "</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fin Seccion Experiencias -->
<!-- Boton flotante de Whatsapp -->
<a href="https://wa.me/573232907739?text=Hola%20quiero%20explorar%20al%20extremo" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i></a>
<?php include './footer.html'; ?>