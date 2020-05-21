<!-- Price box minimal--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #e30e0e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
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
<?php
		$CO = $_POST['CON'];
		$L1MT = $_POST['L1M'];
?>
		<p></p>
<?php
	include("abrir_conexion.php");
	$resultados = mysqli_query($conexion,"SELECT * FROM usuario WHERE contrasena = '".$CO."'");
	while($consulta = mysqli_fetch_array($resultados))
	{
	$C=$consulta['Cod_usu'];
	$N=$consulta['nommbre'];
	$A=$consulta['apellido'];
	$E=$consulta['edad'];
	$U=$consulta['usuario'];
	}
	include("cerrar_conexion.php");
?>
<?php
	include("abrir_conexion.php");
	$resultados = mysqli_query($conexion,"SELECT MAX(cod_pres) AS cod_pres FROM prestamos");
	while($consulta = mysqli_fetch_array($resultados))
	{
	$id=$consulta['cod_pres'];
	$id2=$id+1;
	}
	include("cerrar_conexion.php");
?>

<?php
	include("abrir_conexion.php");
	$resultados = mysqli_query($conexion,"SELECT * FROM libros WHERE desp = '".$L1MT."'");
	while($consulta = mysqli_fetch_array($resultados))
	{
	$id3=$consulta['cod_lib'];
	}
	include("cerrar_conexion.php");
?>



		<!-- LIBRO 1-->
            	<?php error_reporting(0); if ($libro1 = $_POST['libro1M']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/A1.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>
		<?php if ($libro2 = $_POST['libro2M']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/A2.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>
		<?php if ($libro3 = $_POST['libro3M']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/A3.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>

		<!-- LIBRO 2-->
		<?php if ($libro1 = $_POST['libro1A']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/B1.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>
		<?php if ($libro2 = $_POST['libro2A']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/B2.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>
		<?php if ($libro3 = $_POST['libro3A']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/B3.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>

		<!-- LIBRO 3-->
		<?php if ($libro1 = $_POST['libro1I']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/C1.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>
		<?php if ($libro2 = $_POST['libro2I']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/C2.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>
		<?php if ($libro3 = $_POST['libro3I']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/C3.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>

		<!-- LIBRO 4-->
		<?php if ($libro1 = $_POST['libro1Q']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/D1.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>
		<?php if ($libro2 = $_POST['libro2Q']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/D2.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>
		<?php if ($libro3 = $_POST['libro3Q']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/D3.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>

		<!-- LIBRO 5-->
		<?php if ($libro1 = $_POST['libro1G']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/E1.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>
		<?php if ($libro2 = $_POST['libro2G']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/E2.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>
		<?php if ($libro3 = $_POST['libro3G']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/E3.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>

		<!-- LIBRO 6-->
		<?php if ($libro1 = $_POST['libro1H']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/F1.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>
		<?php if ($libro2 = $_POST['libro2H']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/F2.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>
		<?php if ($libro3 = $_POST['libro3H']): ?>
		<div class="col-lg-6"><img src="images/Imagenes/F3.jpg" alt="" width="426" height="352"/>
		<?php endif; ?>
	    </div>
            <div class="col-lg-6">
              <h3 class="custom-title offset-left-14">Prestamo:</h3>
              <p class="big text-black">A continuación te mostramos tus datos para confirmar
		el prestamo del libro que ves en pantalla:</p>
		<p></p>
		<form action="prestamoE.php" method="POST">
		<h6>CÓDIGO PRESTAMO:<center><input type="text" name="CP" value="<?php echo "".$id2;?>" readonly="readonly"></center></h6>
		<h6>CÓDIGO LIBRO:<center><input type="text" name="CL" value="<?php echo "".$id3;?>" readonly="readonly"></center></h6>
		<h6>CÓDIGO USUARIO:<center><input type="text" name="CU" value="<?php echo "".$C;?>" readonly="readonly"></center></h6>
		<h6>ESTADO:<center><input type="text" name="Es" value="<?php echo "Activo";?>" readonly="readonly"></center></h6>
		<h6>USUARIO:<center><input type="text" name="" value="<?php echo "".$U;?>" readonly="readonly"></center></h6>
		<h6>FECHA PRESTAMO:<center><input type="datetime" name="fecha1"  value="<?php echo date("Y-m-d");?>" readonly="readonly"></center></h6>
			<?php
			$fecha = date('Y-m-j');
			$nuevafecha = strtotime ( '+7 day' , strtotime ( $fecha ) ) ;
			$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
			?>
		<h6>FECHA DEVOLUCIÓN:<center><input type="datetime" name="fecha2"  value="<?php echo $nuevafecha;?>" readonly="readonly"></center></h6>
              <article class="quote-simple">
	      <center>
		

		<p></p>
		<input type="submit" value="REALIZAR PRESTAMO"/>
		</form>
		<p></p>
		<a class="button button-default" href="biblioteca.php">CANCELAR</a>
		      ___________________________________________________________
	      </center>
            </div>
          </div>
        </div>
      </section>

<!-- Page Footer-->

      <footer class="section footer-classic context-dark text-center">
        <div class="container">
          <div class="row row-15 justify-content-lg-between">
            <div class="col-lg-4 col-xl-3 text-lg-left">
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. Todos Los Derechos Reservados En Desarrollo.</p>
            </div>
            <div class="col-lg-5 col-xl-6">
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