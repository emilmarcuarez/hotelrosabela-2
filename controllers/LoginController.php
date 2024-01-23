<?php

namespace Controllers;
use MVC\Router;
use Model\Admin;

class LoginController{
    public static function login(Router $router){
       $no =true;
       $no2 =true;
       $no3 =true;
    $errores= [];
        
        if($_SERVER['REQUEST_METHOD']==='POST'){
             $auth=new Admin($_POST);
             $errores=$auth->validar();//sintaxi de flecha porque no es estatico
        
             if(empty($errores)){
                 // verificar si el usuario existe
                 $resultado = $auth->existeUsuario();
 
                 // si existe el usuario se muestra el error
                 if(!$resultado){
                     // verificar si el usuario existe o no (mensaje de erorr)
                     $errores=Admin::getErrores();
                 }else{ //si no existe el usuario
                 
                     // verificar el password
                     $autenticado= $auth->comprobarPassword($resultado);
                    
                     if($autenticado){
                         // autenticar el usuario
 
                         $auth->autenticar();
 
                     }else{
                         // Password incorrecto: mensaje de error.
                         $errores=Admin::getErrores(); //si no coincide la contraseña, se muestra el error
                     }
                 
                 }
             }
         }
 
         $router->render('auth/login',[
             'errores'=>$errores,
             'no'=>$no,
             'no2'=>$no2,
             'no3'=>$no3
         ]);
     }

    public static function logout(){
        session_start();
        $_SESSION=[]; //cerramos sesion
        header('Location: /');
    }
}
