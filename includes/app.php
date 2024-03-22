<?php
use Model\Activerecord;
require __DIR__ .'/../vendor/autoload.php';
$dotenv=Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();
// archivo que mande a llamar todo
require 'funciones.php';
require 'config/database.php';

$db=conectarDB();

// use Paginas\chat;

Activerecord::setDB($db);

// $db = mysqli_connect('localhost', 'id21858508_root', 'WebCompleto_2023', 'id21858508_hotelrosabela');