<?php 
  session_start();
  //$_SESSION['cliente'] = $nombre;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Agencia DXM</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
									<li class="active"><a href="index.html">Inicio</a></li>
									<li><a href="contact.php">Contacto</a></li>
									<li><a href="login.html">Bienvenido <?php echo $_SESSION['nombre'] ?></a></li>
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

	<!-- Menu -->

	
	
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Agencia de viajes DXM</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			
		</div>
	</div>

	<!-- Search -->
	<br><br><br><br><br><br>

	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
							<form action="paquetes.php" class="home_search_form" id="home_search_form">
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
									
                                        <select type="text" class="search_input search_input_1" name="destino" placeholder="Destino" required="required">
								        <option value="Mexico">Mexico</option>
								        <option value="Brazil">Brazil</option>
								        <option value="Cuba">Cuba</option>
								        <option value="Colombia">Colombia</option>
								        <option value="Alemania">Alemania</option>
								        <option value="Canada">Canada</option>
								        <option value="Estados Unidos">Estados Unidos</option>
								        <option value="España">España</option>
								        <option value="Egipto">Egipto</option>
								        <option value="Escocia">Escocia</option>
								        <option value="Italia">Italia</option>
								        <option value="Francia">Francia</option>
								        <option value="Inglaterra">Inglaterra</option>
								        <option value="Grecia">Grecia</option>
								        <option value="Hawai">Hawai</option>
								        <option value="Irlanda">Irlanda</option>
								        <option value="Rusia">Rusia</option>
								        <option value="India">India</option>
								        <option value="China">China</option>
								        <option value="Australia">Australia</option>
								        <option value="Japon">Japon</option>
								        </select>
      
									<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
									<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
									<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
									<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
									<input type="text" class="search_input search_input_1" name="daterange" value="06/05/2020 - 06/15/2020" required="required"/>

									<script>
									$(function() {
									  $('input[name="daterange"]').daterangepicker({
									    opens: 'center'
									  }, function(start, end, label) {
									    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
									  });
									});
									</script>
									<select type="text" class="search_input search_input_4" name="claseAvion" placeholder="Categoria de Vuelo" required="required">
										<option value="Selecciona Vuelos">¿Tienes cupon?</option>
								        <option value="VIAJASI15">VIAJASI15</option>
								        <option value="EXPLORA21">EXPLORA21</option>
								        <option value="DESCUBRE78">DESCUBRE78</option>
								        </select>
      
									<button class="home_search_button">Buscar Paquete</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="intro_background" style="background-image:url(images/intro.png)"></div>
		<div class="container">
					<div class="intro_container">
						<div class="row">

							

							<!-- Intro Item -->
							<center>
							<div class="col-lg-10 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_content">
										<div class="intro_title"><h2>"Viajamos, No para escapar de la vida, Sino para que la vida no se nos escape"</h2><br><h3>Dylan Lozada</h3></div>
									</div>
								</div>
							</div>
						</center>

						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials" id="ancla">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">simplemente lugares increibles</div>
					<div class="section_title" ><h2>Acerca de</h2></div>
				</div>
			</div>
			<div class="row testimonials_row">
				<div class="col">

					<!-- Testimonials Slider -->
					<div class="testimonials_slider_container">
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="testimonial">Somos una agencia de viajes 100% Mexicana dedicada a ofrecer paquetes turisticos que puedan estar al alcance de cada uno de nuestros clientes.</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
										<div>Agencia de viajes DXM</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="testimonial">DXM surge del sueño de viajar por el mundo haciendo amigos, conociendo nuevas culturas y explorar nuevas fronteras.</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
										<div>Agencia de viajes DXM</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
		

						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<!-- Destinations -->

	<div class="destinations" id="destinations">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">simplemente lugares increibles</div>
					<div class="section_title"><h2>Paquetes Populares</h2></div>
				</div>
			</div>
			<div class="row destinations_row">
				<div class="col">
					<div class="destinations_container item_grid">

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/destination_1.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="destinations.html">Paquete Playas Mexico</a></div>
								<div class="destination_subtitle"><p>Siente la arena mojada por tus pies.</p></div>
								<div class="destination_price">Desde $15,000</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/destination_2.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="destinations.html">Paquete Explora Africa</a></div>
								<div class="destination_subtitle"><p>Explora nuevas fronteras naturales.</p></div>
								<div class="destination_price">Desde $14,000</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/destination_3.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="destinations.html">Paquete USA + Canada</a></div>
								<div class="destination_subtitle"><p>Viajas al extrangero, este paquete es perfecto para ti.</p></div>
								<div class="destination_price">Desde $12,000</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/destination_4.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="destinations.html">Paquete Viaja a Europa</a></div>
								<div class="destination_subtitle"><p>Aqui se hizo historia, visitanos.</p></div>
								<div class="destination_price">Desde $18,000</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/destination_5.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="destinations.html">Paquete Islas Canarias</a></div>
								<div class="destination_subtitle"><p>Visita este maravilloso lugar.</p></div>
								<div class="destination_price">Desde $20,000</div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/destination_6.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="destinations.html">Paquete Todo Asia</a></div>
								<div class="destination_subtitle"><p>visitanos y pasa un verano maravillado.</p></div>
								<div class="destination_price">Desde $20,000</div>
							</div>
						</div>

					</div>
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

<script src="js/jquery-1.9.1.min.js"></script>
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