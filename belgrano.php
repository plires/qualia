<?php include('includes/config.inc.php'); ?>

<?php require ('includes/capture-variables-get.php'); ?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Pixel Facebook -->
    <?php include('includes/pixel-facebook.php'); ?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="S2D Emprendimientos Inmobiliarios SRL nace en respuesta a las nuevas necesidades y posibilidades del mercado, ofreciendo el más alto nivel en innovación y estrategia inmobiliarios de primera calidad. Proyecto Belgrano">

    <!-- Favicons -->
    <?php include('includes/favicon.php'); ?>

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./node_modules/aos/dist/aos.css">
    <link rel="stylesheet" href="./node_modules/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="./node_modules/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="./css/app.css">

    <title>S2D Emprendimientos Inmobiliarios - Proyecto Belgrano</title>
  </head>
  <body>

    <!-- Header -->
    <header class="container-fluid transition">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="content_mobile">
              <a href="./">
                <img class="logo transition" class="img-fluid" src="#" alt="logo qualia">
              </a>
              <div class="transition" id="toggleIcon">
                <i id="hamburger" class="transition fas fa-bars"></i>
              </div>
            </div>

            <nav class="transition" id="menu">
              <ul>
                <li><a class="transition" href="./index.php#nosotros">NOSOTROS</a></li>
                <li><a class="transition" href="./index.php#proyectos">PROYECTOS</a></li>
                <li><a class="transition btn_to" href="./index.php#contacto">CONTACTO</a></li>
              </ul>
            </nav>

          </div>
        </div>
      </div>
    </header>
    <!-- Header end -->

    <!-- Whatsapp -->
    <?php include('includes/whatsapp.php'); ?>

    <!-- Slides -->
    <section class="container-fluid slides_home slides_belgrano p-0">

      <div id="carouselProjectControls" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselProjectControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselProjectControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselProjectControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselProjectControls" data-bs-slide-to="3" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselProjectControls" data-bs-slide-to="4" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">

          <div id="slide_a_belgrano" class="carousel-item active">
            <div data-aos="fade-up" class="content">
              <h1>QUALIA LIVE I BELGRANO</h1>
              <p>DESARROLLO PREMIUM CON DEPARTAMENTOS DE 1, 2 Y 3 AMBIENTES.</p>
            </div>
          </div>

          <div id="slide_b_belgrano" class="carousel-item">
            <div class="content">
              <h2>QUALIA LIVE I BELGRANO</h2>
              <p>DESARROLLO PREMIUM CON DEPARTAMENTOS DE 1, 2 Y 3 AMBIENTES.</p>
            </div>
          </div>

          <div id="slide_c_belgrano" class="carousel-item">
            <div class="content">
              <h2>QUALIA LIVE I BELGRANO</h2>
              <p>DESARROLLO PREMIUM CON DEPARTAMENTOS DE 1, 2 Y 3 AMBIENTES.</p>
            </div>
          </div>

          <div id="slide_d_belgrano" class="carousel-item">
            <div class="content">
              <h2>QUALIA LIVE I BELGRANO</h2>
              <p>DESARROLLO PREMIUM CON DEPARTAMENTOS DE 1, 2 Y 3 AMBIENTES.</p>
            </div>
          </div>

          <div id="slide_e_belgrano" class="carousel-item">
            <div class="content">
              <h2>QUALIA LIVE I BELGRANO</h2>
              <p>DESARROLLO PREMIUM CON DEPARTAMENTOS DE 1, 2 Y 3 AMBIENTES.</p>
            </div>
          </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProjectControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselProjectControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>
            
    </section>
    <!-- Slides end -->

    <!-- Contacto -->
    <section id="contacto" class="container contacto">

      <div class="row">
        <div class="col-md-12">
          <div id="notifications" class="row">
            <div class="com-md-12">
              <?php include_once("./includes/msg-exito.php"); ?>
            </div>

            <div class="com-md-12">
              <?php include_once("./includes/errors.php"); ?>
            </div>
          </div>
        </div>  
      </div>

      <div class="row">

        <div data-aos-delay="150" data-aos="fade-up" class="col-md-6 datos">
          <p>
            CUALQUIER CONSULTA O DUDAS TE PEDIMOS POR FAVOR QUE NOS ENVÍES UN MENSAJE A NUESTRA COMERCIALIZADORA DE REMAX PREMIUM.
          </p>  
        </div>

        <div data-aos="fade-up" class="col-md-6">
          <form id="form_contacto"  action="./php/validate-form-contacto.php" method="post">

            <input type="hidden" name="origin" value="Formulario de Contactos Belgrano">

            <!-- Footer -->
            <?php require ('partials/partial-form.php'); ?>
              
        </div>

      </div>
    </section>
    <!-- Contacto end -->

    <!-- Info -->
    <section class="container-fluid iconos info_belgrano info p-0">

      <div class="bg_black bg_belgrano">
        <div class="container">

          <div class="row">

            <div data-aos="fade-up"class="col-md-8 offset-md-2">
              <p>
                Un nuevo proyecto ubicado en el corazón de Belgrano que contará con un edificio premium construido con terminaciones de categoría.
              </p>

              <p>
                Unidades de máximo confort, diseño inteligente e innovador. Balcones aterrazados con vista abierta a la ciudad y apto profesional.
              </p>    
            </div>

          </div>

        </div>
        
      </div>
      
    </section>
    <!-- Info end -->

    <!-- Video -->
    <section class="container-fluid video p-0 bg_video">

      <div class="container">

        <div class="row">

          <div data-aos="fade-up"class="col-md-8 offset-md-2">
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/0zHV8S3__VA?rel=0" title="Proyecto Belgrano" allowfullscreen></iframe>
            </div>    
          </div>

        </div>

      </div>
      
    </section>
    <!-- Video end -->

    <!-- Galeria -->
    <?php include('./includes/galeria-belgrano.php'); ?>

    <!-- Iconos Belgrano -->
    <section class="container-fluid iconos iconos_belgrano p-0">

      <div class="bg_belgrano">
        <div class="container">

          <div class="row">

            <div data-aos="fade-up" class="col-md-4 offset-md-2">
              <div class="content">
                <img class="img-fluid" src="./img/belgrano/pisos.png" alt="icono pisos">
                <h4>12 Pisos</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/belgrano/sum.png" alt="icono SUM con parrilla">
                <h4>SUM con parrilla</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4 offset-md-2">
              <div class="content">
                <img class="img-fluid" src="./img/belgrano/unidades.png" alt="icono 31 unidades funcionales">
                <h4>31 unidades funcionales</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/belgrano/local.png" alt="icono Local">
                <h4>Local</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4 offset-md-2">
              <div class="content">
                <img class="img-fluid" src="./img/belgrano/departamentos.png" alt="icono departamentos">
                <h4>Deptos  1, 2 y 3 ambientes</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/belgrano/guardabicicletas.png" alt="icono guardabicicletas">
                <h4>Guarda bicicletas / patinetas</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4 offset-md-2">
              <div class="content">
                <img class="img-fluid" src="./img/belgrano/apto-profesional.png" alt="icono Apto Profesional">
                <h4>Apto Profesional</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/belgrano/lockers.png" alt="icono Lockers app">
                <h4>Lockers app</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4 offset-md-2">
              <div class="content">
                <img class="img-fluid" src="./img/belgrano/pisina.png" alt="icono Apto Piscina">
                <h4>Piscina</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/belgrano/electrogeno.png" alt="icono Grupo Electrógeno">
                <h4>Grupo Electrógeno</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4 offset-md-2">
              <div class="content">
                <img class="img-fluid" src="./img/belgrano/solarium.png" alt="icono Apto Solárium">
                <h4>Solárium</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/belgrano/portero-visor.png" alt="icono Portero Visor">
                <h4>Portero Visor</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4 offset-md-2">
              <div class="content">
                <img class="img-fluid" src="./img/belgrano/gym.png" alt="icono Apto Gym">
                <h4>Gym</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/belgrano/movilidad-reducida.png" alt="icono Apto Movilidad Reducida">
                <h4>Apto Movilidad Reducida</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4 offset-md-2">
              <div class="content last">
                <img class="img-fluid" src="./img/belgrano/pet-friendly.png" alt="icono Pet Friendly">
                <h4>Pet Friendly</h4>
              </div>
            </div>

          </div>

        </div>
        
      </div>
      
    </section>
    <!-- Iconos Belgrano end -->

    <!-- Planos -->
    <?php include('./includes/planos-belgrano.php'); ?>

    <!-- Mapa -->
    <section data-aos="fade-up" class="mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3285.786649448751!2d-58.4690699!3d-34.5589569!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb6814bd910bd%3A0x123d21e07b099c5f!2sAv.%20Congreso%203012%2C%20C1428BVX%20CABA!5e0!3m2!1ses-419!2sar!4v1639499254628!5m2!1ses-419!2sar" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <!-- Mapa end -->

    <!-- Footer -->
    <?php require ('includes/footer.php'); ?>

    <script src="./node_modules/jquery/dist/jquery.min.js" ></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
    <script src="./node_modules/aos/dist/aos.js"></script>
    <script src="./node_modules/jquery.easing/jquery.easing.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
    <script src="./node_modules/slick-carousel/slick/slick.js"></script>
    <script type="text/javascript" src="./js/galeria.js"></script>
    <script type="text/javascript" src="./js/contactos.js"></script>
    <script src="./js/app.js"></script>

  </body>
</html>