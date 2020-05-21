
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
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/Imagenes/z28.png);">
        <div class="container">
          <h3 class="breadcrumbs-custom-title">DEUDAS DE LOS USUARIOS</h3>
          <pre-footer-classic class="breadcrumbs-custom-subtitle">Aquí encontraras todas las deudas en cuanto a la entrega de libros con IESMA.</pre-footer-classic>
        </div>
      </section>
      <!-- Base typography -->





<?php
	include("abrir_conexion.php");
	$resultados = mysqli_query($conexion,"SELECT fecha_Final FROM prestamos");
	while($consulta = mysqli_fetch_array($resultados))
	{
	$FE=$consulta['fecha_Final'];
	echo "La fecha final es: ".$FE."<br/>";
	}
	include("cerrar_conexion.php");
?>
<?php
	$FEA=date("Y-m-d");
	echo "FEA ES: ".$FEA;
	echo "FE ES: ".$FE;
	if($FE>$FEA){
	}
?>





		<center>
               	<h3>INFORMACIÓN DE LA TABLA:</h3>
		<p></p>
	<table border="1">
		<tr>
		 <th><center>Código Prestamo</center></th>
		 <th><center>Código Libro</center></th>
		 <th><center>Código Usuario</center></th>
		 <th><center>Estado Prestamo</center></th>
		 <th><center>Fecha Inicial Prestamo</center></th>
		 <th><center>Fecha Final Prestamo</center></th>
		 <th><center>Estado Deuda</center></th>
		</tr>
	<?php
		include("abrir_conexion.php");
		$resultados = mysqli_query($conexion,"SELECT DISTINCT cod_pres, cod_lib, cod_usu, estado, fecha_Inicial, fecha_Final, estadoD FROM deudas, prestamos");
		while($consulta = mysqli_fetch_array($resultados))
		{
	?>
		<tr>
		 <td><center><?php echo $consulta['cod_pres'] ?></center></td>
		 <td><center><?php echo $consulta['cod_lib'] ?></center></td>
		 <td><center><?php echo $consulta['cod_usu'] ?></center></td>
		 <td><center><?php echo $consulta['estado'] ?></center></td>
		 <td><center><?php echo $consulta['fecha_Inicial'] ?></center></td>
		 <td><center><?php echo $consulta['fecha_Final'] ?></center></td>
		 <td><center><?php echo $consulta['estadoD'] ?></center></td>
		</tr>
	<?php
		}
		include("cerrar_conexion.php");
	?>
	</table>
		<div class="button-wrap-1 text-center"><a class="button button-default" href="menu principal.php">Volver</a></div>
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