<?php 

namespace Controllers;
use MVC\Router;
use Model\Evento;
use Model\Habitaciones;
use Model\Salon;
use Model\Chef;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Empleados;
use Model\Centroconsumo;
use Model\Usuario;

class PaginaController{

    //pagina index 
   
    public static function index(Router $router ){
        $eventos=Evento::get(4);
        $habitaciones=Habitaciones::get(2);
        $salones=Salon::get(3);
        $inicio=true;//para que aparezca el header
        $no2=true;
        $router->render('paginas/index', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'eventos'=> $eventos,
            'habitaciones'=> $habitaciones,
            'salones'=> $salones,
            'inicio'=>$inicio,
            'no2'=>$no2
        ]);
        
    }
    public static function nosotros(Router $router ){
        $inicio=true;//para que aparezca el header
        $no2=true;
        $router->render('paginas/nosotros', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'inicio'=>$inicio,
            'no2'=>$no2
        ]);  
    }
    public static function centros(Router $router ){
        $centros=Centroconsumo::all();
        $chefs=Chef::all();
        $no2=true;
        $router->render('paginas/centros', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'centros'=>$centros,
            'chefs'=>$chefs,
            'no2'=>$no2
        ]);  
    }
    public static function salones(Router $router ){

        $salones=Salon::all();
        $no2=true;
        $router->render('paginas/salones', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'salones'=>$salones,
            'no2'=>$no2
        ]);  
    }
    public static function eventos(Router $router ){
        $eventos=Evento::all();
        $no2=true;
        $router->render('paginas/eventos', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'eventos'=>$eventos,
            'no2'=>$no2
        ]);  
    }
    public static function empleados(Router $router ){
        $empleados=Empleados::all();
        $no2=true;
        $router->render('paginas/empleados', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'empleados'=>$empleados,
            'no2'=>$no2
        ]);  
    }
    public static function contacto(Router $router ){

        $no2=true;
        $router->render('paginas/contacto', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'no2'=>$no2
        ]);  
    }
    public static function habitacion(Router $router){
        $id=validarORedireccionar('/habitaciones');
        $imghabitaciones=true;
        $no=true;
        $habitacion=Habitaciones::find($id);
        $router->render('paginas/habitacion', [
            'habitacion'=>$habitacion,
            'imghabitaciones'=>$imghabitaciones,
            'no'=>$no
        ]);
    }
    public static function habitaciones(Router $router){
        $habitaciones=Habitaciones::all();
        $imghabitaciones=true;
        $no=true;
       
        $router->render('paginas/habitaciones', [
            'habitaciones'=>$habitaciones,
            'imghabitaciones'=>$imghabitaciones,
            'no'=>$no
        ]);
    }
    public static function salon(Router $router ){
        $id=validarORedireccionar('/salones');

        $no2=true;
        $salon=Salon::find($id);
        $router->render('paginas/salon', [
            'salon'=>$salon,
            // 'imghabitaciones'=>$imghabitaciones,
            'no2'=>$no2
            // 'comentarios'=>$comentarios,
            // 'correos'=>$correos
        ]);
    }
    public static function evento(Router $router ){
        $id=validarORedireccionar('/eventos');

        $no2=true;
        $evento=Evento::find($id);
        $eventos=Evento::getEventosdif(3,$id);
        $centroConsumo=Evento::findNombreCentro($id);
        $router->render('paginas/evento', [
            'evento'=>$evento,
            'eventos'=>$eventos,
            'centroConsumo'=>$centroConsumo,
            'no2'=>$no2
        ]);
    }
    public static function centro(Router $router ){
        $id=validarORedireccionar('/centros');
        $no2=true;
        $centro=Centroconsumo::find($id);
        $chefs=Chef::findChef($id);
        $eventos=Evento::get(3);
        $router->render('paginas/centro', [
            'centro'=>$centro,
            'chefs'=>$chefs,
            'eventos'=>$eventos,
            'no2'=>$no2
        ]);
    }
}

