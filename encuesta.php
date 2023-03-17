<!DOCTYPE html>
<html lang="en">
<?php 
include("registrar.php");
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rox - Encuesta</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html"><img src="assets/img/rox_logo.png" class="img-fluid" alt="" style="float: left;"></a></h1>

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Counts Section ======= -->

    <section class="inner-page"style="margin: top 3%;">
      <div class="container" style="margin: top 3%;">
      <div class="section-title">
              <h2>Encuesta</h2>
              <p>Encuesta de satisfacción al cliente</p><br>
              <h5>Valore del 1 a 4 las siguientes preguntas. Cada valor representa lo siguiente: 1. Deficiente / 2. Regular / 3. Bueno / 4. Muy bueno</h5>
            </div>
    
        <div class="col-lg-8 mt-5 mt-lg-0">

          <form method="post">
            <div class="row">
              <div class="col-md-6 form-group">
                <input class="form-control" type="text" name="name" placeholder="Nombre completo" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input class="form-control" type="empresa" name="empresa" placeholder="Empresa" required>
              </div>
            </div><br>

    <div class="col-lg-8 mt-5 mt-lg-0">
        <h5>1. Calidad del servicio entregado</h5>
        <input type = "radio" name = "preg1" value = "uno" /> 1
        <input type = "radio" name = "preg1" value = "dos" /> 2
        <input type = "radio" name = "preg1" value = "tres" /> 3
        <input type = "radio" name = "preg1" value = "cuatro" /> 4
    </div><br>
 
    <div class="col-lg-8 mt-5 mt-lg-0">
        <h5>2. Grado de cumplimiento de los términos del contrato</h5>
        <input type = "radio" name = "preg2" value = "uno" /> 1
        <input type = "radio" name = "preg2" value = "dos" /> 2
        <input type = "radio" name = "preg2" value = "tres" /> 3
        <input type = "radio" name = "preg2" value = "cuatro" /> 4
    </div><br>
 
    <div class="col-lg-8 mt-5 mt-lg-0">
        <h5>3. Grado de cumplimiento de los plazos de entrega</h5>
        <input type = "radio" name = "preg3" value = "uno" /> 1
        <input type = "radio" name = "preg3" value = "dos" /> 2
        <input type = "radio" name = "preg3" value = "tres" /> 3
        <input type = "radio" name = "preg3" value = "cuatro" /> 4
    </div><br>

      <div class="col-lg-8 mt-5 mt-lg-0">
        <h5>4. Cumplimiento de las normas de seguridad</h5>
        <input type = "radio" name = "preg4" value = "uno" /> 1
        <input type = "radio" name = "preg4" value = "dos" /> 2
        <input type = "radio" name = "preg4" value = "tres" /> 3
        <input type = "radio" name = "preg4" value = "cuatro" /> 4
    </div><br>
      
    <div class="col-lg-8 mt-5 mt-lg-0">
        <h5>5. Cumplimiento de normas ambientales</h5>
        <input type = "radio" name = "preg5" value = "uno" /> 1
        <input type = "radio" name = "preg5" value = "dos" /> 2
        <input type = "radio" name = "preg5" value = "tres" /> 3
        <input type = "radio" name = "preg5" value = "cuatro" /> 4
    </div><br>

    <div class="col-lg-8 mt-5 mt-lg-0">
        <h5>6. Puntualidad y orden del equipo de trabajo</h5>     
        <input type = "radio" name = "preg6" value = "uno" /> 1
        <input type = "radio" name = "preg6" value = "dos" /> 2
        <input type = "radio" name = "preg6" value = "tres" /> 3
        <input type = "radio" name = "preg6" value = "cuatro" /> 4
    </div><br>

    <div class="col-lg-8 mt-5 mt-lg-0">
        <h5>7. Capacidad y rapidez de respuesta ante incidencias</h5>
        <input type = "radio" name = "preg7" value = "uno" /> 1
        <input type = "radio" name = "preg7" value = "dos" /> 2
        <input type = "radio" name = "preg7" value = "tres" /> 3
        <input type = "radio" name = "preg7" value = "cuatro" /> 4
    </div><br>

    <div class="col-lg-8 mt-5 mt-lg-0">
        <h5>8. Resolución de requerimientos</h5>
        <input type = "radio" name = "preg8" value = "uno" /> 1
        <input type = "radio" name = "preg8" value = "dos" /> 2
        <input type = "radio" name = "preg8" value = "tres" /> 3
        <input type = "radio" name = "preg8" value = "cuatro" /> 4
    </div><br>

    <div class="col-lg-8 mt-5 mt-lg-0">
        <h5>9. Entrega oportuna de información</h5>
        <input type = "radio" name = "preg9" value = "uno" /> 1
        <input type = "radio" name = "preg9" value = "dos" /> 2
        <input type = "radio" name = "preg9" value = "tres" /> 3
        <input type = "radio" name = "preg9" value = "cuatro" /> 4
    </div><br>

    <div class="col-lg-8 mt-5 mt-lg-0">
        <h5>10. Comunicación clara y concisa, resguardando la integridad de la empresa y la cordialidad</h5>
        <input type = "radio" name = "preg10" value = "uno" /> 1
        <input type = "radio" name = "preg10" value = "dos" /> 2
        <input type = "radio" name = "preg10" value = "tres" /> 3
        <input type = "radio" name = "preg10" value = "cuatro" /> 4
    </div><br>

    <div class="col-lg-8 mt-5 mt-lg-0">
        <h5>11. Eficiencia en la atención administrativa y técnica</h5>
        <input type = "radio" name = "preg11" value = "uno" /> 1
        <input type = "radio" name = "preg11" value = "dos" /> 2
        <input type = "radio" name = "preg11" value = "tres" /> 3
        <input type = "radio" name = "preg11" value = "cuatro" /> 4
    </div><br>


            <input class="form-control" type="submit" name="register" style="margin-top:2%;">
          </form>
             
        </div>
      </div>
    </section>

 <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

                <div class="col-lg-4 col-md-6 footer-links">
          <h1 class="logo me-auto me-lg-0"><img src="assets/img/rox_logo.png" class="img-fluid" alt="" style="float: left;">
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                <h3>Contacto</h3>
                <p>
                  Orion 1963,<br>
                  Quilpué, Valparaíso, Chile<br><br>
                  <strong>Email:</strong> contacto@rox.cl<br>
                    <strong>Teléfono:</strong> +56 9 57592636<br>
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>

              <div class="col-lg-4 col-md-6 footer-info">
              <h3>Qué hacemos</h3>
          Especializados en  Comisionamiento y Puesta en Servicios de Sub Estaciones eléctricas en Alta y Media Tensión así como Líneas de Proceso en Baja Tensión.
            </div>

          </div>
        </div>
      </div>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>ROX</span></strong>. All Rights Reserved <script>document.write(new Date().getFullYear())</script>
        </div>
      </div>
    </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>