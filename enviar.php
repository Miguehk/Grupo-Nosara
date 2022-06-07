<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="master.css">
    <title>Formulario - Mensaje enviado</title>
</head>
<body>

    <?php 

        $myemail = 'mpaniagua@com-ex.pro';
        $name = $_POST['nombre'];
        $email = $_POST['email'];
        $message = $_POST['mensaje'];

        $to = $myemail;
        $email_subject = "Nuevo mensaje: $subject";
        $email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
        $headers = "From: $email";

        mail($to, $email_subject, $email_body, $headers);
        echo "El mensaje se ha enviado correctamente";

    ?>

        <center>
            <h1>Contacto</h1>
        <form method="post" action="enviar.php">
            <input type="text" name="nombre" placeholder="NOMBRE">
            <input type="email" name="email" placeholder="CORREO">
            <br>
            <textarea type="text" name="mensaje" placeholder="MENSAJE"></textarea>
            <br>
            <input type="submit" value="ENVIAR">
        </form>
        </center>
    
</body>
</html>