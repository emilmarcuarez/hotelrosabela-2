<?php

namespace Controllers;
use MVC\Router;
use Model\Usuario;

class UsuariosController{
    public static function loginusuario(Router $router){
       $no =true;
    //     $errores= [];
 
    //     if($_SERVER['REQUEST_METHOD']==='POST'){
            
    //          $auth=new Usuario($_POST);
    //          $errores=$auth->validar();//sintaxi de flecha porque no es estatico
        
    //          if(empty($errores)){
    //              // verificar si el usuario existe
    //              $resultado = $auth->existeUsuario();
 
    //              // si NO existe el usuario se muestra el error
    //              if(!$resultado){
    //                  // verificar si el usuario existe o no (mensaje de erorr)
    //                  $errores=Usuario::getErrores();
    //              }else{ //si  existe el usuario
                 
    //                  // verificar el password
    //                  $autenticado= $auth->comprobarPassword($resultado);
                    
    //                  if($autenticado){
    //                      // autenticar el usuario
 
    //                      $auth->autenticar();
 
    //                  }else{
    //                      // Password incorrecto: mensaje de error.
    //                      $errores=Usuario::getErrores(); //si no coincide la contraseña, se muestra el error
    //                  }
                 
    //              }
    //          }
    //      }
 
         $router->render('auth/loginusuario',[
            //  'errores'=>$errores,
             'no'=>$no
         ]);
     }
     public static function siginusuario(Router $router){
    //     $resultado2 = $_GET['resultado'] ?? null; 
        $no =true;
    //     $errores= [];

    //     $Usuario=new Usuario;
    //     // ARREGLO CON MENSAJE DE ERRORES

    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $Usuario=new Usuario;
    //         $errores= [];
    //      // crea una nueva instancia
    //      $Usuario=new Usuario($_POST);
    //      // VALIDAR
    //     //  debuguear($Usuario->password);
    //      $Usuario->setPassword($Usuario->contrasenia);
    //      $errores = $Usuario->validar();
     
    //      // REVISAR QUE EL ARREGLO ESTE VACIO. ISSET REVISA QUE UNA VARIABLE ESTE CREADA Y EMPTY SI ESTA VACIO
    //      if (empty($errores)) { //en caso de que este vacio
            
    //         $resultado = $Usuario->existeUsuarioRegistro();
 
    //         // si NO existe el usuario se muestra el error
    //         if(!$resultado){
    //             // verificar si el usuario existe o no (mensaje de erorr)
    //             $Usuario->guardar();
    //         }else{ //si  existe el usuario
    //             $errores=Usuario::getErrores();
    //         }
       
     
    //      }
    //   }
      $router->render('auth/siginusuario',[
        // 'resultado2'=>$resultado2,
        // 'errores'=>$errores,
        'no'=>$no
    ]);
    }
    public static function logout(){
        session_start();
        $_SESSION=[]; //cerramos sesion
        header('Location: /');
    }
}
