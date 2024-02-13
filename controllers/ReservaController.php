<?php 

namespace Controllers;
use MVC\Router;
use Model\Reserva;
use Model\ReservaHabitacion;
use Model\Usuario;
use Model\Habitaciones;
use Intervention\Image\ImageManagerStatic as Image;

class ReservaController{
    public static function index(Router $router){
      
        $reservashabitaciones=ReservaHabitacion::all();
        $reservas=Reserva::all();
        $usuarios=Usuario::all();
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

    // en house
    public static function actReserva(){
        $id=$_POST['id_reserva'];
        // debuguear($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
        $usuario=Usuario::getUsarioReserva($id);
        $habitacionesReserva=ReservaHabitacion::habitaciones_all($id);
        $habitaciones=Habitaciones::all();
        $router->render('/reservas/datosReserva', [
            'no'=>$no,
            'no2'=>$no2,
            'reserva'=>$reserva,
            'usuario'=>$usuario,
            'habitacionesReserva'=>$habitacionesReserva,
            'habitaciones'=>$habitaciones
        ]);
    }
}