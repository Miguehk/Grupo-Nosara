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
        header('Location: index.php');
    }else{
        echo "Error";
    }
    
?>