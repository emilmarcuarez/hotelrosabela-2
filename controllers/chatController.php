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
    

    public static function chat(){
        if($_SERVER['REQUEST_METHOD']==='POST'){
             
            $id =$_SESSION['usuario_id'];
            
            // $usu=new Usuario;
            $usuario=Usuario::updateNo_leidos(intval($id));
            $no=true;
            $no2=true;
               
            // debuguear($_POST['mensaje']);
                $chat=new Chat($_POST['mensaje']); //nombre del arreglo que SE VA A MANDAR
                $chat->setCodigo(2);

                $chat->guardar();
        }
    }
    // enviar desde el servidor
    public static function chat2(){
        if($_SERVER['REQUEST_METHOD']==='POST'){
            // $id = $_POST['$usuarios_id'];
            // $usu=new Usuario;
            // $usuario=Usuario::updateNo_leidos($id);
            $no=true;
            $no2=true;
               
         
                $chat=new Chat($_POST['mensaje']); //nombre del arreglo que SE VA A MANDAR
                $chat->setCodigo(1);

                $chat->guardar();
        }
    }
    public static function reiniciarNo(){
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $id = $_SESSION['usuario_id'];
            // $usu=new Usuario;
            $usuario=Usuario::reiniciarNo_leidos($id);
        }
    }

    public static function index(Router $router){
        $chats=Chat::all();
        $usuarios=Usuario::all();
        $no=true;
        $no2=true;
       
        $router->render('chats/mostrar',[
            'chats'=>$chats,
            'usuarios' =>$usuarios,
            'no'=>$no,
            'no2'=>$no2
        ]);
    }
    public static function index2(Router $router){
        $chats=Chat::all();
        $usuarios=Usuario::all();
        $no=true;
        $no2=true;
       
        $router->render('chats/mostrar2',[
            'chats'=>$chats,
            'usuarios' =>$usuarios,
            'no'=>$no,
            'no2'=>$no2
        ]);
}
    public static function responder(Router $router){
        // $id=$_GET['id'];
        $id = $_POST['usuarios_id'];
        // $chats=Chat::getChat($id);
        $usu=Usuario::find($id);
        $result=Usuario::reiniciarNo_leidos($id);
        $usuarios=Usuario::all();
        $mensajes=Chat::getUltimomsj();
        $no=true;
        $no2=true;
        $output = "";
        foreach($usuarios as $usuario):
            if(intval($usuario->no_leidos)!==0){
            
                $output .='<a href="/chats/responder?id='.$usuario->id.'" class="nom_usuario">
                
                <div class="n_usuario">
                    <p>'.$usuario->nombre.' '.$usuario->apellido.'</p>
                </div>
                <div class="identificacion">';
                $iterador=1;
                    foreach($mensajes as $msj):
                        if($msj->usuarios_id===$usuario->id){
                            $output .='<p class="descripcion2 weight">'.$msj->mensaje.'</p>';
                            $iterador++;
                        }
                    endforeach;
                    if($iterador===1){
                        $output .='<p>No hay mensajes aun</p>';
                    }
                    if(intval($usuario->no_leidos)!==0){

                        $output .='<div class="cant_msj_noleidos">
                                    <p>'.$usuario->no_leidos.'</p>
                                </div>';
                    }
                    $output .='  
                    </div>
                </a> ';
            }
        endforeach;
        foreach($usuarios as $usuario):
            if(intval($usuario->no_leidos)===0){
             $output .='<a href="/chats/responder?id='.$usuario->id.'" class="nom_usuario">
             
            <div class="n_usuario">
                <p>'.$usuario->nombre.' '.$usuario->apellido.'</p>
            </div>
            <div class="identificacion">';
                    $iterador=1;
                    foreach($mensajes as $msj):
                        if($msj->usuarios_id===$usuario->id){
                            $output .='<p class="descripcion2">'.$msj->mensaje.'</p>';
                            $iterador++;
                        }
                    endforeach;
                    if($iterador===1){
                        $output .='<p>No hay mensajes aun</p>';
                    }
                if(intval($usuario->no_leidos)!==0){

                     $output .='<div class="cant_msj_noleidos">
                                  <p>'.$usuario->no_leidos.'</p>
                              </div>';
                }
                  $output .='  
                </div>
              </a> ';
            }
        endforeach;
        echo $output;
 
    }
    public static function chatresponder(Router $router){
        $id=$_GET['id'];
        // $id = $_POST['usuarios_id'];
        $chats=Chat::getChat($id);
        $usu=Usuario::find($id);
        $result=Usuario::reiniciarNo_leidos($id);
        $usuarios=Usuario::all();
        $no=true;
        $no2=true;
      
        $router->render('/chats/responder',[
            'chats'=>$chats,
            'usu' =>$usu,
            'usuarios' =>$usuarios,
            'no'=>$no,
            'no2'=>$no2
        ]);
    }
public static function actualizarChatServidor(Router $router){


    $id = $_POST['usuarios_id'];
    $output = "";
    
    $mensajes = Chat::getChat($id);
    // Devolver la respuesta como HTML
   foreach($mensajes as $msj):
        if ($msj->codigo === "1") {
            $output .= '<div class="chat outgoing">
                            <div class="details">
                                <p>' . $msj->mensaje. '</p>
                            </div>
                            </div>';
        }else if($msj->codigo === "2"){
            $output .= '<div class="chat incoming">
                <div class="details">
                    <p>' . $msj->mensaje. '</p>
                </div>
                </div>';
        }
    endforeach;
    echo $output;
    }
}
