<?php

namespace Controllers;

use Model\Beneficio;
use Model\Premios;
use MVC\Router;
use Model\Evento;
use Model\Habitaciones;
use Model\Salon;
use Model\Chef;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Empleados;
use Model\Centroconsumo;
use Model\Chat;
use Model\Reserva;
use Model\ReservaHabitacion;
use Model\Usuario;
use Model\Comentarios;
use Model\Eventos_centros_consumo;
use Model\Eventos_salon;
use Model\Premios_usuario;
use PHPMailer\PHPMailer\PHPMailer;
class PaginaController
{

    //pagina index 

    public static function index(Router $router)
    {

        $eventos = Evento::get(4);
        $result = Reserva::reservas();
        $habitaciones = Habitaciones::get(2);
        $salones = Salon::get(2);
        $premios_usu = Premios_usuario::all();
        $inicio = true; //para que aparezca el header
        $no2 = true;
        $router->render('paginas/index', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'premios_usu' => $premios_usu,
            'eventos' => $eventos,
            'habitaciones' => $habitaciones,
            'salones' => $salones,
            'inicio' => $inicio,
            'no2' => $no2
        ]);
    }
    public static function rbpremios(Router $router){

        $no=true;
        $no2=true;
        $router->render('paginas/rbpremios', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
         'no'=>$no,
         'no2'=>$no2
        ]);
    }
    public static function nosotros(Router $router)
    {
        $inicio = true; //para que aparezca el header
        $no2 = true;
        $no = true;
        $premios_usu = Premios_usuario::all();
        $router->render('paginas/nosotros', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'no' => $no,
            'no2' => $no2,
            'premios_usu' => $premios_usu
        ]);
    }
    public static function centros(Router $router)
    {
        $centros = Centroconsumo::all();
        $chefs = Chef::all();
        $premios_usu = Premios_usuario::all();
        $no2 = true;
        $no = true;
        $centrovar = true;
        $router->render('paginas/centros', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'centros' => $centros,
            'premios_usu' => $premios_usu,
            'chefs' => $chefs,
            'no2' => $no2,
            'no' => $no,
            'centrovar'=>$centrovar
        ]);
    }
    public static function salones(Router $router)
    {

        $salones = Salon::all();
        $no2 = true;
        $no = true;
        $premios_usu = Premios_usuario::all();
        $router->render('paginas/salones', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'salones' => $salones,
            'premios_usu' => $premios_usu,
            'no2' => $no2,
            'no' => $no
        ]);
    }
    public static function fidelizacion(Router $router)
    {

        $no2 = true;
        $no = true;
        $router->render('paginas/fidelizacion', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'no2' => $no2,
            'no' => $no
        ]);
    }
    public static function acumular(Router $router)
    {

        $no2 = true;
        $no = true;
        $router->render('paginas/acumular', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'no2' => $no2,
            'no' => $no
        ]);
    }
    public static function eventos(Router $router)
    {
        $eventos = Evento::all();
        $no2 = true;
        $no = true;
        $premios_usu = Premios_usuario::all();
        $router->render('paginas/eventos', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'eventos' => $eventos,
            'premios_usu' => $premios_usu,
            'no2' => $no2,
            'no' => $no
        ]);
    }
    public static function empleados(Router $router)
    {
        $empleados = Empleados::all();
        $no2 = true;
        $no = true;
        $premios_usu = Premios_usuario::all();
        $router->render('paginas/empleados', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'empleados' => $empleados,
            'premios_usu' => $premios_usu,
            'no2' => $no2,
            'no' => $no2
        ]);
    }
    public static function contacto(Router $router)
    {

        $no2 = true;
        $no = true;
        $premios_usu = Premios_usuario::all();
        $mensaje = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $respuestas = $_POST['contacto']; //Se pasan las respuestas del formulario (se reciben)

            // CREAR INSTANCIA DE PHPMAILER
            $mail = new PHPMailer();
      
            $mail->isSMTP();
            $mail->Host = 'smtp.office365.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'emilmarpatricia2@outlook.es'; // Tu dirección de correo de Outlook
            $mail->Password = 'pascua2102'; // Tu contraseña
            $mail->SMTPSecure = 'tls'; // Puedes cambiar a 'ssl' si es necesario
            $mail->Port = 587; // O 465 para SSL/TLS
            
    
            $mail->setFrom('emilmarpatricia2@outlook.es');
       
            $mail->addAddress('emilmarpatricia@gmail.com'); // Dirección de correo del destinatario
            $mail->Subject = 'Mensaje nuevo desde la pagina web del Hotel RosaBela';

            // habilitar html
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            // definir contenido

            $contenido = '<html>';
            $contenido .= "<head>";
            $contenido .= "<style>";
            $contenido .= "p,h3 {font-family: Arial, sans-serif; font-size: 16px; color: #333;}";
            $contenido .= "h3 {text-align: center; color: white; background: #be315c; padding: 1rem; margin:0;}";
            $contenido .= "img {display: block; max-width: 200px; height: auto; display:flex; justify-content:center; align-items:center; margin: auto;}";
            $contenido .= "div {padding:1rem; background-color: #e6e6e6;}";
            $contenido .= "</style>";
            $contenido .= "</head>";
            $contenido .= "<body>";
            $contenido.="<h3>Hotel Rosa Bela & Convention center</h3>";
            $contenido .= "<div>";
            $contenido .= '<p>Tienes un nuevo mensaje desde el formulario de contacto</p>';
            $contenido .= '<p>Nombre: ' . $respuestas['nombre'] . '</p>';
            $contenido .= '<p>Apellido: ' . $respuestas['apellido'] . '</p>';
            // enviar de forma condicional unos campos de email y tlf
            if ($respuestas['contactar'] === 'telefono') {
                $contenido .= '<p>Eligio ser contactado por Telefono: </p>';
                $contenido .= '<p>Telefono: ' . $respuestas['telefono'] . '</p>';
                $contenido .= '<p>Fecha de contacto: ' . $respuestas['fecha'] . '</p>';
                $contenido .= '<p>Hora: ' . $respuestas['hora'] . '</p>';
            } else {
                // Es email, entonces agregamos el campo email 
                $contenido .= '<p>Eligio ser contactado por email: </p>';
                $contenido .= '<p>Email: ' . $respuestas['email'] . '</p>';
            }

            $contenido .= '<p>Mensaje: ' . $respuestas['mensaje'] . '</p>';
            $contenido .= '<p>Prefiere ser contactado por: ' . $respuestas['contactar'] . '</p>';
            $contenido .= "</div>";
            $contenido .= "<div><img src='https://hotelrosabela.000webhostapp.com/build/img/logopng.png' alt='Imagen'></div>"; // Ruta de la imagen
          
            $contenido .= "</body>";
            $contenido .= '</html>';
            $mail->Body = $contenido;
            // $mail->AltBody= 'Esto es tecto alternativo sin HTML';
            // Enviar el email
            if ($mail->send()) {
                $mensaje = "Mensaje enviado correctamente";
            } else {
                $mensaje = "El mensaje no se pudo enviar...";
            }
        }


        $router->render('paginas/contacto', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'no2' => $no2,
            'no' => $no,
            'premios_usu' => $premios_usu,
            'mensaje'=>$mensaje
        ]);
    }
    public static function habitacion(Router $router)
    {
        $id = validarORedireccionar('/habitaciones');
        $imghabitaciones = true;
        $no = true;
        $no2 = true;
        $habitacion = Habitaciones::find($id);
        $premios_usu = Premios_usuario::all();
        $router->render('paginas/habitacion', [
            'habitacion' => $habitacion,
            'imghabitaciones' => $imghabitaciones,
            'premios_usu' => $premios_usu,
            'no' => $no,
            'no2' => $no2
        ]);
    }
    public static function habitaciones(Router $router)
    {
        $habitaciones = Habitaciones::all();
        // $imghabitaciones = true;
        $no = true;
        $no2 = true;
        $premios_usu = Premios_usuario::all();
        $router->render('paginas/habitaciones', [
            'habitaciones' => $habitaciones,
            // 'imghabitaciones' => $imghabitaciones,
            'premios_usu' => $premios_usu,
            'no' => $no,
            'no2' => $no2
        ]);
    }
    public static function habitaciones_s(Router $router)
    {
        session_start();
        $no = true;
        $no2 = true;
        $premios_usu = Premios_usuario::all();
        $beneficios=Beneficio::all();
        if($_SESSION['usuario_id']){
            $usuario=Usuario::find($_SESSION['usuario_id']);
        }
        else{
            $usuario='no_disponible';
        }
        $router->render('paginas/habitaciones_s', [
            'usuario'=>$usuario,
            // 'id' => $_SESSION['usuario_id'],
            'no' => $no,
            'beneficios' => $beneficios,
            'premios_usu' => $premios_usu,
            'no2' => $no2
        ]);
    }
<<<<<<< HEAD
=======

    // gestion del perfil
    public static function gestion(Router $router)
    {
        $no = true;
        $no2 = true;
        session_start();
        $id = $_SESSION['usuario_id'];
        $usuario = Usuario::find($id);
        $premios_usu = Premios_usuario::all();
        $router->render('paginas/gestion', [
            'no' => $no,
            'no2' => $no2,
            'usuario' => $usuario,
            'premios_usu' => $premios_usu
        ]);
    }
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
    public static function pdf(Router $router)
    {

        $router->render('paginas/pdf', []);
    }
    public static function prueba2(Router $router)
    {
        $reserva = Reserva::getUltimo();
        $id = Reserva::getId2();
        $habitaciones = Habitaciones::all();
        $habitacionesReserva = ReservaHabitacion::habitaciones_all($id->id);
<<<<<<< HEAD

=======
        // $reserva=Reserva::find($id);
        // $usuario = Usuario::where($id);
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
        $router->render('paginas/prueba2', [
            'reserva' => $reserva,
            'habitacionesReserva' => $habitacionesReserva,
            'habitaciones' => $habitaciones
        ]);
    }
    public static function crearPdf(Router $router)
    {
        $reserva = Reserva::getUltimo();
        $id = Reserva::getId2();
        $habitacionesReserva = ReservaHabitacion::habitaciones_all($id->id);
        $habitaciones = Habitaciones::all();
        $router->render('paginas/crearPdf', [
            'reserva' => $reserva,
            'habitacionesReserva' => $habitacionesReserva,
            'habitaciones' => $habitaciones
        ]);
    }
    public static function verPdf(Router $router)
    {
        $id = validarORedireccionar('/reservas-usuario');
        $reserva = Reserva::find($id);
        $habitacionesReserva = ReservaHabitacion::habitaciones_all($id);
        $habitaciones = Habitaciones::all();
        // $usuario = Usuario::getUsarioReserva($id);
        $router->render('paginas/crearPdf', [
            'reserva' => $reserva,
            'habitacionesReserva' => $habitacionesReserva,
            'habitaciones' => $habitaciones
        ]);
    }
    public static function salon(Router $router)
    {
        $id = validarORedireccionar('/salones');
        $premios_usu = Premios_usuario::all();
        $no2 = true;
        $no= true;
        $salon = Salon::find($id);
        $router->render('paginas/salon', [
            'salon' => $salon,
            'premios_usu' => $premios_usu,
            'no2' => $no2,
            'no' => $no
        ]);
    }
    public static function evento(Router $router)
    {
        $id = validarORedireccionar('/eventos');
        // $premios_usu = Premios_usuario::all();
        $no2 = true;
        $no = true;
        $evento = Evento::find($id);
        $eventos = Evento::getEventosdif(3, $id);

        if($evento->tipo_lugar==='Salon'){
            $eventos_salones=Eventos_salon::where('id_eventos', $evento->id);
            $lugar=Salon::where('id', $eventos_salones->id_salon);
        }else{
            $eventos_centros_consumos=Eventos_centros_consumo::where('id_eventos', $evento->id);
            $lugar=Centroconsumo::where('id', $eventos_centros_consumos->id_centros_consumo);
        }
        $router->render('paginas/evento', [
            'evento' => $evento,
            'lugar'=>$lugar,
            'eventos' => $eventos,
            'no2' => $no2,
            'no' => $no
        ]);
    }
    public static function centro(Router $router)
    {
        $id = validarORedireccionar('/centros');
        $no2 = true;
        $no = true;
        $premios_usu = Premios_usuario::all();
        $centro = Centroconsumo::find($id);
        $chefs = Chef::findChef($id);
        $eventos = Evento::get(3);
        $router->render('paginas/centro', [
            'centro' => $centro,
            'premios_usu' => $premios_usu,
            'chefs' => $chefs,
            'eventos' => $eventos,
            'no2' => $no2,
            'no' => $no
        ]);
    }
    // registra chats

    // recibe chats
    public static function recibe_chat(Router $router)
    {
        $chat = new Chat;
        $chat->getChat($id);
        $router->render('paginas/index', [
            'chat' => $chat
        ]);
    }
    public static function getchat2(Router $router)
    {
        $chat = new Chat;
        session_start();
        $id = $_SESSION['usuario_id'];
        $chat->getChat($id);
        $router->render('paginas/index', [
            'chat' => $chat
        ]);
    }

    public static function reservasusu(Router $router)
    {
        session_start();
        $id = $_SESSION['usuario_id'];
        $no = true;
        $no2 = true;
        $usuario=Usuario::find($id);
        $result = Reserva::reservas();
        // $reservas = Reserva::reserva_hab($id);
        $premios_usuarios = Premios_usuario::where2order('usuarios_id', $id);
        $reservas = Reserva::where2order('email', $usuario->email);
        $premios = Premios::all();
        
        if ($premios_usuarios) {
            foreach ($premios_usuarios as $prem) {
                $prem->status = 1;
                $prem->actualizar2();
            }
        }
        $router->render('paginas/reservas-usuario', [
            'no' => $no,
            'no2' => $no2,
            'usuario'=>$usuario,
            'reservas' => $reservas,
            'premios_usuarios' => $premios_usuarios,
            'premios' => $premios
        ]);
    }

    public static function cancelar_reserva(Router $router)
    {
        $no = true;
        $no2 = true;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            $reserva = Reserva::find($id);

            $reservahab = ReservaHabitacion::re_habitaciones_all($id);
            foreach ($reservahab as $reb) {
                $reb->eliminare();
            }
            $reserva->eliminare();
        }
    }

    public static function beneficios(Router $router)
    {
        $no = true;
        $no2 = true;
        $router->render('paginas/beneficios', [
           'no'=>$no,
           'no2'=>$no2
        ]);
    }
}
