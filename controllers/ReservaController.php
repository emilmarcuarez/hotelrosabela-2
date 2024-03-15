<?php 

namespace Controllers;
use MVC\Router;
use Model\Reserva;
use Model\ReservaHabitacion;
use Model\Usuario;
use Model\Habitaciones;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Beneficio;
use Model\Premios_usuario;

class ReservaController{
    public static function index(Router $router){
      
        $reservashabitaciones=ReservaHabitacion::allDesc();
        $reservas=Reserva::allDesc();
        // $usuarios=Usuario::all();
        $result=Reserva::reservas();
       
        $no2=true;
        $no=true;
        $resultado = $_GET['resultado'] ?? null; //sino esta el valor resultado, se le pone null y no presenta error, solo le asigna null y no falla
        //    la ubicacion de la vista que va a abrir, se pasa a render para que haga eso
        $router->render('reservas/mostrar',[
            'reservas'=>$reservas,
            'resultado' =>$resultado,
            'reservashabitaciones'=>$reservashabitaciones,
            'no2'=>$no2,
            'no'=>$no
        ]);
    }

    // en house
    public static function actReserva(){
        $id=$_POST['id_reserva'];
        $reserva=Reserva::find($id);
        $usuario = Usuario::where('email', $reserva->email);
        // reserva- imagen
        if($usuario){
            $fechaInicio = strtotime($reserva->fecha_i);
            $fechaFin = strtotime($reserva->fecha_e);
            // Calcula la diferencia entre las dos fechas
            $diferencia = date_diff(date_create($reserva->fecha_i), date_create($reserva->fecha_e));
            $cantidad_noches= intval($usuario->noches)+$diferencia->days;
            // $usuario->noches= $cantidad_noches*$reserva->cantidad;
            $usuario->noches= $cantidad_noches;
            $usuario->guardar();
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //  debuguear($usuario);
            $result=Reserva::actstatus($id);
        }
        
    }
    // confirmada
    public static function confirmar(){
        $id=$_POST['id_reserva_conf'];
        // debuguear($id);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $result=Reserva::actstatus2($id);
        }
        
    }
       // funcion para ver los datos de cada reserva, incluyendo quien la hizo, las habitaciones, todo
       public static function datosReserva(Router $router){
        $no=true;
        $no2=true;
        $id=$_GET['id'];
        $reserva=Reserva::find($id);
        $beneficio=Beneficio::where('id',$reserva->id_beneficio);
        // $usuario=Usuario::getUsarioReserva($id);
        $habitacionesReserva=ReservaHabitacion::habitaciones_all($id);
        $habitaciones=Habitaciones::all();
       
        $router->render('/reservas/datosReserva', [
            'no'=>$no,
            'no2'=>$no2,
            'reserva'=>$reserva,
            'beneficio'=>$beneficio,
            'habitacionesReserva'=>$habitacionesReserva,
            'habitaciones'=>$habitaciones
        ]);
    }
    public static function eliminarregistro(){
 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           $usuarios= Usuario::all();
           $reservas=Reserva::all();
           $reserva_habitaciones=ReservaHabitacion::all();
           foreach($usuarios as $usuario){
            foreach($reservas as $reserva){
                if($usuario->email===$reserva->email){
                    foreach($reserva_habitaciones as $reha){
                        if($reha->reserva_id===$reserva->id){
                            $reha->eliminare();
                        }
                    }
                    $reserva->eliminare();
                }
            }
            $usuario->noches=0;
            $usuario->guardar();
           }
        }
        
    }
       public static function datosReserva2(Router $router){
        $no=true;
        $no2=true;
        $id=$_GET['id'];
        $reserva=Reserva::find($id);
        $beneficio=Beneficio::where('id',$reserva->id_beneficio);
        $usuario=Usuario::where('email', $reserva->email);
        $habitacionesReserva=ReservaHabitacion::habitaciones_all($id);
        $habitaciones=Habitaciones::all();
       
        $router->render('/reservas/datosReserva2', [
            'no'=>$no,
            'no2'=>$no2,
            'reserva'=>$reserva,
            'beneficio'=>$beneficio,
            'habitacionesReserva'=>$habitacionesReserva,
            'habitaciones'=>$habitaciones,
            'usuario'=>$usuario
        ]);
    }
       public static function buscar(Router $router){
        $valor=$_POST['buscador'];
        $reservashabitaciones=ReservaHabitacion::allDesc();
       
        
        $reservas=Reserva::allUsuarios($valor);
        if(!$reservas){
            $reservas=Reserva::allDesc();
        }
        
        $result=Reserva::reservas();
        $no2=true;
        $no=true;
        $resultado = $_GET['resultado'] ?? null; //sino esta el valor resultado, se le pone null y no presenta error, solo le asigna null y no falla
        //    la ubicacion de la vista que va a abrir, se pasa a render para que haga eso
        $router->render('reservas/mostrar',[
            'reservas'=>$reservas,
            'resultado' =>$resultado,
            'usuarios'=>$usuarios,
            'reservashabitaciones'=>$reservashabitaciones,
            'no2'=>$no2,
            'no'=>$no
        ]);
    }
    public static function mostrar_usuario(Router $router){
        $id=$_GET['id'];

        $reservashabitaciones=ReservaHabitacion::allDesc();
        
        // $usuarios=Usuario::all();
        $usuario=Usuario::find($id);
        $reservas=Reserva::where2('email',$usuario->email);
        $result=Reserva::reservas();
        $no2=true;
        $no=true;
        $resultado = $_GET['resultado'] ?? null; //sino esta el valor resultado, se le pone null y no presenta error, solo le asigna null y no falla
        //    la ubicacion de la vista que va a abrir, se pasa a render para que haga eso
        $router->render('reservas/mostrar_usuario',[
            'reservas'=>$reservas,
            'resultado' =>$resultado,
            'usuario'=>$usuario,
            'reservashabitaciones'=>$reservashabitaciones,
            'no2'=>$no2,
            'no'=>$no
        ]);
    }
}