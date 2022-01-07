<?php 
    session_start();

    $nombre=$_POST['nombre'];
    $apellidoP=$_POST['apellidoP'];
    $apellidoM=$_POST['apellidoM'];
    $edad=$_POST['edad'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
     
    
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellidoP'] = $apellidoP;
    $_SESSION['apellidoM'] = $apellidoM;
     $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://localhost:8080/AgenciaViajes/webresources/agenciadxm/registro/".$nombre."&".$apellidoP."&".$apellidoM."&".$edad."&".$telefono."&".$correo."&".$contrasena,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio Sesión</title>
    <link rel="stylesheet" type="text/css" href="css/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="css/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="css/dist/js/bootstrap.js"></script>
  <script type="text/javascript" src="css/vendor/popper.min.js"></script>
  <script type="text/javascript" src="css/vendor/holder.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <link href="css/signin.css" rel="stylesheet">
</head>
<body>
    <body class="text-center" >
    <form class="form-signin" action="validar.php" method="POST">
        <br><br>
        <br>
        <br>
        <br>

        <br>
        <br>
      <h1 class="h3 mb-3 font-weight-normal" style="color: white;">¡Vamos a comprobar tu registro!</h1>
      <br>
      <input type="text" name= "nombre" id="inputEmail" class="form-control" placeholder="Usuario" required>
      <br>
      <input type="password" name="contraseña" id="inputPassword" class="form-control" placeholder="Contrase&ntilde;a" required>
      <div class="checkbox mb-3">
        <label>
            <br>
          <input type="checkbox" value="remember-me"> Recordarme 
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    </form>
  </body>
</body>
</html>

