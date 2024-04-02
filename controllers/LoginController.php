<?php

namespace Controllers;

use Model\Email;
use MVC\Router;
use Model\Admin;
use Model\Usuario;

class LoginController{

    public static function index(Router $router){
        $usuarios=Admin::all();
        $no=true;
        $no2=true;
        // // MUESTRA MENSAJE CONDICIONAL
        $resultado = $_GET['resultado'] ?? null; //sino esta el valor resultado, se le pone null y no presenta error, solo le asigna null y no falla
        //    la ubicacion de la vista que va a abrir, se pasa a render para que haga eso
        $router->render('auth/mostrar',[
            'resultado'=>$resultado,
            'usuarios' =>$usuarios,
            'no'=>$no,
            'no2'=>$no2
        ]);
    }   
    public static function mostrarusuarios(Router $router){
        $usuarios=Usuario::all();
        $no=true;
        $no2=true;
        // // MUESTRA MENSAJE CONDICIONAL
        $resultado = $_GET['resultado'] ?? null; //sino esta el valor resultado, se le pone null y no presenta error, solo le asigna null y no falla
        //    la ubicacion de la vista que va a abrir, se pasa a render para que haga eso
        $router->render('auth/mostrarusuarios',[
            'resultado'=>$resultado,
            'usuarios' =>$usuarios,
            'no'=>$no,
            'no2'=>$no2
        ]);
    }   

  
    public static function login(Router $router){
       $no =true;
       $no2 =true;
       $no3 =true;
    $errores= [];
        
        if($_SERVER['REQUEST_METHOD']==='POST'){
             $auth=new Admin($_POST);
             $errores=$auth->validar();//sintaxi de flecha porque no es estatico
        
             if(empty($errores)){
               
                 $resultado = $auth->existeUsuario();
             
                 if(!$resultado){
                    
                     $errores=Admin::getErrores();
                 }else{ 
                 
                     // verificar el password
                     $autenticado= $auth->comprobarPassword($resultado);
                    
                     if($autenticado){
                         // autenticar el usuario
                         $auth = Admin::where('email', $auth->email);
                        // $autenticar_resultado=Admin::find($auth->id);
                        // debuguear($auth);
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
// crear usuario administrador
     public static function crearlogin(Router $router){
        $no =true;
        $no2 =true;
        $no3 =true;
         $errores= [];
         $usuario = new Admin;
         if($_SERVER['REQUEST_METHOD']==='POST'){
           
              $usuario=new Admin($_POST['usuario']);
<<<<<<< HEAD
=======
            //   debuguear($usuario);
            //   $errores=$usuario->validar();//sintaxi de flecha porque no es estatico
              
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
              $usuario->setPassword($usuario->password);
              $errores = $usuario->validarRegistro();
              if(empty($errores)){
                  // verificar si el usuario existe
                  $resultado = $usuario->existeUsuarioRegistro();
  
                  // si existe el usuario se muestra el error
                  if(!$resultado){
                      // verificar si el usuario existe o no (mensaje de erorr)
                      $usuario->guardar();
                      
                  }else{ //si no existe el usuario
                    $errores=Admin::getErrores();
                  }
              }
          }
  
          $router->render('auth/crearlogin',[
              'usuario'=>$usuario,
              'errores'=>$errores,
              'no'=>$no,
              'no2'=>$no2
          ]);
      }
<<<<<<< HEAD

=======
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
// actualizar usuario administrador
     public static function actualizarAdmin(Router $router){
        $id=validarORedireccionar('/admin');
        $no =true;
        $no2 =true;
        $no3 =true;
       $errores= [];
        // $usuario = new Admin;
        $usuario=Admin::find($id);
        $errores=Admin::getErrores();

         if($_SERVER['REQUEST_METHOD']==='POST'){
             $args=$_POST['usuario'];
              $usuario->sincronizar($args);
              $usuario->setPassword($usuario->password);
              $errores = $usuario->validarRegistro();
              if(empty($errores)){
                  // verificar si el usuario existe
                  $resultado = $usuario->existeUsuarioRegistrado();
  
                  // si existe el usuario se muestra el error
                  if(!$resultado){
                      // verificar si el usuario existe o no (mensaje de erorr)
                      $usuario->guardar();
                      
                  }else{ //si no existe el usuario
                    $errores=Admin::getErrores();
                  }
              }
          }
  
<<<<<<< HEAD
          $router->render('auth/actualizarAdmin',[
=======
          $router->render('auth/actualizaradmin',[
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
              'usuario'=>$usuario,
              'errores'=>$errores,
              'no'=>$no,
              'no2'=>$no2
          ]);
      }

    public static function logout(){
        session_start();
        $_SESSION=[]; //cerramos sesion
        header('Location: /');
    }
<<<<<<< HEAD
=======

    public static function mensaje(Router $router){
        $no2 =true;
        $no =true;
        $router->render('auth/mensaje',[
            'no'=>$no,
            'no2'=>$no2
        ]);
        // $router->render('auth/mensaje');
    }
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
    public static function confirmar(Router $router){
        $no2 =true;
        $no =true;
        $alertas= [];
        $token=s($_GET['token']);
        $usuario=Usuario::where('token',$token);
        if(empty($usuario) || $usuario->token === ''){
            // mostrar mensaje de error
<<<<<<< HEAD
=======
            // echo "token no valido";
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
            Usuario::setAlerta('error', 'Token No Valido');
        }else{
            // modificar a usuario confirmado
            $usuario->confirmado="1";
            $usuario->token='';
            // debuguear($usuario);
            $usuario->guardar();
            Usuario::setAlerta('exito', 'Cuenta comprobada correctamente');
        }

        // obtener alertas
        $alertas=Usuario::getAlertas();

        // renderizar la vista
        $router->render('auth/confirmar-cuenta',[
            'alertas'=>$alertas,
            'no'=>$no,
            'no2'=>$no2
        ]);
<<<<<<< HEAD
=======
        // $router->render('auth/mensaje');
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
    }

    // olvide password
    public static function olvide(Router $router) {
        $no2 =true;
        $no =true;
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth = new Usuario($_POST);
            $alertas = $auth->validarEmail();

            if(empty($alertas)) {
                 $usuario = Usuario::where('email', $auth->email);

                 if($usuario) {
                        
                    // Generar un token
                    $usuario->crearToken();
                    $usuario->guardar();

                    //  Enviar el email
                    $email = new Email($usuario->email, $usuario->nombre, $usuario->apellido, $usuario->token);
                    $email->enviarInstrucciones();

                    // Alerta de exito
                    Usuario::setAlerta('exito', 'Revisa tu email');
                 } else {
<<<<<<< HEAD
                     Usuario::setAlerta('error', 'El Usuario no existe');
=======
                     Usuario::setAlerta('error', 'El Usuario no existe o no esta confirmado');
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
                     
                 }
            } 
        }

        $alertas = Usuario::getAlertas();

        $router->render('auth/olvide-password', [
            'alertas' => $alertas,
            'no'=>$no,
            'no2'=>$no2
        ]);
    }

    // recuperar usuario
    public static function recuperar(Router $router) {
        $alertas = [];
        $error = false;
        $no2 =true;
        $no =true;
        $token = s($_GET['token']);
        // Buscar usuario por su token
        $usuario = Usuario::where('token', $token);
       
        if(empty($usuario)) {
            Usuario::setAlerta('error', 'Token No Válido');
            $error = true;
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Leer el nuevo password y guardarlo

            $contrasenia = new Usuario($_POST);
            $alertas = $contrasenia->validarPassword();

            // $Usuario->setPassword($Usuario->contrasenia);
            if(empty($alertas)) {
                $usuario->contrasenia = null;

                // $usuario->contrasenia = $password->contrasenia;
                // debuguear($contrasenia->contrasenia);
                $usuario->setPassword($contrasenia->contrasenia);
                // $usuario->hashPassword();
                $usuario->token = null;

                $resultado = $usuario->guardar();
                if($resultado) {
                    header('Location: /loginusuario');
                }
            }
        }

        $alertas = Usuario::getAlertas();
        Usuario::setAlerta('exito', 'La contraseña fue restablecida con exito');
        $router->render('auth/recuperar-password', [
            'alertas' => $alertas, 
            'error' => $error,
            'no'=>$no,
            'no2'=>$no2
        ]);
    }

// eliminar usuario administrador
    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD']=== 'POST'){
            // validar id
            $id=$_POST['id'];
            $id=filter_var($id, FILTER_VALIDATE_INT);

            if($id){
                $tipo=$_POST['tipo'];

                if(validarTipoContenido($tipo)){
                    $usuario=Admin::find($id);
                    $usuario->eliminar();
                }
            }
        }
    }
}


