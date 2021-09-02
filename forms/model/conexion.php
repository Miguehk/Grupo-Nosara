<?php
    
    $password= 'root_seguridad01';
    $usuario= 'bsbmcons_root';
    $nombre_bd= 'bsbmcons_comprobacion';

    try {
        $base_datos = new PDO('mysql:host=localhost;dbname='.$nombre_bd,$usuario,$password);
    } catch (Exception $e) {
        echo "Error de conexion".$e->getMessage();
    }

?>
