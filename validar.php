<?php 
    session_start();
    
    $nombre =$_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    //con esta madre yo estoy pasando la informacion con el usuario que se logeo
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellidoP'] = $apellidoP;

    //conectar con la base da datos
    $conexion=mysqli_connect("localhost", "root", "", "agenciadxm");
    $consulta="SELECT * FROM Cliente WHERE Nombre='$nombre' and Contrasena='$contraseña'";
    $resultado=mysqli_query($conexion, $consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas>0)
    {
    	header("location:index.php");
    }
    else{
    	header("location:login.html");
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>