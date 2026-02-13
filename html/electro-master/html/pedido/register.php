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
						<li><a href="#"><i class="fa fa-phone"></i> 755-106-5003</a></li>
						<li><a href="https://www.facebook.com/MandaditoExpressPetatlan"><i class="fa fa-envelope-o"></i> Mandadito Express Petatlán</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Petatlán Centro, Guerrero, Mexico</a></li>
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
		<form>
			<div>			<?php
$DATABASE_SERVER = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASSWORD = '';
$DATABASE_NAME = 'mandadito_express';

//Probar y conectar a la BD con los datos anteriores.
$con = mysqli_connect($DATABASE_SERVER, $DATABASE_USER, $DATABASE_PASSWORD, $DATABASE_NAME);

if (mysqli_connect_errno()) {
  // Si hay un error con la conexion, detenemos el script y mostramos el error.
  exit('No se pudo conectar a MySQL:' . mysqli_connect_errno());
}

//Aqui verificamos si los datos fueron enviados y la funcion isset() verificara si los datos existen.
if (!isset($_POST['cantidad'], $_POST['descripcion'], $_POST['domicilio'], $_POST['tel'])) {
  // Checamos si los datos no se pudieron obtener al momento de enviarse
  exit('¡Por favor complete el formulario de registro!');
}

//Nos aseguramos de que los valores del registro no esten vacios.
if (empty($_POST['cantidad']) || empty($_POST['descripcion']) || empty($_POST['domicilio'])  || empty($_POST['tel'])) {
  // Uno o mas valores estan vacios
  exit('¡Por favor complete el formulario de registro!');
}

//Buscamos o comprobamos cadenas de texto mediante expreciones regulares
if (preg_match('/^[a-zA-Z0-9]+$/' , $_POST['cantidad']) == 0) {
  exit('¡El cantidad no es valido!');
}


//Preparacion de la insercion en la BD
if ($stmt = $con->prepare('SELECT id_pedido, descripcion FROM pedidos WHERE cantidad = ?')) {
  //Enlazamos paraqmetros de tipo bind "bind parameters" (s = string, i = int, b = blob, y codificamos la password usando la funcion de password_hash)
  $stmt->bind_param('s', $_POST['id_pedido']);
  $stmt->execute();
  $stmt->store_result();
  //Almacenamos el resultado para que podamos verificar en el BD.
  if ($stmt->num_rows > 0) {
    //El username ya existe
    echo '¡El cantidad ya existe, elige otro!';
  } else {
    //Insertamos la nueva cuenta por que le username no existe
    if ($stmt = $con->prepare('INSERT INTO pedidos (cantidad, descripcion, domicilio, telefono ) VALUES (?, ?, ?, ?)')) {
      // No queremos exponer la password en nuestra BD asi que realizamos un hast y un password_verify cuando el username inicia sesion.
      $stmt->bind_param('ssss', $_POST['cantidad'], $_POST['descripcion'], $_POST['domicilio'], $_POST['tel'] );
      $stmt->execute();
      echo "¡Pedido Realizado!";
    } else {
      //Si no se cumple el dato anterior algo estara mal en la consulta SQL y tendremos que verificar que la tabla cuentas exista.
      echo "¡No se pudo preparar la declaracion!";
    }
  }
  $stmt->close();
} else {
  //Si no se cumple el dato anterior algo estara mal en la consulta SQL y tendremos que verificar que la tabla cuentas exista.
  echo "¡No se pudo preparar la declaracion!";
}
$con->close();
?></div>
		</form>
                        <a href="../inicio-producto.php" class="btn btn-default">Volver a inicio</a>
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
								<p>Mandadito Express Petatlán, hacemos más fácil tu vida, desde tu celular solo escríbenos un Whats</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Petatlán Centro, Guerrero, Mexico</a></li>
									<li><a href="https://www.facebook.com/MandaditoExpressPetatlan"><i class="fa fa-envelope-o"></i>Facebook</a></li>
									<li><a href="https://www.instagram.com/mandaditoexpresspetatlan/?fbclid=IwAR1R1UsoP7ETO-Sr4zQFQexFhxr0IevTKUKJ7rSFPMIyOz3AVPRKxzUyJUI"><i class="fa fa-envelope-o"></i>Instagram</a></li>
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
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/slick.min.js"></script>
		<script src="../js/nouislider.min.js"></script>
		<script src="../js/jquery.zoom.min.js"></script>
		<script src="../js/main.js"></script>

	</body>
</html>