<?php 

namespace Controllers;
use MVC\Router;
use Model\Chat;
use Model\Usuario;

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
                }else if($msj->codigo === "1"){
                    $output .= '<div class="chat incoming">
                        <div class="details">
                            <p>' . $msj->mensaje. '</p>
                        </div>
                        </div>';
                }            endforeach;
            echo $output;
            }
            // 
            // echo $output;
    

}
