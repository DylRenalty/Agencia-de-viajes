<?php
  session_start(); 
  $nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Gestion de Reserva DXM</title>
    <link rel="stylesheet" type="text/css" href="css/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/ bootstrap.css">
  <script src="jquery-3.1.1.min.js"></script>

  <script type="text/javascript" src="css/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="css/dist/js/bootstrap.js"></script>
  <script type="text/javascript" src="css/vendor/popper.min.js"></script>
  <script type="text/javascript" src="css/vendor/holder.min.js"></script>
  <script type="text/javascript" src="css/js/dist/modal.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-ingresation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        
        <h2>Detalles de la Reserva DXM</h2>
        <p class="lead">¡viaja seguro, cuida tu economia y disfruta de los mejores destinos!</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Información de Reserva</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h5>
                  Descripción
                </h5>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                  Paquete Turistico....................................$23,600.00
                  Descuento 20%.........................................-$4,600.00
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                  Servicio Extra Auto.......................................$900.00
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                  Servicio Extra Plan........................................$360.00
              </div>
            </li>
            
            <li class="list-group-item d-flex justify-content-between">
              <span>
                Total .............................................................$20,260.00
              </span>
            </li>
          </ul>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Informacion del Cliente</h4>
          <hr class="mb-4">
          <form class="needs-ingresation" noingresate>
            <h5>Nombre: <?php echo $_SESSION['nombre'];
      
              $name=$_SESSION['nombre'];
              $conexion=mysqli_connect("localhost", "root", "", "agenciadxm");
              $consulta="SELECT ApellidoP, ApellidoM, Edad, Telefono, Correo FROM cliente WHERE Nombre ='$name'";
              $resultado=mysqli_query($conexion, $consulta);

              $filas=mysqli_num_rows($resultado);
              if($filas>0)
              {
                while($row=mysqli_fetch_assoc($resultado)){
                  $apellidoP=$row['ApellidoP'];
                  $apellidoM=$row['ApellidoM'];
                  $edad=$row['Edad'];
                  $telefono=$row['Telefono'];
                  $email=$row['Correo'];
                }

                echo "<h5> Apellidos: ".$apellidoP." ".$apellidoM."</h5>";
                echo "<h5> Edad: ".$edad." años</h5>";
                echo "<h5> Telefono: ".$telefono."</h5>";
                echo "<h5> Correo: ".$email."</h5>";
                
              }
              else{
                echo "mal";
              }
              mysqli_free_result($resultado);
              mysqli_close($conexion); 
                     ?>
               
           </h5>
            <hr class="mb-4">

          <h4 class="mb-3">Información Adicional</h4>
            <div class="mb-3">
              <label for="address2">La siguiente información es totalente confidencial y es necesaria para completar<br> tu registro que esta realizando y poder generar su reserva de manera exitosa.<br><br>Dirección de Casa</label>
              <input type="text" class="form-control" id="address2" placeholder="ingresa tu direccion">
              <div class="invalid-feedback">
                  Por favor ingresa tu direccion.
                </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Pais</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Elige...</option>
                  <option>Mexico</option>
                  <option>Estados Unidos</option>
                  <option>Canada</option>
                </select>
                <div class="invalid-feedback">
                  Por favor ingresa tu pais.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Estado</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Elige...</option>
                  <option>Tlaxcala</option>
                  <option>CDMX</option>
                  <option>Puebla</option>
                </select>
                <div class="invalid-feedback">
                  Por favor ingresa tu estado.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Codigo postal</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  ingresa tu codigo postal.
                </div>
              </div>
            </div>
          <br>
            
            <hr class="mb-4">

            <h4 class="mb-3">Informacion de Pago</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Tarjeta de Credito</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Targeta de Debito</label>
              </div>
              
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nombre de la tarjeta</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Nombre como se muestra en la tarjeta</small>
                <div class="invalid-feedback">
                  El nombre de la tarjeta es requerido
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Numero de tarjeta</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  El numero de tu tarjeta es requerido
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Vigencia</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="04/2024" required>
                <div class="invalid-feedback">
                  La fecha de expiracion es requerida
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Codigo de seguridad es requerido 
                </div>
              </div>
            </div>
            <hr class="mb-4">
             <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
                        Realizar Reserva
                      </button>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Confirmar Reserva de Paquete</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <center>
                              ¿Esta seguro que desea realizar la reserva de su paquete?
                              <br>
                              es importante que sepa que una vez realizada la compra no habra cambios ni devoluciones
                              </center>
                            </div>
                            <div class="modal-footer">
                              <a class="btn btn-primary" href="factura1.pdf" target="_blank" role="button"  >Comprar</a>
                              <a class="btn btn-secondary" data-dismiss="modal" role="button" >Cancelar</a>
                            </div>
                          </div>
                        </div>
                      </div>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2019 - 2020 Agencia de Viajes DXM</p>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
<script type="text/javascript" src="css/js/dist/popover.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="css/js/dist/modal.js"></script>
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
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap ingresation styles to
          var forms = document.getElementsByClassName('needs-ingresation');

          // Loop over them and prevent submission
          var ingresation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-ingresated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>