<?php 

namespace Controllers;
use MVC\Router;
use Model\Reserva;
use Model\ReservaHabitacion;
use Intervention\Image\ImageManagerStatic as Image;

class ReservaController{
    public static function index(Router $router){
      
        $reservashabitaciones=ReservaHabitacion::all();
        $reservas=Reserva::all();
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

    public static function actReserva(){
        $id=$_POST['id_reserva'];
        // debuguear($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $result=Reserva::actstatus($id);
        }
        
    }
}