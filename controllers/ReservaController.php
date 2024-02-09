<?php 

namespace Controllers;
use MVC\Router;
use Model\Reserva;
use Model\Re_habitaciones;
use Intervention\Image\ImageManagerStatic as Image;

class ReservaController{
    public static function index(Router $router){
        $reservas=Reserva::all();
        $no2=true;
        $no=true;
      
        $resultado = $_GET['resultado'] ?? null; //sino esta el valor resultado, se le pone null y no presenta error, solo le asigna null y no falla
        //    la ubicacion de la vista que va a abrir, se pasa a render para que haga eso
        $router->render('reservas/mostrar',[
            'reservas'=>$reservas,
            'resultado' =>$resultado,
            'no2'=>$no2,
            'no'=>$no
        ]);
    }
}