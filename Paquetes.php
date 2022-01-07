<?php 
  session_start();
  //$_SESSION['cliente'] = $nombre;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Paquetes</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/destinations.css">
<link rel="stylesheet" type="text/css" href="styles/destinations_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
							<div class="logo"><a href="index.html">Agencia DXM</a></div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li class="active"><a href="index.php">Inicio</a></li>
									<li><a href="contact.php">Contacto</a></li>
									<li><a href="login.html">Bienvenido  <?php echo $_SESSION['nombre'] ?> </a></li>
								</ul>
							</nav>
							<div class="header_phone ml-auto">Asistencia Telefonica: +52-246 161 7997</div>

							<!-- Hamburger -->

							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_social d-flex flex-row align-items-center justify-content-start">
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	
	
	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/este.jpg)"></div>
		<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2><br>Paquetes DXM</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
	</div>

	<!-- Search -->

	
	<!-- Destinations -->

	<div class="destinations" id="destinations">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle"><h2 style="color: black">Estos son los resultados</h2></div><br><br>
                    
	<div class="contact">
		<div class="container">
			<div class="row">


				<!-- Contact Form -->
				<div class="col-lg-6">
					<div class="contact_form_container">
						<br><br><br>
						<h3 style="color: black">Destino:
                         <?php
                         $destino = $_GET['destino'];
                         $daterange= $_GET['daterange'];
                         $claseAvion = $_GET['claseAvion'];
                         echo $destino;
                         echo '<br>';
                         echo $daterange;
                         echo '<br>';

					     ?></h3>

					     <div>
					     	<br><br>
					     <img src="images/descargar.png" width="11%" height="11%" alt="">
					     </div>
						
					</div>
				</div>
				<!-- Get in touch -->
				<div class="col-lg-6">
					<div class="contact_content">
						<div class="contact_title"><h5 style="color: black">Dudas sobre en clima en tu destino, ¡nosotros te ayudamos!</h5></div>
		
							<!-- Map -->
					<script type="text/javascript" src="https://widgets-viewer.climacell.co/v1/sdk.js"></script>
					<div class="climacell-widget" data-apikey="eMFDXUmIvK9KPPmnRogordq2DfPdmMdy" data-type="daily" data-location-name="Mexico City, CDMX, México" data-location-lon="-99.133208" data-location-lat="19.4326077" data-size-mode="large" data-font-color="#000" data-background-color="#8ec5df" data-font-family="verdana" data-weather-params="temp:C,precipitation:mm/hr,humidity:%" data-allow-users-enter-address="true"></div>
					</div>
				</div>

				
			</div>
		</div>
	</div>
				</div>
			</div>
			<div class="row destination_sorting_row">
				<div class="col">
					<div class="destination_sorting d-flex flex-row align-items-start justify-content-start">
						<div class="sorting">
							<ul class="item_sorting">
								<li>
									<span class="sorting_text">Ordenar por</span>
									<i class="fa fa-chevron-down" aria-hidden="true"></i>
									<ul>
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Ordenar por</span></li>
										
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Ofertas</span></li>
									</ul>
								</li>
								
							</ul>
						</div>
						<div class="sort_box ml-auto"><i class="fa fa-th" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
			<div class="row destinations_row">
				<div class="col">
					<div class="destinations_container item_grid">

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/hola.jpg" alt="">
								<div class="spec_offer text-center"><a href="#">Oferta Especial</a></div>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="Familiar.php">Paquete Familiar</a></div>
								<div class="destination_subtitle"><p>Estas viajando en familia, este lugar esperfecto para ti.</p></div>
								<div class="destination_price">Desde $40,000</div>
								<div class="destination_list">
									<ul>
									     <li>Hotel 4 Estrellas</li>
										<li>Desayunos incluidos</li>
										<li>Renta de servicios extra</li>
										<li>Tours por el lugar</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/destination_12.jpg" alt="">
								<div class="spec_offer text-center"><a href="#">Oferta Especial</a></div>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="Enamorados.php">Paquete Enamorados</a></div>
								<div class="destination_subtitle"><p>Estas de luna de miel, este paquete es para ti .</p></div>
								<div class="destination_price">Desde $19,000</div>
								<div class="destination_list">
									<ul>
										<li>Hotel 5 Estrellas</li>
										<li>Desayunos incluidos</li>
										<li>Renta de servicios extra</li>
										<li>Tours por el lugar</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/destination_7.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="Mochilero.php">Paquete Mochilero</a></div>
								<div class="destination_subtitle"><p>Te encanta viajar, este paquete es para ti mochilero</p></div>
								<div class="destination_price">Desde $17,000</div>
								<div class="destination_list">
									<ul>
										<li>Hotel  Economico</li>
										<li>Desayunos incluidos</li>
										<li>Renta de servicios extra</li>
										<li>Tours por el lugar</li>
									</ul>
								</div>
							</div>
						</div>
                    <!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/ex.jpeg" alt="">
								<div class="spec_offer text-center"><a href="#">Oferta Especial</a></div>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="Explorer.php">Paquete Explorer</a></div>
								<div class="destination_subtitle"><p>Estas viajando para tener una aventura, visitanos.</p></div>
								<div class="destination_price">Desde $22,000</div>
								<div class="destination_list">
									<ul>
									     <li>Hotel 3 Estrellas</li>
										<li>Desayunos incluidos</li>
										<li>Renta de servicios extra</li>
										<li>Tours por el lugar</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/destination_54.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="Relax.php">Paquete Relax</a></div>
								<div class="destination_subtitle"><p>Estas arto del estres cotidiano, da click aqui.</p></div>
								<div class="destination_price">Desde $21,000</div>
								<div class="destination_list">
									<ul>
										<li>Hotel 5 Estrellas</li>
										<li>Desayunos incluidos</li>
										<li>Renta de servicios extra</li>
										<li>Tours por el lugar</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/nino.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="Niños.php">Paquete Viaja con Niños</a></div>
								<div class="destination_subtitle"><p>Estas viajando con niños, este paquete es perfecto</p></div>
								<div class="destination_price">Desde $26,000</div>
								<div class="destination_list">
									<ul>
										<li>Hotel 4 Estrellas</li>
										<li>Desayunos incluidos</li>
										<li>Renta de servicios extra</li>
										<li>Tours por el lugar</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="row load_more_row">
				<div class="col">
					<div class="button load_more_button"><a href="servicios.php">Continuar</a></div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter">
						<div class="newsletter_title_container text-center">
							<div class="newsletter_title">Ahora que has visto nuestro sitio ¿Te interesa viajar con nosotros?</div>
							<div class="newsletter_subtitle">¡Registrate para iniciar tu proceso hoy!</div>
						</div>
						<center>
						<div class="newsletter_form_container">
							
						</div>
						<form action="Registro.html">
						<div><button class="newsletter_button">Registrarse</button></div></form>
					</center>
					</div>
				</div>
			</div>
			<div class="row footer_contact_row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/sign.svg" alt=""></div>
								<div class="footer_contact_title">Puedes llamarnos</div>
								<div class="footer_contact_list">
									<ul>
										<li>Agencia DXM: +52 246 32 664 567</li>
										<li>Movil DXM: +52 246 89 3322 332</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/trekking.svg" alt=""></div>
								<div class="footer_contact_title">Pasa y pregunta</div>
								<div class="footer_contact_list">
									<ul style="max-width:190px">
										<li>Av. 14 sur y San claudio #121
											<br> Jardines de san Manuel, Puebla</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/around.svg" alt=""></div>
								<div class="footer_contact_title">Mandamos un mensaje</div>
								<div class="footer_contact_list">
									<ul>
										<li>agencia.viajesDxm@gmail.com</li>
										<li>ing.dylan21@gmail.com</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="col text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | DXM</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/destinations.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>