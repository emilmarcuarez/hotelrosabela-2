<?php

namespace Controllers;
use MVC\Router;
use Model\Usuario;

class UsuariosController{
    public static function loginusuario(Router $router){
       $no =true;
        $no2=true;
        $router->render('auth/loginusuario',[
            //  'errores'=>$errores,
             'no'=>$no,
             'no2'=>$no2
         ]);
     }
     public static function siginusuario(Router $router){
    //     $resultado2 = $_GET['resultado'] ?? null; 
        $no =true;
        $no2 =true;
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
        'no'=>$no,
        'no2'=>$no2
    ]);
    }
    public static function logout(){
        session_start();
        $_SESSION=[]; //cerramos sesion
        header('Location: /');
    }
}
