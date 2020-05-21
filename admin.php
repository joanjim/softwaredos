<!-- Price box minimal--><!DOCTYPE html>

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
  font-weight:bold;
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
    <style>.ie-panel{display: none;background: #2BFF06;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Cargando...</p>
      </div>
    </div>
    <div class="page">
      <section class="section section-relative section-header">
        <!-- Preview section-->
        <section class="section context-dark section-jumbotron bg-cover" style="background: url(images/bg-image.jpg) #151515">
          <div class="section-fullheight">
            <div class="section-fullheight-inner section-md text-center text-lg-center">
              <div class="container">
                <div class="row justify-content-center justify-content-lg-start">
                  <div class="col-md-10 offset-lg-1 col-lg-8 offset-xl-1 col-xl-9 offset-xxl-2 col-xxl-7">
                    <div class="jumbotron-custom-1">
                  </div>
                </div>
              </div>
            </div>

 <div class="col-lg-6">
	     <table width="100%" height="10%">
	      <tr>
	       <h5>ADMINISTRADOR</h5>
	       <td><img src="images/Imagenes/z1.jpg" alt="" width="200" height="70"/></td>
	      </tr>
	     </table>
            </div>
		<?php
		error_reporting(0);
		$pass;
		$pass = $_POST["con"];
		?>
			<p></p>
			<center>
                	<p></p>
			<form action="" method="POST">
 			<div class="col-lg-4">
			<div class="form-wrap form-wrap-icon">
                  	<div class="form-icon mdi mdi-shield-outline"></div>
                  	<input class="form-input" id="contact-con" type="password" name="con">
                  	<label class="form-label" for="contact-con">Contraseña Administrador</label>
			<p></p>
			<input type="submit" name="" value="INGRESAR"/>
			<p></p>
			<a class="button button-default" href="menu principal.php">VOLVER</a>
			<a Ver la otra Pagina</a>
			</form>
			</center>
                    	</div>
                	</div>
              		</div>
                </div>
                </div>
		</div>
          </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Drel-->
<?php
		error_reporting(0);
		if($pass==123){
		header("Location: adminMENU.php");
		}else{
		}
?>
  </body>
</html>