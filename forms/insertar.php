<?php

    if(!isset($_POST['oculto'])){
        exit();
    }

    include 'model/conexion.php';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $facelectronica = $_POST['facelectronica'];
    $electronico = $_POST['electronico'];

    $sentencia = $base_datos->prepare("INSERT INTO usuarios_registro(nombre_usuario,apellido_usuario,cedula_usuario,telefono_usuario,num_fac_electronica,correo_electronico_usuario) VALUES(?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$apellido,$cedula,$telefono,$facelectronica,$electronico]);

    if($resultado === true){
        //header('Location: index.php');
    }else{
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- CSS --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../forms/css/styles.css">
    <link rel="stylesheet" href="../forms/css/insertar.css">
    <link rel="stylesheet" href="../css/whatsapp.css">
    <link rel="stylesheet" href="../css/iconos.css">
    <!--- Fuentes --->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <!--- IMG --->
    <link rel="shorcut icon" type="image/x-icon" href="../asset/ico.ico">
    <title>Formulario de Cliente</title>
</head>
<body>
    
<!---Header del sitio web-->
<header class="header">
    <div class="container logo-nav-container">
        <a href="https://gruponosara.com/" class="logo"><img class="logo_nosara"  src="img/logo.png" alt="Logo Grupo Nosara"></a>
        <span class="menu-icon"><img src="../asset/flecha.png" alt=""></span>
        <nav class="navigation">
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="../redit/puntosventa.html">Puntos de Venta</a></li>
                <li><a href="../redit/shopper.html">Shopper</a></li>
                <li><a href="../redit/nosotros.html">Nosotros</a></li>
                <li><a href="../redit/contacto.html">Contacto</a></li>
                <li class="facebook-icon"><a href="https://es-la.facebook.com/Gruponosaracr/"><img class="facebook-icon-img" src="../asset/facebook .png" alt="facebook"></a></li>
            </ul>
        </nav>
    </div>
    <div class="telefono">
        <img class="header-icon-telefono" src="../asset/auricular(1).svg" alt="telefono">
        <h2 class="header-number-text">Llámanos</h2>
        <h2 class="header-number">+5062682-0660</h2>
    </div>
</header>

    <main>

        <!---Comenzar con la recopilacion de datos ---->
        <h1 class="header-forms">Formulario de Participación</h1>
        
        <form method="POST" action="insertar.php" class="formulario" id="formulario">

            <!---Grupo Nombre-->
            <div class="formulario__grupo" id="grupo__nombre">
                <label for="nombre" class="formulario__label">Nombre</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="nombre">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El nombre solo puede contener letras, sin numeros.</p>
            </div>

            <!---Grupo Apellido-->
            <div class="formulario__grupo" id="grupo__apellido">
                <label for="apellido" class="formulario__label">Apellido</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="apellido">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El nombre solo puede contener letras, sin numeros.</p>
            </div>

            <!---Grupo Cedula-->
            <div class="formulario__grupo" id="grupo__cedula">
                <label for="cedula" class="formulario__label">Cedula</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="cedula" id="cedula" placeholder="cedula">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                <p class="formulario__input-error">Solo numeros</p>
                </div>

            <!---Grupo Telefono-->
            <div class="formulario__grupo" id="grupo__telefono">
                <label for="telefono" class="formulario__label">Telefono</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="telefono">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Solo numeros</p>
            </div>

            <!---Grupo Num Factura electronica-->
            <div class="formulario__grupo" id="grupo__facelectronica">
                <label for="facelectronica" class="formulario__label">Nº de factura electronica</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="facelectronica" id="facelectronica" placeholder="consecutivo">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                <p class="formulario__input-error">Deben contner solo numeros y con 20 digitos</p>
                </div>

                <!---Grupo Correo electronico-->
                <div class="formulario__grupo" id="grupo__electronico">
                <label for="electronico" class="formulario__label">Correo Electronico</label>
                <div class="formulario__grupo-input">
                    <input type="mail" class="formulario__input" name="electronico" id="electronico" placeholder="correo@electronico.com">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">La dirrecion de correo es incorrecta</p>
                    </div>

                <!---Grupo Validacion General-->    
                <div class="formulario__mensaje" id="formulario__mensaje">
                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellene los todos los campos</p>
                </div>

                <input type="hidden" name="oculto" values="2">
                
                <!---Btn de envio de datos--->
                <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <button type="submit" value="Enviar" name="Fenvio" class="formulario__btn">Enviar</button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">El formulario se envio exitosamente!</p>
                </div>
        </form>
    </main>

      <!----- Whatsapp ---->
      <a id="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=50685711727&amp;text=Hola!&nbsp;me&nbsp;podes&nbsp;ayudar?">
            <i> <img src="../asset/whatsapp.png" alt=""></i>
        </a>



    <!--Footer del sitio-->
    <footer class="footer">
    <div class="container">
        <p class="footer-formulario-p"><span><img class="icon-location" src="../asset/location.svg" alt=""></span> Nosara, Guanacaste, Costa Rica</p>
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



    <!--Script--->
    <script src="../js/scripts.js"></script>
    <script src="js/formulario.js"></script>
    <script src="js/alert.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>

