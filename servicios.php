<?php 
  session_start();
  //$_SESSION['cliente'] = $nombre;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Servicios</title>
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

	
	
	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/can.jpg)"></div>
		<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2><br>Servicios DXM</h2></div>
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
					<div class="section_subtitle"><h2 style="color: black">Servicios para incluir a tu destino</h2></div><br><br>
                    
	
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
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Mostrar todo</span></li>
										
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Precio</span></li>
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
								<img src="images/car.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="#">
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/1'), true );
				                     echo $data['Nombre'];
				                     echo "<br>";
				                     ?>

								</a></div>
								<div class="destination_subtitle"><p>
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/1'), true );
				                     echo $data['Descripcion'];
				                     echo "<br>";
				                     ?>
								</p></div>
								<div class="destination_price">
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/1'), true );
				                     echo $data['Costo'];
				                     echo "<br>";
				                     ?>
								</div>
							    <br><div><center>
								<button type="button" data-target="#exampleModal" data-toggle="modal" class="btn btn-info">Ver Detalles</button></center>
                              </div>
								
							</div>
						</div>
                            

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/cas.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="#">
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/2'), true );
				                     echo $data['Nombre'];
				                     echo "<br>";
				                     ?>
								</a></div>
								<div class="destination_subtitle"><p>
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/2'), true );
				                     echo $data['Descripcion'];
				                     echo "<br>";
				                     ?>
								</p></div>
								<div class="destination_price">
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/2'), true );
				                     echo $data['Costo'];
				                     echo "<br>";
				                     ?>
								</div>
								<br><div><center>
								<button type="button" data-target="#exampleModal" data-toggle="modal" class="btn btn-info">Ver Detalles</button></center>
                              </div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/mo1.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="#">
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/3'), true );
				                     echo $data['Nombre'];
				                     echo "<br>";
				                     ?>
								</a></div>
								<div class="destination_subtitle"><p>
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/3'), true );
				                     echo $data['Descripcion'];
				                     echo "<br>";
				                     ?>
								</p></div>
								<div class="destination_price">
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/3'), true );
				                     echo $data['Costo'];
				                     echo "<br>";
				                     ?>
								</div>
								<br><div><center>
								<button type="button" data-target="#exampleModal" data-toggle="modal" class="btn btn-info">Ver Detalles</button></center>
                              </div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/atw.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="#">
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/4'), true );
				                     echo $data['Nombre'];
				                     echo "<br>";
				                     ?>
								</a></div>
								<div class="destination_subtitle"><p>
								<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/4'), true );
				                     echo $data['Descripcion'];
				                     echo "<br>";
				                     ?></p></div>
								<div class="destination_price"><?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/4'), true );
				                     echo $data['Costo'];
				                     echo "<br>";
				                     ?></div>
								<br><div><center>
								<button type="button" data-target="#exampleModal2" data-toggle="modal" class="btn btn-info">Ver Detalles</button></center>
                              </div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/llevate.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="#">
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/5'), true );
				                     echo $data['Nombre'];
				                     echo "<br>";
				                     ?>
								</a></div>
								<div class="destination_subtitle"><p>
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/5'), true );
				                     echo $data['Descripcion'];
				                     echo "<br>";
				                     ?>
								</p></div>
								<div class="destination_price">
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/5'), true );
				                     echo $data['Costo'];
				                     echo "<br>";
				                     ?>
								</div>
								<br><div><center>
								<button type="button" data-target="#exampleModal2" data-toggle="modal" class="btn btn-info">Ver Detalles</button></center>
                              </div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="images/movi.jpg" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="#">
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/6'), true );
				                     echo $data['Nombre'];
				                     echo "<br>";
				                     ?>
								</a></div>
								<div class="destination_subtitle"><p>
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/6'), true );
				                     echo $data['Descripcion'];
				                     echo "<br>";
				                     ?></p></div>
								<div class="destination_price">
									<?php
				                     $data = json_decode( file_get_contents('http://localhost:8080/AgenciaViajes/webresources/agenciadxm/mostrarServicios/6'), true );
				                     echo $data['Costo'];
				                     echo "<br>";
				                     ?>
								</div>
                                <br><div><center>
								<button type="button" data-target="#exampleModal2" data-toggle="modal" class="btn btn-info">Ver Detalles</button></center>
                              </div>
							</div>
						</div>
						

					</div>
				</div>
			</div>
			<div class="row load_more_row">
				<div class="col">
					<div class="button load_more_button"><a href="carrito y pago.php">proceder al pago</a></div>
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

				<div class="d-flex justify-content-between align-items-center">
                          <div class="bd-example-popovers">

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 style="color: black" class="modal-title" id="exampleModalLabel">Detalle de la Renta</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body" style="color: black">
                                    Por favor especifique en que fechas dentro de sus vacaciones desea rentar el servicio para llevarlo a usted 
                                    <br><br>
                                    fechas de renta: 
                                   <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
									<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
									<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
									<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /><input type="text" name="daterange" value="05/07/2020 - 10/07/2020" />

									<script>
									$(function() {
									  $('input[name="daterange"]').daterangepicker({
									    opens: 'left'
									  }, function(start, end, label) {
									    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
									  });
									});
									</script>
								     <br><br>	
								     Descripcion del servicio <br><br>
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
								      <td>1 Auto Chevrolet</td>
								      <td>5 dias a partir del seleccionado</td>
								      <td>$900</td>
								    </tr>
								    <tr>
								      <th scope="row">2</th>
								      <td colspan="2">El auto sera entregado al responsable <br>que realizo la reserva la renta <br> corre a partir de las 12pm del dia </td>
								      <td></td>
								    </tr>
								    <tr>
								      <td colspan="3">Total</td>
								      <td colspan="2">$900</td>
								    </tr>
								  </tbody>
								</table>														
									<br>
									El auto que se esta ofertando para que usted pueda agregarlo a su paquete turistico es el que se muestra en el menu de servicios,<br> ¿Desea rentar este servicio? 
                                  </div>
                                  <div class="modal-footer">
                                  	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Rentar servicio</button>
                                  </div>
                                </div>
                              </div>
                            </div>






                      <div class="d-flex justify-content-between align-items-center">
                          <div class="bd-example-popovers">

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 style="color: black" class="modal-title" id="exampleModalLabel">Detalle de la Renta</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body" style="color: black">
                                    Por favor especifique en que fechas dentro de sus vacaciones desea rentar el servicio para llevarlo a usted 
                                 
								     <br><br>	
								     Descripcion del servicio <br><br>
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
								      <td>1 Paquete + chip de portabilidad</td>
								      <td>35 dias de servicio continuo</td>
								      <td>$360</td>
								    </tr>
								    <tr>
								      <th scope="row">2</th>
								      <td colspan="2">El chip sera entregado fisicamente a la persona <br>que realizo la reserva la renta <br> puede ser precencial o envio por correo </td>
								      <td></td>
								    </tr>
								    <tr>
								      <td colspan="3">Total</td>
								      <td colspan="2">$360</td>
								    </tr>
								  </tbody>
								</table>														
									<br>
									El auto que se esta ofertando para que usted pueda agregarlo a su paquete turistico es el que se muestra en el menu de servicios,<br> ¿Desea rentar este servicio? 
                                  </div>
                                  <div class="modal-footer">
                                  	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Rentar servicio</button>
                                  </div>
                                </div>
                              </div>
                            </div>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script type="text/javascript" src="css/js/dist/popover.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="css/js/dist/modal.js"></script>
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