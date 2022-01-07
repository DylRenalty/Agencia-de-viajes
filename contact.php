
<?php 
  session_start();
  //$_SESSION['cliente'] = $nombre;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacto</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
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
									<li><a href="login.html">Bienvenido  <?php echo $_SESSION['nombre'] ?></a></li>
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
					<div class="background_image" style="background-image:url(images/angel.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Contactanos</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			
		</div>
	</div>
	
	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-7">
					<div class="contact_content">
						<div class="contact_title">Ponte en contacto con nosotros</div>
						<div class="contact_text">
							<p>En agencia de viajes DXM nos interesa saber tu opinión, si tienes alguna duda o necestias ayuda con tu proceso de seleccion de paquete, contactanos y nosotros te asistiremos.</p>
						</div>
							<!-- Map -->

						    <div>
						    	<center>
					          <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.329210269618!2d-98.20668958514977!3d19.00520968712863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfbf5f519d03e7%3A0x3a8315226c03db62!2sFCC-BUAP!5e0!3m2!1ses-419!2sbg!4v1591510024806!5m2!1ses-419!2sbg" frameborder="0" allowfullscreen></iframe>
					           </center>
					        </div>
						
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-5">
					<div class="contact_form_container">
						<form action="#" id="contact_form" class="contact_form">
							<div style="margin-bottom: 18px"><input type="text" class="contact_input contact_input_name inpt" placeholder="Nombre Completo" required="required"><div class="input_border"></div></div>
							<div class="row">
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_email inpt" placeholder="Correo Electronico" required="required"><div class="input_border"></div></div>
								</div>
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_subject inpt" placeholder="Asunto" required="required"><div class="input_border"></div></div>
								</div>
							</div>
							<div><textarea class="contact_textarea contact_input inpt" placeholder="Mensaje" required="required"></textarea><div class="input_border" style="bottom:3px"></div></div>
							<center>
							<button class="contact_button">Enviar</button>
						</center>
						</form>
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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA0LuN1DRsY3t3nNy44svx--g9U4CY6XH4"></script>
<script src="js/contact.js"></script>
</body>
</html>