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
use Controllers\chatController;
use Controllers\ComentarioController;
use Controllers\chatbotController;
use Controllers\ReservaController;
// use Model\Usuario;
use MVC\Router;
$router= new Router();

$router->get('/', [PaginaController::class, 'index']);
// zona privada
$router->get('/error', [CentroconsumoController::class, 'error']);
$router->get('/admin', [CentroconsumoController::class, 'admin']);
$router->post('/admin', [CentroconsumoController::class, 'admin']);
$router->get('/eventos/crear', [eventosController::class, 'crear']);
$router->post('/eventos/crear', [eventosController::class, 'crear']);
$router->get('/eventos/actualizar', [eventosController::class, 'actualizar']);
$router->post('/eventos/actualizar', [eventosController::class, 'actualizar']);
$router->get('/eventos/mostrar', [eventosController::class, 'index']);
$router->post('/eventos/eliminar', [eventosController::class, 'eliminar']);

// centros de consumo
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

// chef
$router->get('/chef/crear', [ChefController::class, 'crear']);
$router->post('/chef/crear', [ChefController::class, 'crear']);
$router->get('/chef/actualizar', [ChefController::class, 'actualizar']);
$router->post('/chef/actualizar', [ChefController::class, 'actualizar']);
$router->get('/chef/mostrar', [ChefController::class, 'index']);
$router->post('/chef/eliminar', [ChefController::class, 'eliminar']);


// salones
$router->get('/salones/crear', [SalonesController::class, 'crear']);
$router->post('/salones/crear', [SalonesController::class, 'crear']);
$router->get('/salones/actualizar', [SalonesController::class, 'actualizar']);
$router->post('/salones/actualizar', [SalonesController::class, 'actualizar']);
$router->get('/salones/mostrar', [SalonesController::class, 'index']);
$router->post('/salones/eliminar', [SalonesController::class, 'eliminar']);

// habitaciones
$router->get('/habitaciones/crear', [HabitacionesController::class, 'crear']);
$router->post('/habitaciones/crear', [HabitacionesController::class, 'crear']);
$router->get('/habitaciones/actualizar', [HabitacionesController::class, 'actualizar']);
$router->post('/habitaciones/actualizar', [HabitacionesController::class, 'actualizar']);
$router->get('/habitaciones/mostrar', [HabitacionesController::class, 'index']);
$router->post('/habitaciones/eliminar', [HabitacionesController::class, 'eliminar']);

// reservas
$router->get('/reservas/crear', [ReservaController::class, 'crear']);
$router->get('/reservas/mostrar', [ReservaController::class, 'index']);
$router->post('/reservas/crear', [ReservaController::class, 'crear']);
$router->get('/reservas/confirmar', [ReservaController::class, 'confirmar']);
$router->post('/reservas/confirmar', [ReservaController::class, 'confirmar']);
$router->post('/reservas/eliminar', [ReservaController::class, 'eliminar']);


// api
// API de Citas
$router->get('/api/servicios', [ApiController::class, 'index']);
$router->post('/api/reservas', [ApiController::class, 'guardar']);
// zona publica
// $router->get('/', [PaginaController::class, 'index']);
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
$router->get('/gestion', [PaginaController::class, 'gestion']);
$router->get('/reservas-usuario', [PaginaController::class, 'reservasusu']);
$router->post('/reservas-usuario', [PaginaController::class, 'reservasusu']);
$router->post('/gestion', [PaginaController::class, 'gestion']);
$router->get('/pdf', [PaginaController::class, 'pdf']);
$router->get('/crearPdf', [PaginaController::class, 'crearPdf']);
$router->get('/prueba2', [PaginaController::class, 'prueba2']);
$router->get('/cancelar_reserva', [PaginaController::class, 'cancelar_reserva']);
$router->post('/cancelar_reserva', [PaginaController::class, 'cancelar_reserva']);
$router->get('/verPdf', [PaginaController::class, 'verPdf']);

// chats
$router->post('/chat', [chatController::class, 'chat']);
$router->post('/actualizar-chat', [chatController::class, 'actualizarChat']);
$router->get('/actualizar-chat', [chatController::class, 'actualizarChat']);
$router->post('/chat2', [chatController::class, 'chat2']);
$router->post('/actualizarChatServidor', [chatController::class, 'actualizarChatServidor']);
$router->get('/actualizarChatServidor', [chatController::class, 'actualizarChatServidor']);
$router->get('/chats/mostrar', [chatController::class, 'index']);
$router->get('/chats/mostrar2', [chatController::class, 'index2']);
$router->get('/chats/responder', [chatController::class, 'chatresponder']);
$router->post('/chats/responder', [chatController::class, 'chatresponder']);
$router->get('/responder', [chatController::class, 'responder']);
$router->post('/responder', [chatController::class, 'responder']);

// chatbot
$router->get('/chatbot', [chatbotController::class, 'actualizarChat']);
$router->post('/chatbot', [chatbotController::class, 'actualizarChat']);
// comentarios
$router->post('/crear', [ComentarioController::class, 'crear']);
$router->get('/actualizar-comentarios', [ComentarioController::class, 'actualizarComentarios']);
$router->post('/actualizar-comentarios', [ComentarioController::class, 'actualizarComentarios']);


// login y sigin
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);
$router->get('/loginusuario', [UsuariosController::class, 'loginusuario']);
$router->post('/loginusuario', [UsuariosController::class, 'loginusuario']);
$router->get('/siginusuario', [UsuariosController::class, 'siginusuario']);
$router->post('/siginusuario', [UsuariosController::class, 'siginusuario']);
$router->get('/actualizar-usuario', [UsuariosController::class, 'actualizar']);
$router->post('/actualizar-usuario', [UsuariosController::class, 'actualizar']);

$router->comprobarRutas();