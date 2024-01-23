<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ApiController;
use Controllers\eventosController;
use Controllers\CentroconsumoController;
use Controllers\EmpleadosController;
use Controllers\SalonesController;
use Controllers\PaginaController;
use Controllers\UsuariosController;
use Controllers\HabitacionesController;
use Controllers\ChefController;
use Controllers\LoginController;
use Model\Habitaciones;
// use Model\Usuario;
use MVC\Router;
$router= new Router();

$router->get('/', [PaginaController::class, 'index']);
// zona privada
$router->get('/error', [CentroconsumoController::class, 'error']);
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

// chef
$router->get('/chef/crear', [ChefController::class, 'crear']);
$router->post('/chef/crear', [ChefController::class, 'crear']);
$router->get('/chef/actualizar', [ChefController::class, 'actualizar']);
$router->post('/chef/actualizar', [ChefController::class, 'actualizar']);
$router->get('/chef/mostrar', [ChefController::class, 'index']);
$router->post('/chef/eliminar', [ChefController::class, 'eliminar']);
$router->post('/chef/eliminar', [ChefController::class, 'eliminar']);


// salones
$router->get('/salones/crear', [SalonesController::class, 'crear']);
$router->post('/salones/crear', [SalonesController::class, 'crear']);
$router->get('/salones/actualizar', [SalonesController::class, 'actualizar']);
$router->post('/salones/actualizar', [SalonesController::class, 'actualizar']);
$router->get('/salones/mostrar', [SalonesController::class, 'index']);
$router->post('/salones/eliminar', [SalonesController::class, 'eliminar']);
$router->post('/salones/eliminar', [SalonesController::class, 'eliminar']);

// habitaciones
$router->get('/habitaciones/crear', [HabitacionesController::class, 'crear']);
$router->post('/habitaciones/crear', [HabitacionesController::class, 'crear']);
$router->get('/habitaciones/actualizar', [HabitacionesController::class, 'actualizar']);
$router->post('/habitaciones/actualizar', [HabitacionesController::class, 'actualizar']);
$router->get('/habitaciones/mostrar', [HabitacionesController::class, 'index']);
$router->post('/habitaciones/eliminar', [HabitacionesController::class, 'eliminar']);
$router->post('/habitaciones/eliminar', [HabitacionesController::class, 'eliminar']);


// api
// API de Citas
$router->get('/api/servicios', [ApiController::class, 'index']);
$router->post('/api/reservas', [ApiController::class, 'guardar']);
// zona publica
$router->get('/nosotros', [PaginaController::class, 'nosotros']);
$router->get('/centros', [PaginaController::class, 'centros']);
$router->get('/centro', [PaginaController::class, 'centro']);
$router->get('/salones', [PaginaController::class, 'salones']);
$router->get('/salon', [PaginaController::class, 'salon']);
$router->get('/eventos', [PaginaController::class, 'eventos']);
$router->get('/evento', [PaginaController::class, 'evento']);
$router->get('/empleados', [PaginaController::class, 'empleados']);
$router->get('/contacto', [PaginaController::class, 'contacto']);
$router->get('/habitacion', [PaginaController::class, 'habitacion']);
$router->get('/habitaciones', [PaginaController::class, 'habitaciones']);
$router->get('/habitaciones_s', [PaginaController::class, 'habitaciones_s']);

// login y sigin
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);
$router->get('/loginusuario', [UsuariosController::class, 'loginusuario']);
$router->post('/loginusuario', [UsuariosController::class, 'loginusuario']);
$router->get('/siginusuario', [UsuariosController::class, 'siginusuario']);
$router->post('/siginusuario', [UsuariosController::class, 'siginusuario']);
$router->comprobarRutas();