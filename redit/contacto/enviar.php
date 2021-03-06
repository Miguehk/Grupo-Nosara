<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- CSS --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/master.css">
    <link rel="stylesheet" href="../../css/cons.css">
    <link rel="stylesheet" href="../../css/contacto.css">
    <link rel="stylesheet" href="../../css/whatsapp.css">
    <link rel="stylesheet" href="../../css/iconos.css">
    <!--- Fuentes --->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <!--- IMG ---> 
    <link rel="shorcut icon" type="image/x-icon" href="../../asset/ico.ico">
    <!--- APIS MAPAS --->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <title>Contacto</title>
</head>
<body>

<!---Header del sitio web-->
<header class="header">
    <div class="container logo-nav-container">
        <a href="#" class="logo"><img class="logo_nosara"  src="../../img/logo.png" alt="Logo Grupo Nosara"></a>
        <span class="menu-icon"><img class="lista_icon" src="../../asset/lista.svg" alt="menu"></span>
        <nav class="navigation">
            <ul>
                <li><a href="../../index.html">Inicio</a></li>
                <li><a href="../../redit/puntosventa.html">Puntos de Venta</a></li>
                <li><a href="../../redit/shopper.html">Shopper</a></li>
                <li><a href="../../redit/nosotros.html">Nosotros</a></li>
                <li><a href="../../redit/contacto/index.php">Contacto</a></li>
                <li class="facebook-icon"><a href="https://es-la.facebook.com/Gruponosaracr/"><img src="../../asset/facebook .png" alt="facebook"></a></li>
            </ul>
        </nav>
    </div>
    <div class="telefono">
    <img class="header-icon-telefono" src="../../asset/auricular(1).svg" alt="telefono">
        <h2 class="header-number-text">Ll??manos</h2>
        <h2 class="header-number">+5062682-0660</h2>
    </div>
</header>


<!------- Logo Oculto ----------->
<div class="logo-gp">
    <img src="../../img/logo.png" alt="" class="logo-gp_">
  </div>


<!--Main principal-->

<?php 

        $myemail = 'info@comexstudio.com';
        $name = $_POST['nombre'];
        $email = $_POST['email'];
        $message = $_POST['mensaje'];

        $to = $myemail;
        $email_subject = "Nuevo mensaje: $subject";
        $email_body = "Haz recibido un nuevo mensaje del sitio web Grupo Nosara. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
        $headers = "From: $email";

        mail($to, $email_subject, $email_body, $headers);

    ?>

<section class="contacto" id="contact_">
    <div class="contenedorc">

        <h3 class="titulo">Contacto</h3>

        <form method="post" action="enviar.php" class="formulario">

            <input type="text" placeholder="Nombre" nombre="nombre" required>
            <input type="text" placeholder="Correo" name="email" required>
            <textarea type="text" name="mensaje" placeholder="Mensaje" required></textarea>
            <input class="boton" type="submit" value="Enviar">

        </form>

    </div>
</section>


<!--Mapa de Google-->
<div id="map">
</div>

<!----- Whatsapp ---->
<a id="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=50685711727&amp;text=Hola!&nbsp;me&nbsp;podes&nbsp;ayudar?">
    <i> <img src="../../asset/whatsapp.png" alt=""></i>
</a>


<div class="barra">

</div>

<!--Footer-->
<footer class="footer">
    <div class="container" id="contaier_footer">
      <p class="footer-formulario-p"><span><img class="icon-location" src="../../asset/location.svg " alt=""></span> Nosara, Guanacaste, Costa Rica</p>
    </div>
    <div>
        <p class="footer-formulario-p" >Llenar formulario de Compra <a class="footer-formulario-a" href="../../forms/index.php"> Aqui</a></p>
    </div>
    <p class="derechos">&copy Grupo Nosara 2021</p>
</footer>

<!---- CHAT FACEBOOK ---->
    <!-- Messenger plugin del chat Code -->
    <div id="fb-root"></div>

    <!-- Your plugin del chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "802665263167348");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <!---------------------------------------------------------------->



<!---Scripts-->
<script src="../../forms/js/alert.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/7680039866.js" crossorigin="anonymous"></script></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../../js/scripts.js"></script>
<script src="../../js/mapa.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnInWAxY1G6X2NubLdlPofyPRzghF7EWA&callback=iniciarMap"></script>
</body>
</html>