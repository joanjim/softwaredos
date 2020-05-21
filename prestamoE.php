<!-- Price box minimal--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Instituto Educativo San Mateo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/Imagenes/Z2.ico" type="image/x-icon">
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
	<section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-30">
		<center>
		<h2>¡EL LIBRO HA SIDO PRESTADO CON EXITO!</h2>
		</center>
	    </div>
		<center>
		<p></p>
		<a class="button button-default" href="biblioteca.php">REGRESAR</a>
		<p></p>
<?php
		$CP = $_POST['CP'];
		$CL = $_POST['CL'];	
		$CU = $_POST['CU'];
		$Es = $_POST['Es'];
		$F1 = $_POST['fecha1'];
		$F2 = $_POST['fecha2'];
?>

			<?php
			error_reporting(0);
			include("abrir_conexion.php");
			$insertar = "INSERT INTO prestamos VALUES ('$CP','$CL','$CU','$Es','$F1','$F2')";
			$agregar = mysqli_query($conexion, $insertar);
			include("cerrar_conexion.php");
			?>
		<p></p>
		      ___________________________________________________________
	      </center>
            </div>
          </div>
        </div>
      </section>
<!-- Page Footer-->
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>