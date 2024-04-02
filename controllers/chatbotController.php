<?php 

namespace Controllers;
use MVC\Router;
use Model\Chat;
use Model\Chatbot;
use Model\Usuario;

class chatbotController{
    public static function index(Router $router){
        $chatbots=Chatbot::all();
        $no=true;
        $no2=true;
        // MUESTRA MENSAJE CONDICIONAL
        $resultado = $_GET['resultado'] ?? null; //sino esta el valor resultado, se le pone null y no presenta error, solo le asigna null y no falla
        $router->render('chatbot/mostrar',[
            'chatbots'=>$chatbots,
            'resultado' =>$resultado,
            'no'=>$no,
            'no2'=>$no2
        ]);
}
    
    public static function actualizarChat(Router $router){
        $getMesg = $_POST['text'];
            $mensajes = Chatbot::msjchatbot($getMesg);
            // $replay = $mensajes['replies'];
        
            if(!empty($mensajes)){
                // debuguear($mensajes);
                foreach($mensajes as $msj):
                
                    $replay = $msj->replies;
                    echo $replay;

                endforeach;
                
            }else {
                echo "¡Lo siento, no puedo ayudarte con este inconveniente! Favor comunícate con nosotros en el siguiente enlace:
                
                </br><a href='/contacto' class='link_chatbot'>Contacto</a>";
            }
            
    }


    // para controlar el chatbot desde el panel administrativo
    public static function crear(Router $router){
        $no=true; 
        $no2=true; 

        // arreglo con mensaje de errores
        $erorres= Chatbot::getErrores();
        $chatbot=new Chatbot;

        if($_SERVER['REQUEST_METHOD']==='POST'){
                $erorres= Chatbot::getErrores();

                $chatbot=new Chatbot($_POST['chatbot']); 
            if(empty($erorres)){
                $chatbot->guardar();
            }
        }
        $router->render('chatbot/crear',[
            'chatbot'=>$chatbot,
            'errores'=>$erorres,
            'no'=>$no,
            'no2'=>$no2
        ]);
    }

    // funcion actualizar centro de consumo
    public static function actualizar(Router $router){
        $id=validarORedireccionar('/admin');
        $no=true;
        $no2=true;
        $chatbot=Chatbot::find($id);
        $errores=Chatbot::getErrores();

        // al darle boton actualizar
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $args=$_POST['chatbot'];

            $chatbot->sincronizar($args); //manda los datos que el usuario escribio a memoria

            $errores=$chatbot->validar();

            if(empty($errores)){
             
                $chatbot->guardar();
            }
        }
        $router->render('/chatbot/actualizar',[
            'chatbot'=>$chatbot,
            'errorres'=>$errores,
            'no'=>$no,
            'no2'=>$no2
        ]);
    }
    
    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD']=== 'POST'){
            // validar id
            $id=$_POST['id'];
            $id=filter_var($id, FILTER_VALIDATE_INT);

            if($id){
                $tipo=$_POST['tipo'];

                if(validarTipoContenido($tipo)){
                    $chatbot=chatbot::find($id);
                    $chatbot->eliminar();
                }
            }
        }
    }
}
