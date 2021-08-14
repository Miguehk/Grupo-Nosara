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
        echo "Error, factura ya fue registrada";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cliente</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
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
                <li><a href="../redit/servicios.html">Servicios</a></li>
                <li><a href="../redit/shopper.html">Shopper</a></li>
                <li><a href="../redit/contacto.html">Contacto</a></li>
            </ul>
        </nav>
    </div>
    <div class="telefono">
        <img class="header-icon-telefono" src="../asset/telefono.png" alt="telefono">
        <h2 class="header-number">2682-0660</h2>
    </div>
</header>

    <main>

        <!---Comenzar con la recopilacion de datos ---->
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

    <!--Footer del sitio-->
    <footer class="footer">
    <div class="container">
        <p class="derechos">&copy Grupo Nosara 2021</p>
    </div>
</footer>
    <script src="js/formulario.js"></script>
    <script src="js/alert.js"></script>
    
    <!-------<script src="js/formulario.js"></script>------>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>

