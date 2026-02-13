<?php
                if (isset($_REQUEST['login'])) {
                    session_start();
                    $user = $_REQUEST['user'] ?? '';
                    $pass = $_REQUEST['pass'] ?? '';
                    include_once "config.php";
                    $conexion = mysqli_connect($hostname, $username, $password, $dbname);
                    $sql = "SELECT id_repartidor,email,contraseña from repartidor where email='$user' and contraseña='$pass'; ";
                    $resultSet = mysqli_query($conexion, $sql);
                    $row = mysqli_fetch_assoc($resultSet);
                    if ($row) {
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['user'] = $row['user'];
                        $_SESSION['activo'] = '1';
                        header("Location: ../../../../repartidor/dashboard.php");
                    } else {
                ?>
                        <div class="alert alert-danger" role="alert">
                            <strong>Datos no validos</strong>
                        </div>
                <?php
                    }
                }
                ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		  	<title>Login</title>

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
 		   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

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
								<a href="../../../index.php" class="logo">
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
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Bienvenido a Mandadito Express</h2>
								<p>¿No tienes una cuenta?</p>
								<a href="../registrarse.php" class="btn btn-white btn-outline-white">Registrate</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Inicio de sesión Repartidor</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
			      		<form method="post">
                    <div class="form-group">
                        <label for="">User</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Pass</label>
                        <input type="password" name="pass" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </div>
                </form>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
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
								<p>Mandadito Express hacemos más fácil tu vida</p>
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
								<h3 class="footer-title">Usuario Repatidor</h3>
								<ul class="footer-links">
									<li><a href="regtr_admin.php">Administrador</a></li>
									<li><a href="regtr_usu.php">Cliente</a></li>
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
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
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
		<script src="../../js/jquery.min.js"></script>
		<script src="../../js/bootstrap.min.js"></script>
		<script src="../../js/slick.min.js"></script>
		<script src="../../js/nouislider.min.js"></script>
		<script src="../../js/jquery.zoom.min.js"></script>
		<script src="../../js/main.js"></script>

	</body>
</html>
