<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cliente</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="css/master.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
</head>
<body>

    <img class="logo_img" src="img/logo.png" alt="">
    
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

    <script src="js/formulario.js"></script>
    <!-------<script src="js/formulario.js"></script>------>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>