<?php

// importar la conexion
require 'includes/config/database.php';
$db=conectarDB();
// crear email y passpword
$email="emilmarpatricia@gmail.com";
$password="1234";

$passwordHash=password_hash($password,PASSWORD_BCRYPT);
$query="INSERT INTO usuario_admi(email, password) VALUES('$email', '$passwordHash');";

// echo $query;

mysqli_query($db,$query);