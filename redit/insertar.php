<?php

    if(!isset($_POST['oculto'])){
        exit();
    }

    include 'conexion.php';
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $sentencia = $base_datos->prepare("INSERT INTO usuario(nombre,correo,mensaje) VALUES(?,?,?);");
    $resultado = $sentencia->execute([$nombre,$correo,$mensaje]);


    if($resultado === true){
        //header('Location: index.php');
    }else{
        echo "Error";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/cons.css">
    <link rel="stylesheet" href="../css/contacto.css">
    <link rel="shorcut icon" type="image/x-icon" href="../asset/ico.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet"> 
    <title>Contacto</title>
</head>
<body>

<!---Header del sitio web-->
<header class="header">
    <div class="container logo-nav-container">
        <a href="#" class="logo"><img class="logo_nosara"  src="../img/logo.png" alt="Logo Grupo Nosara"></a>
        <span class="menu-icon"><img src="../asset/flecha.png" alt=""></span>
        <nav class="navigation">
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="puntosventa.html">Puntos de Venta</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="shopper.html">Shopper</a></li>
                <li><a href="nosotros.html">Nosotros</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li class="facebook-icon"><a href="https://es-la.facebook.com/Gruponosaracr/"><img src="../asset/facebook .png" alt="facebook"></a></li>
            </ul>
        </nav>
    </div>
    <div class="telefono">
        <img class="header-icon-telefono" src="../asset/telefono.png" alt="telefono">
        <h2 class="header-number">2682-0660</h2>
    </div>
</header>

<!--Main principal-->

<section class="contacto">
    <div class="contenedorc">
        <h3 class="titulo">Contacto</h3>
        <form action="POST"  action="insertar.php" class="formulario" id="formulario">
            
            <input type="text" placeholder="Nombre" nombre="nombre" required>


            <input type="text" placeholder="Correo" name="correo" required>
            

            <textarea name="mensaje" placeholder="Mensaje"></textarea>

            <input type="hidden" name="oculto" values="2">
            
            <input class="boton" type="submit" value="Enviar">


        </form>
    </div>
</section>


<!--Mapa de Google-->
<div id="map">
</div>

<!--Footer-->
<footer class="footer">
    <div class="container">
        <p class="derechos">&copy Grupo Nosara 2021</p>
    </div>
    <div>
        <p class="footer-formulario-p" >Llenar formulario de Compra <a class="footer-formulario-a" href="../forms/index.php"> Aqui</a></p>
    </div>
</footer>


<!---Scripts-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/scripts.js"></script>
<script src="../js/mapa.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
</body>
</html>