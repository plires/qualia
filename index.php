<?php include('includes/config.inc.php'); ?>

<?php require ('includes/capture-variables-get.php'); ?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="S2D Emprendimientos Inmobiliarios SRL nace en respuesta a las nuevas necesidades y posibilidades del mercado, ofreciendo el más alto nivel en innovación y estrategia inmobiliarios de primera calidad.">

    <!-- Favicons -->
    <?php include('includes/favicon.php'); ?>

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./node_modules/aos/dist/aos.css">
    <link rel="stylesheet" href="./node_modules/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="./node_modules/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="./css/app.css">

    <title>S2D Emprendimientos Inmobiliarios</title>
  </head>
  <body>

    <!-- Header -->
    <header class="container-fluid transition">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="content_mobile">
              <img class="logo transition" class="img-fluid" src="#" alt="logo qualia">
              <div class="transition" id="toggleIcon">
                <i id="hamburger" class="transition fas fa-bars"></i>
              </div>
            </div>

            <nav class="transition" id="menu">
              <ul>
                <li><a class="transition btn_to" href="#nosotros">NOSOTROS</a></li>
                <li><a class="transition btn_to" href="#proyectos">PROYECTOS</a></li>
                <li><a class="transition btn_to" href="#contacto">CONTACTO</a></li>
              </ul>
            </nav>

          </div>
        </div>
      </div>
    </header>
    <!-- Header end -->

    <!-- Slides -->
    <section class="container-fluid slides_home p-0">

      <div id="carouselHomeControls" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselHomeControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselHomeControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselHomeControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">

          <div id="slide_a" class="carousel-item active">
            <div data-aos="fade-up" class="content">
              <h1>TUS SUEÑOS, TU LUGAR, TU DEPARTAMENTO.</h1>
            </div>
          </div>

          <div id="slide_b" class="carousel-item">
            <div class="content">
              <h2>TUS SUEÑOS, TU LUGAR, TU DEPARTAMENTO.</h2>
            </div>
          </div>

          <div id="slide_c" class="carousel-item">
            <div class="content">
              <h2>TUS SUEÑOS, TU LUGAR, TU DEPARTAMENTO.</h2>
            </div>
          </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHomeControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselHomeControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>
            
    </section>
    <!-- Slides end -->

    <!-- Nosotros -->
    <section id="nosotros" class="container nosotros">
      
      <div data-aos="fade-up" class="row">
        <div class="col-md-12">
          <h2>NOSOTROS</h2>
          <p>
            S2D Emprendimientos Inmobiliarios SRL nace en respuesta a las nuevas necesidades y posibilidades del mercado, <span class="bold">ofreciendo el más alto nivel en innovación y estrategia inmobiliarios de primera calidad.</span>
          </p>
          <p>
            Creada por un grupo de profesionales arquitectos, emprendedores, abogados y contadores quienes se consolidaron como una de las desarrolladoras de mayor proyección, pasando de desarrollar 1.300 metros cuadrados a mas de 10.000 metros cuadrados en los últimos años.
          </p>

          <div class="separator"></div>

        </div>
      </div>

      <div data-aos="fade-up" class="row text-center equipo">

        <div class="col-6 col-md-3">
          <h3>NUESTRO <br>EQUIPO</h3>
        </div>

        <div class="col-6 col-md-3">
          <img class="img-fluid" src="./img/savini.png" alt="logo savini">
        </div>

        <div class="col-6 col-md-3">
          <img class="img-fluid" src="./img/konstru.png" alt="logo konstru">
        </div>

        <div class="col-6 col-md-3">
          <img class="img-fluid" src="./img/bccb.png" alt="logo bccb">
        </div>

      </div>

    </section>
    <!-- Nosotros end -->

    <!-- Iconos -->
    <section class="container-fluid iconos p-0">

      <div class="onda"></div>

      <div class="bg_black">
        <div class="container">

          <div class="row">

            <div data-aos="fade-up" data-aos-delay="50" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/arquitectura.png" alt="icono arquitectura">
                <h4>Arquitectura</h4>
              </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="100" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/diseno-exterior.png" alt="icono diseno exterior">
                <h4>Diseño Exterior</h4>
              </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="150" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/diseno-futurista.png" alt="icono diseno futurista">
                <h4>Diseño Futurista</h4>
              </div>
            </div>

          </div>

          <div class="row last">

            <div data-aos="fade-up" data-aos-delay="200" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/diseno-paisaje.png" alt="icono diseno paisaje">
                <h4>Diseño de Paisaje</h4>
              </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="250" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/planificacion.png" alt="icono planificacion del sitio">
                <h4>Planificación del sitio</h4>
              </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="300" class="col-md-4">
              <div class="content">
                <img class="img-fluid" src="./img/diseno-interior.png" alt="icono diseno interior">
                <h4>Diseño Interior</h4>
              </div>
            </div>

          </div>

        </div>
        
      </div>
      
    </section>
    <!-- Iconos end -->

    <!-- Proyectos -->
    <section id="proyectos" class="container-fluid proyectos">

      <div data-aos="fade-up" class="row">
        <div class="col-md-12">
          <h2>PROYECTOS</h2>
        </div>
      </div>

      <div class="row">
        <div data-aos="fade-up" data-aos-delay="50" class="col-md-4 col-lg-2 offset-lg-1">
          <img class="img-fluid" src="./img/proyecto-belgrano.jpg" alt="proyecto belgrano">
          <div class="content">
            <img class="img-fluid logo_proyecto" src="./img/qualia-belgrano.png" alt="qualia belgrano">
            <a class="transition" href="#">VER MÁS</a>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-delay="100" class="col-md-4 col-lg-2">
          <img class="img-fluid" src="./img/proyecto-coghlan.jpg" alt="proyecto coghlan">
          <div class="content">
            <img class="img-fluid logo_proyecto" src="./img/qualia-coghlan.png" alt="qualia coghlan">
            <a class="transition" href="#">VER MÁS</a>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-delay="150" class="col-md-4 col-lg-2">
          <img class="img-fluid" src="./img/proyecto-caballito.jpg" alt="proyecto caballito">
          <div class="content">
            <img class="img-fluid logo_proyecto" src="./img/qualia-caballito.png" alt="qualia caballito">
            <a class="transition" href="#">VER MÁS</a>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-delay="200" class="col-md-4 col-lg-2 proximamente">
          <img class="img-fluid" src="./img/proximamente-a.jpg" alt="proyecto proximamente a">
          <div class="content">
            <p>PRÓXIMAMENTE</p>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-delay="250" class="col-md-4 col-lg-2 proximamente">
          <img class="img-fluid" src="./img/proximamente-b.jpg" alt="proyecto proximamente b">
          <div class="content">
            <p>PRÓXIMAMENTE</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Proyectos end -->

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
            ¿ESTÁS LISTO <br>
            PARA MUDARTE <br>
            AL DEPARTAMENTO <br>
            DE TUS SUEÑOS?
          </p>  
        </div>

        <div data-aos="fade-up" class="col-md-6">
          <form id="form_contacto"  action="./php/validate-form-contacto.php" method="post">

            <input type="hidden" name="origin" value="Formulario de Contactos">

            <div id="sending_form" class="transition">
              <div class="spinner-border text-warning" role="status">
                <span class="visually-hidden">Enviando...</span>
              </div>
            </div>

            <!-- Nombre -->
            <div class="mb-3">
              <label for="name" class="form-label">Nombre Completo</label>
              <input type="text" class="form-control" name="name" value="<?= $name ?>">
            </div>
            <!-- Nombre end -->

            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" value="<?= $email ?>">
            </div>
            <!-- Email end -->

            <!-- Telefono -->
            <div class="mb-3">
              <label for="phone" class="form-label">Telefono</label>
              <input type="text" class="form-control" name="phone" value="<?= $phone ?>">
            </div>
            <!-- Telefono end -->

            <!-- Comentarios -->
            <div class="mb-3">
              <label for="comments" class="form-label">Tu consulta</label>
              <textarea class="form-control" name="comments" rows="3"></textarea>
            </div>
            <!-- Comentarios end -->

            <div class="mb-3 form-check">
              <input checked type="checkbox" class="form-check-input" name="newsletter">
              <label class="form-check-label" for="newsletter">suscribe newsletter</label>
            </div>

            <div class="text-center">
              <button 
                id="send" 
                class="btn btn-primary" 
                type="button" 
                onclick="submitFormContacto('form_contacto')">ENVIAR
              </button>
            </div>

          </form>  
        </div>

      </div>
    </section>
    <!-- Contacto end -->

    <!-- Footer -->
    <footer class="container-fluid">
      <div class="container">
        <div class="row">

          <div class="col-md-4 logos">
            <div class="content">
              <img src="./img/globo-remax.png" alt="globo remax">
              <div class="datos">
                <p>
                  <span>Comercializa:</span> <br>
                  MIRTA BARRUTI <br>
                  Agente de
                </p>
                <img src="./img/logo-remax.png" alt="logo remax">
              </div>
            </div>
          </div>

          <div class="col-md-4 info">
            <p>
              tel.: 4802-2427   |   mbarruti@remax.com.ar <br>
              Av. Las Heras N°3739
            </p>
            <div class="redes">
              <a class="transition" target="_blank" rel="noopener noreferrer" href="<?= WHATSAPP ?>">
                <img class="transition img-fluid" src="./img/whatsapp.png" alt="whatsapp footer">
              </a>
              <a class="transition" target="_blank" rel="noopener noreferrer" href="<?= INSTAGRAM ?>">
                <img class="transition img-fluid" src="./img/instagram.png" alt="instagram footer">
              <a class="transition" target="_blank" rel="noopener noreferrer" href="<?= FACEBOOK ?>">
                <img class="transition img-fluid" src="./img/facebook.png" alt="facebook footer">
              </a>
            </div>
          </div>

          <div class="col-md-4 s2d">
            <img class="transition img-fluid" src="./img/logo-footer.png" alt="logo qualia footer">
          </div>

        </div>
      </div>
    </footer>
    <!-- Footer end -->

    <script src="./node_modules/jquery/dist/jquery.min.js" ></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
    <script src="./node_modules/aos/dist/aos.js"></script>
    <script src="./node_modules/jquery.easing/jquery.easing.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
    <script src="./node_modules/slick-carousel/slick/slick.js"></script>
    <script type="text/javascript" src="./js/contactos.js"></script>
    <script src="./js/app.js"></script>

  </body>
</html>