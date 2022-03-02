<?php include('includes/config.inc.php'); ?>

<?php require ('includes/capture-variables-get.php'); ?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="S2D Emprendimientos Inmobiliarios SRL nace en respuesta a las nuevas necesidades y posibilidades del mercado, ofreciendo el más alto nivel en innovación y estrategia inmobiliarios de primera calidad. Proyecto Coghlan">

    <!-- Favicons -->
    <?php include('includes/favicon.php'); ?>

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./node_modules/aos/dist/aos.css">
    <link rel="stylesheet" href="./node_modules/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="./node_modules/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="./css/app.css">

    <title>S2D Emprendimientos Inmobiliarios - Proyecto Coghlan</title>
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
        </div>

        <div class="carousel-inner">

          <div id="slide_a_coghlan" class="carousel-item active">
            <div data-aos="fade-up" class="content">
              <img src="./img/coghlan/logo-qualia-coghlan.png" alt="logo qualia coghlan a">
              <h1>QUALIA LIVE II COGHLAN</h1>
              <p>DEPARTAMENTOS DE 1 Y 2 AMBIENTES EN UNO DE LOS BARRIOS DE MAYOR CRECIMIENTO.</p>
            </div>
          </div>

          <div id="slide_b_coghlan" class="carousel-item">
            <div class="content">
              <img src="./img/coghlan/logo-qualia-coghlan.png" alt="logo qualia coghlan b">
              <h2>QUALIA LIVE II COGHLAN</h2>
              <p>DEPARTAMENTOS DE 1 Y 2 AMBIENTES EN UNO DE LOS BARRIOS DE MAYOR CRECIMIENTO.</p>
            </div>
          </div>

          <div id="slide_c_coghlan" class="carousel-item">
            <div class="content">
              <img src="./img/coghlan/logo-qualia-coghlan.png" alt="logo qualia coghlan d">
              <h2>QUALIA LIVE II COGHLAN</h2>
              <p>DEPARTAMENTOS DE 1 Y 2 AMBIENTES EN UNO DE LOS BARRIOS DE MAYOR CRECIMIENTO.</p>
            </div>
          </div>

          <div id="slide_d_coghlan" class="carousel-item">
            <div class="content">
              <img src="./img/coghlan/logo-qualia-coghlan.png" alt="logo qualia coghlan e">
              <h2>QUALIA LIVE II COGHLAN</h2>
              <p>DEPARTAMENTOS DE 1 Y 2 AMBIENTES EN UNO DE LOS BARRIOS DE MAYOR CRECIMIENTO.</p>
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

            <input type="hidden" name="origin" value="Formulario de Contactos Coghlan">

            <!-- Footer -->
            <?php require ('partials/partial-form.php'); ?>
              
        </div>

      </div>
    </section>
    <!-- Contacto end -->

    <!-- Info -->
    <section class="container-fluid iconos info_belgrano info_coghlan info p-0">

      <div class="onda onda_belgrano"></div>

      <div class="bg_black bg_belgrano">
        <div class="container">

          <div class="row">

            <div data-aos="fade-up"class="col-md-8 offset-md-2">
              <p>
                Un nuevo proyecto ubicado en el corazón de Coghlan, un barrio que es tendencia y está en constante crecimiento.
              </p>

              <p>
                El mismo contará con un edificio premium construido con terminaciones de categoría. Unidades de máximo confort, diseño inteligente e innovador.
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
              <iframe src="https://www.youtube.com/embed/ybrW02Iz7xA?rel=0" title="Proyecto Coghlan" allowfullscreen></iframe>
            </div>    
          </div>

        </div>

      </div>
      
    </section>
    <!-- Video end -->

    <!-- Galeria -->
    <?php include('./includes/galeria-coghlan.php'); ?>

    <!-- Iconos Coghlan -->
    <section class="container-fluid iconos iconos_belgrano p-0">

      <div class="bg_belgrano">
        <div class="container">

          <div class="row">

            <div data-aos="fade-up" class="col-md-4 offset-md-2">
              <div class="content">
                <img class="img-fluid" src="./img/coghlan/pisos.png" alt="icono pisos">
                <h4>9 Pisos</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/coghlan/sum.png" alt="icono SUM con parrilla">
                <h4>SUM con parrilla</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4 offset-md-2">
              <div class="content">
                <img class="img-fluid" src="./img/coghlan/unidades.png" alt="icono 34 unidades funcionales">
                <h4>34 unidades funcionales</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/coghlan/cocheras.png" alt="icono Cocheras Fijas">
                <h4>Cocheras Fijas</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4 offset-md-2">
              <div class="content">
                <img class="img-fluid" src="./img/coghlan/departamentos.png" alt="icono departamentos">
                <h4>Deptos  1 y 2 ambientes</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/coghlan/guarda-bicicletas.png" alt="icono guarda bicicletas">
                <h4>Guarda bicicletas / patinetas</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4 offset-md-2">
              <div class="content">
                <img class="img-fluid" src="./img/coghlan/apto-profesional.png" alt="icono Apto Profesional">
                <h4>Apto Profesional</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/coghlan/lockers.png" alt="icono Lockers app">
                <h4>Lockers app</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4 offset-md-2">
              <div class="content">
                <img class="img-fluid" src="./img/coghlan/piscina.png" alt="icono Apto Piscina">
                <h4>Piscina</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/coghlan/electrogeno.png" alt="icono Grupo Electrógeno">
                <h4>Grupo Electrógeno</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4 offset-md-2">
              <div class="content">
                <img class="img-fluid" src="./img/coghlan/solarium.png" alt="icono Apto Solárium">
                <h4>Solárium</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/coghlan/portero-visor.png" alt="icono Portero Visor">
                <h4>Portero Visor</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4 offset-md-2">
              <div class="content last">
                <img class="img-fluid" src="./img/coghlan/gym.png" alt="icono Apto Gym">
                <h4>Gym</h4>
              </div>
            </div>

            <div data-aos="fade-up" class="col-md-4">
              <div class="content last">
                <img class="img-fluid" src="./img/coghlan/seguridad.png" alt="icono Seguridad">
                <h4>Seguridad</h4>
              </div>
            </div>

          </div>

        </div>
        
      </div>
      
    </section>
    <!-- Iconos Coghlan end -->

    <!-- Planos -->
    <?php include('./includes/planos-coghlan.php'); ?>

    <!-- Materiales -->
    <section data-aos="fade-up"  class="materiales container-fluid p-0">
      <img class="img-fluid" src="./img/back-materiales.jpg" alt="background materiales">
      <div class="data h-100">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-md-12 h-100 content">
              <div class="text-center h-100">
                <div class="marco">
                  <h4>CONOCÉ ACÁ TODOS NUESTROS <br>MATERIALES Y TERMINACIONES</h4>
                </div>
                <img class="img-fluid" src="./img/marcas.png" alt="marcas materiales">
                <a target="_blank" rel="noopener noreferrer" href="./pdf/coghlan.pdf" class="btn btn-primary" type="button">DESCARGAR PDF</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Materiales end -->

    <!-- Mapa -->
    <section data-aos="fade-up"  class="mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.765086478574!2d-58.47278538477148!3d-34.55950278047083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb686ecc80d33%3A0x18ddac469bca2a6c!2sAv.%20Congreso%203233%2C%20C1428BWA%20CABA!5e0!3m2!1ses-419!2sar!4v1639580106319!5m2!1ses-419!2sar" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <!-- Mapa end -->

    <!-- Historicas -->
    <section class="container-fluid historicas">

      <div class="row">

        <div data-aos="fade-up" data-aos-delay="50" class="col-md-4 col-lg-2 offset-lg-1">
          <img class="img-fluid" src="./img/coghlan/historica-a.jpg" alt="proyecto historico belgrano a">
        </div>

        <div data-aos="fade-up" data-aos-delay="150" class="col-md-4 col-lg-2">
          <img class="img-fluid" src="./img/coghlan/historica-b.jpg" alt="proyecto historico belgrano b">
        </div>

        <div data-aos="fade-up" data-aos-delay="200" class="col-md-4 col-lg-2">
          <img class="img-fluid" src="./img/coghlan/historica-c.jpg" alt="proyecto historico belgrano c">
        </div>

        <div data-aos="fade-up" data-aos-delay="250" class="col-md-4 col-lg-2">
          <img class="img-fluid last" src="./img/coghlan/historica-d.jpg" alt="proyecto historico belgrano d">
        </div>

        <div data-aos="fade-up" data-aos-delay="300" class="col-md-4 col-lg-2">
          <img class="img-fluid last" src="./img/coghlan/historica-e.jpg" alt="proyecto historico belgrano e">
        </div>
       
      </div>
    </section>
    <!-- Historicas end -->

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