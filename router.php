<?php
namespace MVC;
class Router{

    public $rutasGET=[];
    public $rutasPOST=[];

    public function get($url,$fn){
        $this->rutasGET[$url]=$fn;
    }
    public function post($url,$fn){
        $this->rutasPOST[$url]=$fn;
    }
    public function comprobarRutas(){

        session_start();
        $auth=$_SESSION['login'] ?? null;
        $auth_recepcion=$_SESSION['login_recepcion'] ?? null;

        // ARREGLO DE RUTAS PROTEGIDAS
        $rutas_protegidas=['/admin','/habitaciones/crear', '/habitaciones/actualizar', '/habitaciones/eliminar',  '/eventos/crear', '/eventos/actualizar', '/eventos/eliminar',  '/salones/crear', '/salones/actualizar', '/salones/eliminar',  '/empleados/crear', '/empleados/actualizar', '/empleados/eliminar',  '/centrosconsumo/crear', '/centrosconsumo/actualizar', '/centrosconsumo/eliminar','/habitaciones/mostrar', '/chef/mostrar', '/eventos/mostrar', '/salones/mostrar', '/empleados/mostrar', '/centrosconsumo/mostrar'];
        $rutas_protegidas_recepcion=['/admin', '/chats/mostrar2','/chats/responder', '/chat2','/actualizarChatServidor','/reserva/recibida','/reservas/mostrar', '/reservas/datosReserva','/reservas/crear','/reservas/confirmar','/reservas/eliminar','/reservas/buscar', '/responder'];

        // basada en la url que estoy visitando gracias al router, me busca la funcion asociada a ese url
        $urlActual=strtok($_SERVER['REQUEST_URI'],'?') ?? '/';
        // $urlActual=$_SERVER['PATH_INFO'] ?? '/';
        $metodo =$_SERVER['REQUEST_METHOD'];
        //    para validar la ruta
        if($metodo==='GET'){
           $fn=$this->rutasGET[$urlActual] ?? null;
           
        }else {
            $fn=$this->rutasPOST[$urlActual] ?? null;
        }

        // PROTEGER LAS RUTAS
        // $protegida=0;

        if(in_array($urlActual, $rutas_protegidas) && !$auth && !$auth_recepcion){ ///si no esta autenticado
            header('location: /');
            // $protegida=1;
        }
        else if(in_array($urlActual, $rutas_protegidas)&& !$auth && $urlActual!=='/admin' && $auth_recepcion){
            header('location: /');
        }
        
        // else if($urlActual==='/admin' && !$auth && !$auth_recepcion){
        //     header('location: /');
        // }

        if($fn){
            // la url existe y hay una funcion asociada
            // cuando no sabemos el nombre de la funcion, esta la busca
            // debuguear($fn);
            call_user_func($fn,$this);

        }else{
            // echo 'Error 404: Pagina No encontrada';
            header('Location: /error');
        }
    }


    // muestra una vista
    public function render($view, $datos=[]){

       foreach($datos as $key => $value){
        $$key =$value;
        
       }
     
        ob_start();//empieza almacenar datos en memoria
        include __DIR__ . "/views/$view.php";
        
        $contenido=ob_get_clean();//limpia el buffer
        if($view==='paginas/prueba2' || $view==='paginas/crearPdf'){
            include __DIR__ . "/views/prueba.php";
        }else{
          
            include __DIR__ . "/views/layout.php";
        }

        
    }
}