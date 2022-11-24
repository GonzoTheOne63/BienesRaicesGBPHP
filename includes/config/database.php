<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', '', 'bienes_raices');

    /* if($db) {
        echo "Conexión Correcta";
    } else {
        echo "Conexión Fallida";
    } // SOLO sirve paa comprobar la conexión a la BD */
    
    if(!$db) {
        echo "Error de Conexión";
        exit;
    }
    return $db;
}