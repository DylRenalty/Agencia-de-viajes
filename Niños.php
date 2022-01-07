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
		<div class="background_image" style="background-image:url(images/ni.jpg)"></div>
		<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2><br>Paquete viaja con niños</h2></div>
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
					<div class="section_subtitle"><h2 style="color: black">Conoce todos los detalles de tu viaje</h2></div><br><br>
                    
	<div class="contact">
		<div class="container">
			<div class="row">


				<!-- Contact Form -->
				<div class="col-lg-8">
					<div class="contact_form_container">
	
						  <div class="container">
						  <h2 style="color: black">Conoce tu itinerario</h2>
						  <br>
						  <!-- Nav tabs -->
						  <ul class="nav nav-tabs" role="tablist">
						    <li class="nav-item">
						      <a class="nav-link active" data-toggle="tab" href="#home">Hospedaje</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#menu1">Itinerario</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#menu2">Vuelo</a>
						    </li>
						  </ul>

						  <!-- Tab panes -->
						  <div class="tab-content" style="color: black">
						    <div id="home" class="container tab-pane active"><br>
						      <h3 style="color: black">Hospedaje</h3>
						      <p style="color: black">Estimado usuario la informacion proporcionada a continuación esta sujeta a cambios sin previo aviso, de acuerdo a las politicas de la agenencia de viajes DXM.
						      	<table class="table table-bordered">
								  <thead>
								    <tr>
								      <th scope="col">Numero</th>
								      <th colspan="2">Descripcion</th>
								      <th scope="col">Precio</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <th scope="row">1</th>
								      <td>5 personas</td>
								      <td>7 dias /6 noches</td>
								      <td>10,000</td>
								    </tr>
								    <tr>
								      <th scope="row">2</th>
								      <td colspan="2">El hospedaje es para 2 adultos y 3 niños <br>en 2 habitaciónes matrimoniales, el checkin<br> a partir de las 12pm del dia y <br>termina el hospedaje el ultimo dia a las 12 pm</td>
								      <td></td>
								    </tr>
								    <tr>
								      <td colspan="3">Total</td>
								      <td colspan="2">$10,000</td>
								    </tr>
								  </tbody>
								</table>
						      </p>

						    </div>
						    <div id="menu1" class="container tab-pane fade"><br>
						      <h3>Itinerario</h3>
						      <p style="color: black">1.-LLegaste, lo primero es Documentar el check in de su hotel y poder descansar o ir a comer a uno de los restaurants que se encuentran disponibles cerca de la zona y poder conocer lo que les espera en su maravillosa estancia.<br>
						      2.-Dia 2, sabemos que su familia debe tener un album con fotos de ustedes dos o de objetos que los representen o que sean simbólicos de su amor. y tomar fotos siguiéndose uno al otro, ¡es tan lindo! La idea es que sean fotos no tanto de los destinos que visiten <br>
						      3.-Dia 3, Una vez que se acoplaron, pueden visitar los museos y cines que estan al rededor de la zona donde se encuentra su hotel y asi porder tomar algunas fotos y hacer un collage con ellas.<br>
						      4.- Dia 4, organiza una noche de juegos para los niños y preguntales sobre que les parece el viaje hasta este punto del viaje y comentales las demas sorpresas que les esperan juntos.<br>
						      5.-Dia 5,Lleva contigo un mapa por que lo que viene es super emocionante, vayan al centro del lugar y aventurence en una experiencia magica e inolbidable, no olviden la ropa comoda. <br>
						      6.-Dia 6, Sorprendete con las maravillosas clases de yoga para niños, sera de gran experiencia para los integrantes de la familia pasaran un momento inolvidable.<br>
						      7.-Refreso a casa, la aventura aun no termina sigue visitando nuestras paginas para que podamos date a conocer los diferentes paquetes que tenemos para ti en Agencia de viajes DXM.

                              
						     </p>
						    </div>
						    <div id="menu2" class="container tab-pane fade"><br>
						      <h3>Vuelo</h3>
						      <p>Estimado usuario la informacion proporcionada a continuación esta sujeta a cambios sin previo aviso, de acuerdo a las politicas de la agenencia de viajes DXM.
	                          <table class="table table-bordered">
								  <thead>
								    <tr>
								      <th scope="col">Numero</th>
								      <th colspan="2">Descripcion</th>
								      <th scope="col">Precio</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <th scope="row">1</th>
								      <td>5 personas</td>
								      <td>Aeromexico</td>
								      <td>16,000</td>
								    </tr>
								    <tr>
								      <th scope="row">2</th>
								      <td colspan="2">El vuelo es para 2 adultos y 3 niños <br>en clase Turista mas equipaje, el vuelo<br> sale de el Aeropuerto Benito Juarez CDMX<br>el check in y los detalles de abordaje<br>se enviaran al correo que nos proporciono mismo <br>al que deberá enviar la documentación de los viajeros</td>
								      <td></td>
								    </tr>
								    <tr>
								      <td colspan="3">Total</td>
								      <td colspan="2">$16,000</td>
								    </tr>
								  </tbody>
								</table>
						      </p>
						    </div>
						  </div>
						</div>	
					</div>
				</div>
				<!-- Get in touch -->
				<div class="col-lg-4">
					<div class="contact_content">
		
						<div class="card border-light mb-3" style="max-width: 18rem;">
						  <div class="card-header" style= "color: black">¿Que incluye este viaje?</div>
						  <div class="card-body">
						    <h5 class="card-title" style="color: black">Estas pagando $26,000 por</h5>
						    <p class="card-text" style="color: black">
						    	
								  1.-Boleto redondo de avion (por 5 personas que viajan)<br>
								  2.-Hospedaje hotel 4 estrellas<br>
								  3.-Desayunos incluidos<br>
								  4.-Servicio de lavanderia<br>
								  5.-Seguro de viajero <br>
								 
						    </p>
						  </div>
						</div>

						<br>
						<div class="card border-light mb-3" style="max-width: 18rem;">
						  <div class="card-header" style= "color: black">¿Que No esta incluido?</div>
						  <div class="card-body">
						    <h5 class="card-title" style="color: black">No incluye</h5>
						    <p class="card-text" style="color: black">
						    	
								  1.-Gastos de comidas y cenas<br>
								  2.-Servicios de transporte<br>
								  3.-Propinas y comiciones<br>
								  4.-Impuestos aereos por viaje<br>
								  5.-Fee de camaras en monumentos<br>
								 
						    </p>
						  </div>
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</div>
				</div>
			</div>
			
			<div class="row load_more_row">
				<div class="col">
				     <?php

					function getGCalendarUrl($event){ $titulo = urlencode($event['titulo']); $descripcion = urlencode($event['descripcion']); $localizacion = urlencode($event['localizacion']); $start=new DateTime($event['fecha_inicio'].' '.$event['hora_inicio'].' '.date_default_timezone_get()); $end=new DateTime($event['fecha_fin'].' '.$event['hora_fin'].' '.date_default_timezone_get()); $dates = urlencode($start->format("Ymd\THis")) . "/" . urlencode($end->format("Ymd\THis")); $name = urlencode($event['nombre']); $url = urlencode($event['url']); $gCalUrl = "http://www.google.com/calendar/event?action=TEMPLATE&amp;text=$titulo&amp;dates=$dates&amp;details=$descripcion&amp;location=$localizacion&amp;trp=false&amp;sprop=$url&amp;sprop=name:$name"; return ($gCalUrl); }

					$evento = array(
					 'titulo' => 'Agencia de Viajes DXM',
					 'descripcion' => 'Recuerda que nos vamos de viaje...No olvides entregar la documentación del vuelo!',
					 'localizacion' => 'Aeromexico Terminal 2, Aeropuerto Internacional de la, México (Lic. Benito Juárez)',
					 'fecha_inicio' => '2020-07-05', // Fecha de inicio de evento en formato AAAA-MM-DD
					 'hora_inicio'=>'08:30', // Hora Inicio del evento
					 'fecha_fin'=>'2020-07-10', // Fecha de fin de evento en formato AAAA-MM-DD
					 'hora_fin'=>'12:00', // Hora final del evento
					 'nombre'=>'Agencia de Viajes DXM', // Nombre del sitio
					 'url'=>'www.AgenciaDXM.com' // Url de la página
					);
					?>
					<div><center>
					 <button class="button load_more_button"><a href="<?php echo getGCalendarUrl($evento); ?>">Agendar</a>	</button>
					 <button class="button load_more_button"><a href="servicios.php">Continuar</a></button>
                    </div></center>

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