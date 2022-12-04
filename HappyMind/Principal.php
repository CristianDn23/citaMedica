<?php
require_once "mensaje.php";
?>

<!DOCTYPE html>
<html lang="es">
<!-- Icono de la pestaña -->
<link rel="icon" href="https://cloudfront-us-east-1.images.arcpublishing.com/infobae/W3GLPQVMJNALXDGKMMBO7PMEUY.jpg" type="image/jpg">
<!---->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HAPPYMIND</title>
  <!-- link de las redes sociales Font Asomeone -->
  <meta name="theme-color" content="#004483;" />
  <!-- link de los estilos individuales CSS -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <!-- Link de los estilos de las categorias -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/categorias-menu.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/body.css"/>
    <link rel="stylesheet" type="text/css" href="css/contacto.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <!--CDN SCRIPTS JS -->

    <!--FINAL CDN SCRIPTS JS -->
<!--PWA-->
    <link rel="manifest" href="./manifest.json"> 
    <!---PWA--->

    <!----METAS DE PWA-->
    <meta name="theme-color" content="#2F3BA2">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" type="image/png" href="./pwa/images/icons/icon-512x512.png">
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-512x512.png">
    <link rel="apple-touch-startup-image" href="./pwa/images/icons/icon-512x512.png">

    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-72x72.png" />
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-96x96.png" />
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-128x128.png" />
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-144x144.png" />
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-152x152.png" />
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-192x192.png" />
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-384x384.png" />
    <link rel="apple-touch-icon" href="./pwa/images/icons/icon-512x512.png" />
    <meta name="apple-mobile-web-app-status-bar" content="#db4938" />

  </head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

      <!-- MODAL-->
          <a href="#" class="btn-flotante" id="abrir">Tips Free Time <i class="fa fa-download" aria-hidden="true"></i></a>
          <section class="modal">
            <div class="modal-container">
              <img src="./img/modal.jpg" class="modal-img">
              <h2 class="modal-title">Bienvenidos a &copyHappy Mind</h2>
              <p class="modal-paragraph"></p>
              <a href="#" class="modal-close">Cerrar Modal</a>
            </div>
          </section>
      <!-- MODAL-->

 <!--BANNER - NAVIGATION-->
  <section id="banner" class="banner">
    <div class="bg-color">

      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="Principal.php"><img src="img/logoinit.png" class="img-responsive" style="width: 100%; margin-top: -25px;"> </a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">INICIO</a></li>
                <li class=""><a href="#noticia">NOTICIAS</a></li>
                <li class=""><a href="#teampsi">ESPECIALISTAS</a></li>
                <li class=""><a href="#contact">CONTACTO</a></li>
                <li class=""><a href="http://citamedica.test/">INGRESAR</a></li>
                <li class=""><a href="https://www.facebook.com/HappyMind-104181475789720" class="me-2 text-white"> <i class="fa fa-facebook"></i></a></li>
                <li class=""><a href="Youtube" class="me-2 text-white"> <i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <div class="container " >
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="img/logo.png" class="img-responsive">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Por que todos necesitamos nuestro espacio</h1>
              <p>"La terapia no consiste en llorar con el paciente. Se trata de dar calidez y esperanza" </p>
              <a href="#contact" class="btn btn-appoint">HABLEMOS</a>
            </div>
            <div class="overlay-detail text-center">
              <a href="#teampsi"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- PARA DAR EL EFECTO DE OLA DEBAJO DEL BANNER -->
      <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #e1dede;"></path>
            </svg>
          </div>
    </div>
  </section>
  <!--/ BANNER - NAVIGATION-->
<div id="Ficheros" style="background:#e1dede;">    
<div  class="animated contenedor-categoria-menu fadeIn" style="width:80%; margin: auto; font-family: 'Acme', sans-serif;">
 
 <div class="row d-flex justify-content-center flex-wrap">
    
    <div class="col-4 col-sm-4 col-md-4 col-lg-4 co-xl-3  text-center">
           <a  href="vistas/VDepresion/VDepresion.php"><img  src="img/2icon.png"></a>
           <p class="text-dark">Consejos Antidepresivos</p>
    </div><div class="col-4 col-sm-4 col-md-4 col-lg-4 co-xl-3 text-center">
           <a  href="vistas/VEstres/VEstres.php"><img  src="img/1icon.png"></a>
           <p class="text-dark">Tips Antiestres</p>
    </div><div class="col-4 col-sm-4 col-md-4 col-lg-4 co-xl-3  text-center">
           <a  href="vistas/VAnsiedad/VAnsiedad.php"><img  src="img/3icon.png"></a>
           <p class="text-dark">Consejos Antiansiedad</p>
    </div>
 </div>
</div>
</div>
<!-- Aminacion de conteo creciente -->
<div id="" class="" style="background:#e1dede;">
   <div class=" pt-5" style="width:100%; margin: auto;font-family: 'Acme', sans-serif;">
   <div id=""class="" data-parallax="scroll" style="border-top: 2px solid #fff;">
           
    <!-- Facts End -->
  
  <!--noticias-->
  <section id="noticia" class="section-padding">
    <div class="container">
      <h2 class="ser-title" style="color:black; font: weight 100%;">NOTICIAS</h2>
      <hr class="botm-line">
      <div class="row">
        <div class="schedule-tab">
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>Clasifican las secuelas neurológicas de la COVID-19</h3>
              <p>Las personas infectadas por el virus corren mayor riesgo de desarrollar una serie de afecciones neurológicas durante el primer año posterior a la infección, que van desde los accidentes cerebrovasculares a problemas cognitivos y de memoria, depresión, ansiedad o migrañas, según un nuevo estudio, publicado en la revista 'Nature Medicine'.</p>
              <p><a class="medi-info-btn" href="https://www.infosalus.com/salud-investigacion/noticia-clasifican-secuelas-neurologicas-covid-19-20220923082046.html">LEER MAS</a></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>Alzhéimer con más ansiedad y depresión durante la pandemia</h3>
              <p>Los marcadores de riesgo del alzhéimer, como la proteína beta amiloide o la neuroinflamación, están relacionados con el aumento de síntomas de ansiedad y depresión durante el confinamiento por la pandemia de coronavirus, según los resultados de un estudio..</p>
              <p><a class="medi-info-btn" href="https://www.65ymas.com/sociedad/identifican-vinculo-alzheimer-sintomas-ansiedad-depresion-pandemia_42868_102.html#:~:text=Durante%20la%20etapa%20precl%C3%ADnica%20del%20Alzheimer%2C%20se%20produce,que%20puede%20acelerar%20la%20progresi%C3%B3n%20de%20la%20enfermedad. ">LEER MAS</a></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>La pandemia por COVID-19 provoca un aumento del 25% en la prevalencia de la ansiedad y la depresión en todo el mundo</h3>
              <p> En el primer año de la pandemia por COVID-19, la prevalencia mundial de la ansiedad y la depresión aumentó un 25%, según un..</p>
              <p><a class="medi-info-btn" href="https://www.paho.org/es/noticias/2-3-2022-pandemia-por-covid-19-provoca-aumento-25-prevalencia-ansiedad-depresion-todo ">LEER MAS</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--cta-->

  <!--empresa--
  <section id="nosotros" class="section-padding">
  <section id="cta-2" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 style="size: 50px;"class="head-title lg-line">Happy Mind <br>Objetivo General</h2>
            <hr class="botm-line">
            <p class="sec-para">SER UN MEDIO DE CONFORT PARA LOS USUARIOS QUE NOS VISITEN, QUE ENCUENTREN LA ATENCIÓN NECESARIA A SU PROBLEMA</p>
            <a style="color: #0cb8b6; padding-top:10px;">Objetivos específicos -></a>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Eres importante para nosotros</h3>
                <p>Darte la asistencia especializada para poder sobrellevar tu depresión</p>
                <p>Que te sientas seguro en este lugar</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Punto a seguir</h3>
                <p>Conectarnos con el usuario para que nos diga, relate o pregunte algo que quiera saber referente al tema tratado</p>
                <p>Brindando asistencia, tratar que sobrelleven y mejoren al paso de las sessiones</p>
                <p>Construir una comunidad entre los usuarios, para que se apoyen emocionalmente entre ellos</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  </section>
  <--/ empresa-->

  <!--teampsi-->
  <section id="teampsi" class="section-padding">
    <section id="cta-1" class="section-padding">
      <div class="container">
        <h2 class="section-title white lg-line">« Nuestros Especialistas<br> Elige uno »</h2>
        <div class=" row">
          <div class="col-md-4 col-sm-4">
            <div class="testi"> <!-- Dialogo -->
              <p>“ La depresión es alimentada debido a heridas no curadas.”</p>
            </div>
            <div class="testi-inf"><!-- Referencia de img-->
              <a href="vistas/Psico1/psico1.html"><img src="img/sico.jpg" alt="" class="img-responsive"></a>
              <h3>Carmen<span>Sweet</span></h3> <!-- Nombre xd -->
            </div>
          </div>
            <div class="col-md-4 col-sm-4">
              <div class="testi"> <!-- Dialogo -->
                <p>“La felicidad de tu vida depende de la calidad de tus pensamientos.”</p>
              </div>
              <div class="testi-inf"><!-- Referencia de img-->
                <a href="vistas/Psico2/psico2.html"><img src="img/sico1.jpg" alt="" class="img-responsive"></a>
                <h3>Marco<span>Cook </span></h3> <!-- Nombre xd -->
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="testi"> <!-- Dialogo -->
                <p>“Cuanto más te conozcas a ti mismo, mayor paciencia tendrás por los otros.”</p>
              </div>
              <div class="testi-inf"><!-- Referencia de img-->
                <a href="vistas/Psico3/psico3.html"><img src="img/sico2.jpg" alt="" class="img-responsive"></a>
                <h3>Erik<span>Hendrikson</span></h3> <!-- Nombre xd -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </section>
  <!--teampsi-->

  <!--testimonial-->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">No confíes solo en nuestra palabra</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>“Nuestra guerra es la guerra espiritual, nuestra gran depresión es nuestra vida. Crecimos con la televisión que nos hizo creer que algún día seríamos millonarios, dioses del cine, o estrellas del rock. Pero no lo seremos, y poco a poco lo entendemos, lo que hace que estemos muy cabreados.”</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a ><img src="img/brad_pitt.jpg" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Brad<span>Pitt</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>“Cuando aprendemos a aceptar con paciencia las dificultades, el verdadero problema desaparece. Por ejemplo, imaginemos que padecemos una enfermedad física dolorosa. Si encontramos una manera de aceptar el dolor, por ejemplo, pensando que esta es una forma de consumir el karma negativo, nuestra mente permanecerá serena aunque sintamos dolor en el...”</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a ><img src="img/geshe-kelsang.jpg" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Gueshe<span>Kelsang</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>“De vez en cuando a todos se nos cae la vida, y eso no es tan malo, a veces es necesario. A veces es necesario que se rompa en mil trozos para que, en el momento de recogerlos, sepamos cuántos debemos dejar en el suelo, abandonados.”</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a ><img src="img/eloy_moreno.jpg" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Eloy<span>Moreno</span></h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ testimonial-->

  <!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">CONTACTO</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Información</h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Jose Pardo<br> Chimbote, N°23 Lt.8</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>HappyMindAsoc@gmail.com</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+51 954 947 785</p>
        </div>

        <!--FORMULARIO ENVIA AL CORREO-->
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Llena tus datos para mantenernos en contacto<br> y continuar con el seguimiento</h3>
            <div class="space"></div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="https://formsubmit.co/HappyMindAsoc@gmail.com" method="post" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Ingresar nombre " />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Correo Electronico" data-rule="email" data-msg="Ingresar @email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control br-radius-zero" name="asunto" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Ingresar asunto " />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control br-radius-zero" name="mensaje" rows="5" data-rule="required" data-msg="Ingresar lo que sucede" placeholder="Cuentanos..."></textarea>
                <div class="validation"></div>
              </div>

              <div class="form-action">
                <button type="submit" class="btn btn-form">Enviar Mensaje</button>
              </div>



        <?php
        $envio = new ControladorMensaje();
        $envio -> ctrEnvio();
       


        ?>






            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->

  <!--footer-->
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding"><a class="navbar-brand" href="Principal.php"><img src="img/logo.png" class="img-responsive" style="width: 100%; margin-top: -25px;"></a></h4>
            </div>
            <div class="info-sec1">
              <p>Comunidad dedicada a escucharte</p><p>Y brindarte su atención </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Saltos de Pagina</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="#banner"><i class="fa fa-circle"></i>Inicio</a></li>
                <li><a href="#noticia"><i class="fa fa-circle"></i>Noticias</a></li>
                <li><a href="#teampsi"><i class="fa fa-circle"></i>Especialistas</a></li>
                <li><a href="#testimonial"><i class="fa fa-circle"></i>Testimonios</a></li>
                <li><a href="#contact"><i class="fa fa-circle"></i>Contacto</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Siguemos</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue" ><i class="fa fa-facebook"></i></li>
                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            © Copyright Happy Mind Theme. All Rights Reserved
            <div class="credits">
          
              Designed by HappyMindCorporation.com</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->
  <!--/ REVISAR ESTO MAS TARDE-->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="js/modal.js"></script>
  <script src="js/jquery.min.js"></script>
  <script>src="js/header.js"</script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <!--<script src="contactform/contactform.js"></script>-->
  <script src="./regist_serviceWorker.js"></script> 
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
  