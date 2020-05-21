
<!-- Price box minimal--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Instituto Educativo San Mateo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/Imagenes/z2.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Cargando...</p>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-wide" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="#"><img class="brand-logo-dark" src="images/Imagenes/z1.jpg" alt="" width="100" height="100"/><img class="brand-logo-light" src="images/logo-inverse-86x104.png" alt="" width="86" height="104"/></a>
                  </div>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="inicio.php">Inicio</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/Imagenes/z19.jpg);">
        <div class="container">
          <h3 class="breadcrumbs-custom-title">¡EXITO AL GUARDAR!</h3>
          <pre-footer-classic class="breadcrumbs-custom-subtitle">Ingresa con el nuevo usuario y contraseña para acceder al sistema.</pre-footer-classic>
        </div>
      </section>
      <!-- Base typography -->

		<?php
		error_reporting(0);
		$cod = $_POST["cod"];
		$nom = $_POST["nom"];
		$ape = $_POST["ape"];
		$eda = $_POST["eda"];
		$usu = $_POST["usu"];
		$con = $_POST["con"];
		?>
		  <center>
                  <h3>GRACIAS POR REGISTRARTE</h3>
		  
			<?php
			error_reporting(0);
			include("abrir_conexion.php");
			$insertar = "INSERT INTO usuario VALUES ('$cod','$nom','$ape','$eda','$usu','$con')";
			$agregar = mysqli_query($conexion, $insertar);
			include("cerrar_conexion.php");
			?>

		  </center>
                </li>
		<p></p><p></p>
		<center><a class="button button-default" href="inicio.php">VOLVER</a></center>
		<p></p><p></p>
      <!-- Page Footer-->
      
      <footer class="section footer-classic context-dark text-center">
        <div class="container">
          <div class="row row-15 justify-content-lg-between">
            <div class="col-lg-4 col-xl-3 text-lg-left">
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. Todos Los Derechos Reservados En Desarrollo.</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>