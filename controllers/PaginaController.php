<?php 

namespace Controllers;
use MVC\Router;
use Model\Evento;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Usuario;

class PaginaController{

    //pagina index 
    public static function index(Router $router ){


        $router->render('paginas/index', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   
    
        ]);  
    }
    public static function nosotros(Router $router ){

      
        $router->render('paginas/nosotros', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   

        ]);  
    }
    public static function centros(Router $router ){

      
        $router->render('paginas/centros', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   

        ]);  
    }
    public static function salones(Router $router ){

      
        $router->render('paginas/salones', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   

        ]);  
    }
    public static function eventos(Router $router ){

      
        $router->render('paginas/eventos', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   

        ]);  
    }
    public static function empleados(Router $router ){

      
        $router->render('paginas/empleados', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   

        ]);  
    }
    public static function contacto(Router $router ){

      
        $router->render('paginas/contacto', [ ///RENDER ES METODO PARA MOSTRAR UNA VISTA   

        ]);  
    }
}
?>