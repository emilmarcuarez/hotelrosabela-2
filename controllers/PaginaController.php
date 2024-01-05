<?php 

namespace Controllers;
use MVC\Router;
use Model\Evento;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Usuario;

class PaginaController{

    //pagina index 
    public static function index(Router $router ){

        $Evento=Evento::get(5);
        $inicio=true;//para que aparezca el header
        $router->render('paginas/index', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
            'Evento'=> $Evento,
            'inicio'=>$inicio
        ]);  
    }
}
?>