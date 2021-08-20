<?php
    /*Variables de conexion*/ 
    $password= '';
    $usuario= 'root';
    $nombre_bd= 'comprobacion';

    try {
        $base_datos = new PDO('mysql:host=localhost;dbname='.$nombre_bd,$usuario,$password);
    } catch (Exception $e) {
        echo "Error de conexion".$e->getMessage();
    }

?>
