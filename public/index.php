<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\eventosController;
use Controllers\CentroconsumoController;
use Controllers\EmpleadosController;
use Controllers\SalonesController;
use Controllers\PaginaController;
// use Model\Usuario;
use MVC\Router;
$router= new Router();

$router->get('/', [PaginaController::class, 'index']);
// zona privada
$router->get('/admin', [CentroconsumoController::class, 'admin']);
$router->get('/eventos/crear', [eventosController::class, 'crear']);
$router->post('/eventos/crear', [eventosController::class, 'crear']);
$router->get('/eventos/actualizar', [eventosController::class, 'actualizar']);
$router->post('/eventos/actualizar', [eventosController::class, 'actualizar']);
$router->get('/eventos/mostrar', [eventosController::class, 'index']);
$router->get('/centrosconsumo/crear', [CentroconsumoController::class, 'crear']);
$router->get('/centrosconsumo/mostrar', [CentroconsumoController::class, 'index']);
$router->post('/centrosconsumo/crear', [CentroconsumoController::class, 'crear']);
$router->get('/centrosconsumo/actualizar', [CentroconsumoController::class, 'actualizar']);
$router->post('/centrosconsumo/actualizar', [CentroconsumoController::class, 'actualizar']);
$router->post('/centrosconsumo/eliminar', [CentroconsumoController::class, 'eliminar']);

// empleados
$router->get('/empleados/crear', [EmpleadosController::class, 'crear']);
$router->post('/empleados/crear', [EmpleadosController::class, 'crear']);
$router->get('/empleados/actualizar', [EmpleadosController::class, 'actualizar']);
$router->post('/empleados/actualizar', [EmpleadosController::class, 'actualizar']);
$router->get('/empleados/mostrar', [EmpleadosController::class, 'index']);
$router->post('/empleados/eliminar', [EmpleadosController::class, 'eliminar']);
$router->post('/empleados/eliminar', [EmpleadosController::class, 'eliminar']);

// salones
$router->get('/salones/crear', [SalonesController::class, 'crear']);
$router->post('/salones/crear', [SalonesController::class, 'crear']);
$router->get('/salones/actualizar', [SalonesController::class, 'actualizar']);
$router->post('/salones/actualizar', [SalonesController::class, 'actualizar']);
$router->get('/salones/mostrar', [SalonesController::class, 'index']);
$router->post('/salones/eliminar', [SalonesController::class, 'eliminar']);
$router->post('/salones/eliminar', [SalonesController::class, 'eliminar']);

// zona publica

$router->comprobarRutas();