<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'mandadito_express');

	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if($link === false){
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Mandadito Express</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="../../css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="../../css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="../../css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="../../css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="../../css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="../../css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
<li><a href="#se_quitaron_los_datos_comprometedores"><i class="fa fa-phone"></i> 001-123-4567</a></li>
						<li><a href="#se_quitaron_enlaces"><i class="fa fa-envelope-o"></i> Mandadito Express</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Mexico</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="../inicio-producto.php" class="logo">
									<img src="../../img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">Productos</option>
										<option value="1">Categoria 01</option>
										<option value="1">Categoria 02</option>
									</select>
									<input class="input" placeholder="Producto A Buscar">
									<button class="search-btn">Buscar</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- /Cart -->
								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Realizar pedido:</h2>
                    </div>
					<form class="mx-1 mx-md-4" action="register.php" method="POST">
                        <div class="d-flex flex-row align-items-center mb-4"> 
                            <div class="form-outline flex-fill mb-0">
                            	<label class="form-label">Ingresa la cantidad a pedir:</label>
                              <input type="number" class="form-control"  name="cantidad" placeholder="Ingresa la cantidad a pedir" id="cantidad" required>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex flex-row align-items-center mb-4"> 
                            <div class="form-outline flex-fill mb-0">
                            	<label class="form-label">Ingresa los productos:</label>
                       			<textarea type="text" class="form-control"  name="descripcion" placeholder="Ingresa los productos" id="descripcion" required></textarea>
                            </div>
                        </div>
                        <br>     
                        <div class="d-flex flex-row align-items-center mb-4"> 
                            <div class="form-outline flex-fill mb-0">
                            	<label class="form-label">Ingresa tu domicilio:</label>
                              <textarea type="text" class="form-control"  name="domicilio" placeholder="Ingresa tu domicilio" id="domicilio" required></textarea>
                            </div>
                        </div>
                        <br>                   
                        <div class="d-flex flex-row align-items-center mb-4"> 
                            <div class="form-outline flex-fill mb-0">
                            	<label class="form-label">Ingresa tu Telefono:</label>
                              <input type="tel" class="form-control"  name="tel" placeholder="Ingresa tu Telefono" id="tel" required>
                            </div>
                        </div>
                        <br> 
                         <div class="form-check d-flex justify-content mb-5"> 
                              <input type="checkbox" class="form-check-input me-2">
                              <label class="form-check-label">Acepto los Terminos y Condiciones de uso. <a href="#">Terminos del servicio</a>
                              </label>
                         </div>
                         <hr>
                        <input type="submit" class="btn btn-primary" value="Enviar">
                        <a href="../inicio-producto.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>¿Tienes alguna queja o sugerencia?</p>
							<form>
								<input class="input" type="email" placeholder="Escribe aqui">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Enviar</button>
							</form>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Sobre nosotros</h3>
								<p>Mandadito Express, hacemos más fácil tu vida</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Mexico</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>Facebook</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>Instagram</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categoria</h3>
								<ul class="footer-links">
									<li><a href="#">Inicio</a></li>
									<li><a href="#">Restaurantes</a></li>
									<li><a href="#">Varios</a></li>
									<li><a href="#">Servicio</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Usuario</h3>
								<ul class="footer-links">
									<li><a href="#">Mi perfil</a></li>
									<li><a href="#">Editar perfil</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Extra</h3>
								<ul class="footer-links">
									<li><a href="#"></a></li>
									<li><a href="#">#PideloPorMandadito</a></li>
									<li><a href="#">#ConMandaditoTodoEsMasFacil</a></li>
									<li><a href="#">#PuroMandadito</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/slick.min.js"></script>
		<script src="../js/nouislider.min.js"></script>
		<script src="../js/jquery.zoom.min.js"></script>
		<script src="../js/main.js"></script>

	</body>
</html>
