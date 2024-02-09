<?php 

namespace Controllers;
use MVC\Router;
use Model\Chat;
use Model\Chatbot;
use Model\Usuario;

class chatbotController{

    
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

}
