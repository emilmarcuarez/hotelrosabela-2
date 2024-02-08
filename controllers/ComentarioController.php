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
    $usuario=$usuario->findId($_SESSION['usuario_id']);
    $comentario->setUser($usuario->id);
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
     foreach($comentarios as $index => $comentario): 
        $name = $nombres[$index];
         $output .= '<div class="comen_margen">
                        <div class="comen_ident">
                            <p>'. $name->nombre.' '.$name->apellido .'</p>
                        </div>
                        <div class="comen_text">
                            <p>'. $comentario->mensaje .'</p>
                        </div>
                    </div>';
        // $output.='eeee';
      
        if(intval($comentario->valor)===1){
            $output.='<select class="star-rating" disabled="true">
                    <option value="">Seleccione una opcion</option>
                    <option value="5">Excelente</option>
                    <option value="4">Muy buena</option>
                    <option value="3">Esperaba mas</option>
                    <option value="2">No me gusto</option>
                    <option value="1" selected>Horrible</option>
                </select>';
        }else if(intval($comentario->valor)===2){
             $output.='<select class="star-rating" disabled="true">
                    <option value="">Seleccione una opcion</option>
                    <option value="5">Excelente</option>
                    <option value="4">Muy buena</option>
                    <option value="3">Esperaba mas</option>
                    <option value="2" selected>No me gusto</option>
                    <option value="1">Horrible</option>
                </select>';
        }else if(intval($comentario->valor)===3){
            $output.='<select class="star-rating" disabled="true">
            <option value="">Seleccione una opcion</option>
            <option value="5">Excelente</option>
            <option value="4">Muy buena</option>
            <option value="3" selected>Esperaba mas</option>
            <option value="2">No me gusto</option>
            <option value="1">Horrible</option>
             </select>';
        }else if(intval($comentario->valor)===4){
            $output.='<select class="star-rating" disabled="true">
            <option value="">Seleccione una opcion</option>
            <option value="5">Excelente</option>
            <option value="4" selected>Muy buena</option>
            <option value="3">Esperaba mas</option>
            <option value="2">No me gusto</option>
            <option value="1">Horrible</option>
             </select>';
        }else if(intval($comentario->valor)===5){
            $output.='<select class="star-rating" disabled="true">
            <option value="">Seleccione una opcion</option>
            <option value="5" selected>Excelente</option>
            <option value="4">Muy buena</option>
            <option value="3">Esperaba mas</option>
            <option value="2">No me gusto</option>
            <option value="1">Horrible</option>
             </select>';
        }
   endforeach;

    echo $output;
}

// public static function actualizar(Router $router){
//     // redireccionar al admin
//     $id= validarORedireccionar("/admin");
//     $no=true;
//     $comentario=Comentario::find($id);

//     $errores=Comentario::getErrores();

//     // metodo post para actualizar y mandarlo a la bd
//     if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//     // asignar los atributos para que se almacenen mientras no se mandan a la base de datos
//     $args = $_POST['comentario'];

//     $comentario->sincronizar($args); //sincroniza los datos que el usuario escribio con lo que esta en memoria
//     // validacion
//     $errores = $comentario->validar();

//     // REVISAR QUE EL ARREGLO ESTE VACIO. ISSET REVISA QUE UNA VARIABLE ESTE CREADA Y EMPTY SI ESTA VACIO

//         if (empty($errores)) { 
//             $local->guardar();
//         }
//     }

//     // pasar a la vista
//     $router->render('paginas/local',[
//         'local'=>$local,
//         'errores'=>$errores,
//         'no'=>$no
//     ]);
// }
// public static function eliminar(){
//         if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//             // validar id
//             $id = $_POST['id'];
//             $id = filter_var($id, FILTER_VALIDATE_INT);
        
//             if ($id) {
            
//                 $tipo=$_POST['tipo'];
//                 if(validarTipoContenido($tipo)){
//                     // comparar lo que se va eliminar
//                   $local=Local::find($id);
//                   $local->eliminar();
//                 }
//             }
//         }
//     } 
   
    
}
