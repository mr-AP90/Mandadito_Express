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
		<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="../css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="../css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="../css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="../css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="../css/style.css"/>

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
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-user-o"></i> Mi perfil</a></li>
						<li class="nav-item text-nowrap">
							<strong>Hola, bienvenido: </strong><?php echo ucwords($_SESSION['correo']) ?>
							<a href="login-form-17/logout.php" class="btn btn-danger">Cerrar sesión</a>
				    	</li>
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
								<a href="../../index.php" class="logo">
									<img src="../img/logo.png" alt="">
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
								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Carrito</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="../img/inico/product01.png" alt="">

												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="product-tienda/prod-laclinica01.php">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="../img/inico/product02.jpg" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="product-tienda/prod-laclinica02.php">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">2x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 productos(s) selecionados</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="pedido/verificado.php">Ver carrito</a>
											<a href="#">Comprar <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
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

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="inicio-producto.php">Inicio</a></li>
						<li><a href="tienda.php">Restaurantes</a></li>
						<li><a href="tienda-varios.php">Varios</a></li>
						<li><a href="pedido/verificado.php">Pedido</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="../img/inico/producto10.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Mandadito<br>Emergencias</h3>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="../img/inico/producto12.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Mandadito<br>Express</h3>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="../img/inico/producto11.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Mandadito<br>Servicios</h3>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="../img/inico/product01.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Restaurante</p>
												<h3 class="product-name"><a href="product-tienda/prod-laclinica01.php">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a guardados</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">descripción del producto</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rapida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="../img/inico/product02.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Restaurante</p>
												<h3 class="product-name"><a href="product-tienda/prod-laclinica02.php">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a guardados</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">descripción del producto</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rapida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="../img/inico/product03.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Restaurante</p>
												<h3 class="product-name"><a href="product-tienda/prod-laclinica03.php">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a guardados</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">descripción del producto</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rapida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="../img/inico/producto04.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Varios</p>
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a guardados</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">descripción del producto</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rapida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="../img/inico/producto05.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Varios</p>
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a guardados</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">descripción del producto</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rapida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="../img/inico/producto06.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Varios</p>
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a guardados</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">descripción del producto</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rapida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="../img/inico/producto07.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Restaurante</p>
												<h3 class="product-name"><a href="product-tienda/prod-kcake01.php">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a guardados</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">descripción del producto</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rapida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="../img/inico/producto08.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Restaurante</p>
												<h3 class="product-name"><a href="product-tienda/prod-kcake02.php">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a guardados</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">descripción del producto</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rapida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="../img/inico/producto09.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Restaurante</p>
												<h3 class="product-name"><a href="product-tienda/prod-kcake03.php">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a guardados</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">descripción del producto</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rapida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="../img/inico/product01.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Restaurante</p>
												<h3 class="product-name"><a href="product-tienda/prod-laclinica01.php">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a guardados</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">descripción del producto</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rapida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">más vendidos</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/producto07.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Restaurante</p>
										<h3 class="product-name"><a href="product-tienda/prod-kcake01.php">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/producto08.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Restaurante</p>
										<h3 class="product-name"><a href="product-tienda/prod-kcake02.php">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/producto09.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Restaurante</p>
										<h3 class="product-name"><a href="product-tienda/prod-kcake03.php">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Restaurante</p>
										<h3 class="product-name"><a href="product-tienda/prod-laclinica01.php">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/product02.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Restaurante</p>
										<h3 class="product-name"><a href="product-tienda/prod-laclinica02.php">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Restaurante</p>
										<h3 class="product-name"><a href="product-tienda/prod-laclinica03.php">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">más vendidos</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/producto04.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Varios</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/producto05.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Varios</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/producto06.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Varios</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/producto07.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Restaurante</p>
										<h3 class="product-name"><a href="product-tienda/prod-kcake01.php">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/producto08.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Restaurante</p>
										<h3 class="product-name"><a href="product-tienda/prod-kcake02.php">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/producto09.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Restaurante</p>
										<h3 class="product-name"><a href="product-tienda/prod-kcake03.php">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">más vendidos</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Restaurante</p>
										<h3 class="product-name"><a href="product-tienda/prod-laclinica01.php">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/product02.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Restaurante</p>
										<h3 class="product-name"><a href="product-tienda/prod-laclinica02.php">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Restaurante</p>
										<h3 class="product-name"><a href="product-tienda/prod-laclinica03.php">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/producto04.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Varios</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/producto05.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Varios</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/inico/producto06.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Varios</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
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
									<li><a href="inicio-producto.php">Inicio</a></li>
									<li><a href="tienda.php">Restaurantes</a></li>
									<li><a href="tienda-varios.php">Varios</a></li>
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
									<li><a href="editar-perfil.php">Editar perfil</a></li>
									<li><a href="../../../admin/index.php">Modo administrador</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Extra</h3>
								<ul class="footer-links">
									<li><a href="#"></a></li>
									<li><a href="#">#PideloPorMandadito<</a></li>
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
