<?php 

namespace Controllers;
use Model\Usuario;
use MVC\Router;
use Model\Comentarios;
class ComentarioController{


public static function crear(Router $router){
   
   $comentario=new Comentarios;

    $errores = Comentarios::getErrores();
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // debuguear(new Comentario($_POST));
    $comentario = new Comentarios($_POST);
    $usuario=new Usuario;
    // VALIDAR
    $comentario->setIdLocal($_POST['centros_consumo_id']);
    // session_start();
    // $usuario=$usuario->findId($_SESSION['usuario_id']);
    // $comentario->setUser($usuario->id);
    $errores = $comentario->validar();
    // debuguear($usuario->id);

    // REVISAR QUE EL ARREGLO ESTE VACIO. ISSET REVISA QUE UNA VARIABLE ESTE CREADA Y EMPTY SI ESTA VACIO
    if (empty($errores)) { 
            $comentario->guardar();
        }
   }
   
}

public static function actualizarComentarios(Router $router){
    $id =  $_POST['centros_consumo_id'];
    $output = "";
    $comentarios=Comentarios::findComentario($id);
    $nombres=Usuario::getNombres($id);

    // Devolver la respuesta como HTML
    $variable="";
     foreach($comentarios as $index => $comentario): 
        $name = $nombres[$index];
        if(intval($comentario->valor)===1){
            $variable=' <div class="valor_comentario"><p>Horrible</p> </div> ';
        }else if(intval($comentario->valor)===2){
             $variable='<div class="valor_comentario"><p>No me gusto</p></div>';
        }else if(intval($comentario->valor)===3){
            $variable='<div class="valor_comentario"><p>Esperaba mas</p></div>';
        }else if(intval($comentario->valor)===4){
            $variable='<div class="valor_comentario"><p>Muy buena</p></div>';
        }else if(intval($comentario->valor)===5){
            $variable='<div class="valor_comentario"><p>Excelente</p></div>';
        }
         $output .= '<div class="comen_margen">
                        <div class="comen_ident">
                            <p>'. $name->nombre.' '.$name->apellido .'</p>
                            '.$variable.'    
                        </div>
                        <div class="comen_text">
                            <p class="p_break">'. $comentario->mensaje .'</p>
                        </div> 
                    </div>';
      
   endforeach;
//     $output.='</div>';
 
    echo $output;
}
    
}
