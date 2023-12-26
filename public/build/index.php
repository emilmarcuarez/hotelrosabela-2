<?php 

require_once __DIR__ . '/../includes/app.php';


use Controllers\PaginasController;
use Model\Usuario;
use MVC\Router;
$router= new Router();
$router->get('/', [PaginasController::class, 'index']);
// zona privada

// zona publica

$router->comprobarRutas();