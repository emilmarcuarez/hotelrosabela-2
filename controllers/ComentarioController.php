<?php 

namespace Controllers;

use Model\Centroconsumo;
use Model\Usuario;
use MVC\Router;
use Model\Comentarios;
class ComentarioController{

    public static function index(Router $router){
        $comentarios=Comentarios::all();
        $usuarios=Usuario::all();
        $centros=Centroconsumo::all();
        $no2=true;
        $no=true;
        // $inicio=true;
        $resultado = $_GET['resultado'] ?? null; //sino esta el valor resultado, se le pone null y no presenta error, solo le asigna null y no falla
        //    la ubicacion de la vista que va a abrir, se pasa a render para que haga eso
        $router->render('comentarios/mostrar',[
            'comentarios'=>$comentarios,
            'usuarios'=>$usuarios,
            'centros'=>$centros,
            'resultado' =>$resultado,
            'no2'=>$no2,
            'no'=>$no
        ]);
    }
public static function crear(Router $router){
   
   $comentario=new Comentarios;

    $errores = Comentarios::getErrores();
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // debuguear(new Comentario($_POST));
    $comentario = new Comentarios($_POST);
    $usuario=new Usuario;
    // VALIDAR
    $comentario->setIdLocal($_POST['centros_consumo_id']);

    $errores = $comentario->validar();

   
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
public static function eliminar(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // validar id
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
    
        if ($id) {
        
            $tipo=$_POST['tipo'];
            if(validarTipoContenido($tipo)){
                // comparar lo que se va eliminar
              $comentario=Comentarios::find($id);
              $comentario->eliminar();
            }
        }
    }
    } 
}
