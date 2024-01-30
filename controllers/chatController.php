<?php 

namespace Controllers;
use MVC\Router;
use Model\Chat;

class chatController{

    
    public static function actualizarChat(Router $router){


            $id = $_SESSION['usuario_id'];
            $output = "";
            
            $mensajes = Chat::getChat($id);
            // Devolver la respuesta como HTML
           foreach($mensajes as $msj):
                if ($msj->codigo === "2") {
                    $output .= '<div class="chat outgoing">
                                    <div class="details">
                                        <p>' . $msj->mensaje. '</p>
                                    </div>
                                    </div>';
                } 
            endforeach;
            echo $output;
            }
            // 
            // echo $output;
    

    public static function chat(){
        if($_SERVER['REQUEST_METHOD']==='POST'){
            // session_start();
            $no=true;
            $no2=true;
            
            // debuguear($_POST['mensaje']);
                $chat=new Chat($_POST['mensaje']); //nombre del arreglo que SE VA A MANDAR
                $chat->guardar();
        }
    }
}
