<?php

// conectar bd
function conectarDB() : mysqli{
    $db=new mysqli('localhost', 'root', 'root', 'hotelrosabela');

    if(!$db){
        echo "No se pudo conectar";
        exit;
    }

    return $db;
}