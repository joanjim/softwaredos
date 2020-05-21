
<!-- Price box minimal--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
<style>
table {
  border-collapse: collapse;
  width: 80%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
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
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/Imagenes/z30.jpg);">
        <div class="container">
          <h1 class="breadcrumbs-custom-title">USUARIOS</h1>
          <pre-footer-classic class="breadcrumbs-custom-subtitle">Aquí encontraras a todos las usuarios registrados en el sistema IESMA.</pre-footer-classic>
        </div>
      </section>
      <!-- Base typography -->
		<center>
               	<h3>INFORMACIÓN DE LA TABLA:</h3>
		<p></p>
	<table border="1">
		<tr>
		 <th><center>Código Usuario</center></th>
		 <th><center>Nombres</center></th>
		 <th><center>Apellidos</center></th>
		 <th><center>Edad</center></th>
		 <th><center>Nombre del Usuario</center></th>
		 <th><center>Contraseña Usuario</center></th>
		</tr>
	<?php
		include("abrir_conexion.php");
		$resultados = mysqli_query($conexion,"SELECT * FROM usuario");
		while($consulta = mysqli_fetch_array($resultados))
		{
	?>
		<tr>
		 <td><center><?php echo $consulta['Cod_usu'] ?></center></td>
		 <td><center><?php echo $consulta['nommbre'] ?></center></td>
		 <td><center><?php echo $consulta['apellido'] ?></center></td>
		 <td><center><?php echo $consulta['edad'] ?></center></td>
		 <td><center><?php echo $consulta['usuario'] ?></center></td>
		 <td><center><?php echo $consulta['contrasena'] ?></center></td>
		</tr>
	<?php
		}
		include("cerrar_conexion.php");
	?>
	</table><p></p>
		<form action="eliminar.php" method="POST">
			<input type="text" name="eli" placeholder="Código del usuario"><p></p>
			<input type="submit" value="BORRAR"/>
		</form>
		<div class="button-wrap-1 text-center"><a class="button button-default" href="adminMENU.php">Volver</a></div>
<p></p>

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