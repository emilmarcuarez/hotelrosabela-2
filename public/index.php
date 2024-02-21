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
use Controllers\PremiosController;
use Controllers\ReservaController;
// use Model\Usuario;
use MVC\Router;
$router= new Router();

$router->get('/', [PaginaController::class, 'index']);
$router->post('/', [PaginaController::class, 'index']);

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


// confirmar cuenta por el token del email
$router->get('/confirmar-cuenta', [LoginController::class, 'confirmar']);
$router->get('/mensaje', [LoginController::class, 'mensaje']);
// reservas
$router->post('/reserva/recibida', [ReservaController::class, 'actReserva']);
$router->get('/reservas/mostrar', [ReservaController::class, 'index']);
$router->get('/reservas/datosReserva', [ReservaController::class, 'datosReserva']);
$router->post('/reservas/datosReserva', [ReservaController::class, 'datosReserva']);
$router->get('/reservas/datosReserva2', [ReservaController::class, 'datosReserva2']);
$router->post('/reservas/datosReserva2', [ReservaController::class, 'datosReserva2']);
$router->post('/reservas/crear', [ReservaController::class, 'crear']);
$router->post('/reservas/confirmar', [ReservaController::class, 'confirmar']);
$router->post('/reservas/eliminar', [ReservaController::class, 'eliminar']);
$router->post('/reservas/buscar', [ReservaController::class, 'buscar']);
$router->get('/mostrar_usuario', [ReservaController::class, 'mostrar_usuario']);
// administrador --- desde el panel
// $router->post('/auth/mostrar', [LoginController::class, 'index']);
$router->get('/auth/mostrar', [LoginController::class, 'index']);
$router->get('/auth/crearlogin', [LoginController::class, 'crearlogin']);
$router->post('/auth/crearlogin', [LoginController::class, 'crearlogin']);
$router->get('/auth/actualizarAdmin', [LoginController::class, 'actualizarAdmin']);
$router->post('/auth/actualizarAdmin', [LoginController::class, 'actualizarAdmin']);
// $router->get('/auth/actualizarUsuario', [LoginController::class, 'actualizarUsuario']);

$router->post('/auth/eliminar', [LoginController::class, 'eliminar']);


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
$router->post('/contacto', [PaginaController::class, 'contacto']);
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
// $router->get('/cancelar_reserva', [PaginaController::class, 'cancelar_reserva']);
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
$router->post('/crear-comentario', [ComentarioController::class, 'crear']);
$router->get('/actualizar-comentarios', [ComentarioController::class, 'actualizarComentarios']);
$router->post('/actualizar-comentarios', [ComentarioController::class, 'actualizarComentarios']);

// Recuperar password
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);
$router->get('/recuperar', [LoginController::class, 'recuperar']);
$router->post('/recuperar', [LoginController::class, 'recuperar']);
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

// usuarios administradores
$router->get('/auth/mostrar', [LoginController::class, 'index']);
$router->get('/auth/mostrarusuarios', [LoginController::class, 'mostrarusuarios']);
$router->get('/auth/crearlogin', [LoginController::class, 'crearlogin']);
$router->post('/auth/crearlogin', [LoginController::class, 'crearlogin']);
$router->post('/actualizar-premio', [UsuariosController::class, 'actPremio']); //se uso el premio
$router->post('/auth/eliminarUsuario', [UsuariosController::class, 'eliminar']);
$router->get('/auth/actualizarUsuario', [UsuariosController::class, 'actualizarUsuario']);
$router->post('/auth/actualizarUsuario', [UsuariosController::class, 'actualizarUsuario']);

// noches de los usuarios
$router->get('/noches', [UsuariosController::class, 'noches']);
// premios de los usuarios
$router->get('/premios', [UsuariosController::class, 'premios']);
// registrar premio
$router->post('/crearPremio', [UsuariosController::class, 'crearPremio']);


// premios registrados
$router->get('/premios/mostrar', [PremiosController::class, 'index']);
$router->get('/premios/crear', [PremiosController::class, 'crear']);
$router->post('/premios/crear', [PremiosController::class, 'crear']);
$router->get('/premios/actualizar', [PremiosController::class, 'actualizar']);
$router->post('/premios/actualizar', [PremiosController::class, 'actualizar']);
$router->post('/premios/eliminar', [PremiosController::class, 'eliminar']);

// comentarios mostrar y eliminar
$router->get('/comentarios/mostrar', [ComentarioController::class, 'index']);
$router->post('/comentarios/eliminar', [ComentarioController::class, 'eliminar']);
$router->comprobarRutas();