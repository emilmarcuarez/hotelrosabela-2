<?php

namespace Controllers;
use Classes\Email;
use Model\Premios;
use MVC\Router;
use Model\Usuario;
use Model\Reserva;
use Model\Premios_usuario;

class UsuariosController
{
    public static function loginusuario(Router $router)
    {
        $no = true;
        $no2 = true;
        $errores = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $auth = new Usuario($_POST);
            $errores = $auth->validar(); //sintaxi de flecha porque no es estatico
            // debuguear($auth);
            if (empty($errores)) {
                
                // verificar si el usuario existe
                // $resultado = $auth->existeUsuario();
                $resultado = $auth->existeUsuario();
                // $usuario = Usuario::where('email', $auth->email);
                // si NO existe el usuario se muestra el error
                if (!$resultado) {
                    // verificar si el usuario existe o no (mensaje de erorr)
                    $errores = Usuario::getErrores();
                } else { //si  existe el usuario
                    $usuario = Usuario::where('email', $auth->email);
                    if( $usuario->comprobarPasswordAndVerificado($auth->contrasenia) ) {
                        // Autenticar el usuario
                        session_start();
                        // llenamos el arreglo de las sesiones establecidas
                        $_SESSION['usuario_pag']=$usuario->email;
                        // $usu=$usuario->getName();
                        $_SESSION['usuario_sexo']=$usuario->sexo;
                        $_SESSION['usuario_name']=$usuario->nombre;
                        $_SESSION['usuario_id']=$usuario->id;
                        $_SESSION['login_pag']=true;
                        // debuguear($_SESSION);
                        // Redireccionamiento
                     
                            header('Location: /');
            
                    }else {
                        // Password incorrecto: mensaje de error.
                        $errores = Usuario::getErrores(); //si no coincide la contraseña, se muestra el error
                    }
               
                }
            }
        }
        $router->render('auth/loginusuario', [
            'errores' => $errores,
            'no' => $no,
            'no2' => $no2
        ]);
    }
    public static function siginusuario(Router $router)
    {
        $resultado2 = $_GET['resultado'] ?? null;
        $no = true;
        $no2 = true;
        $errores = [];

        $Usuario = new Usuario;
        // ARREGLO CON MENSAJE DE ERRORES

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Usuario = new Usuario;
            $errores = [];
            // crea una nueva instancia
            $Usuario = new Usuario($_POST);
            // VALIDAR
            $Usuario->setPassword($Usuario->contrasenia);
            $errores = $Usuario->validarRegistro();

            // REVISAR QUE EL ARREGLO ESTE VACIO. ISSET REVISA QUE UNA VARIABLE ESTE CREADA Y EMPTY SI ESTA VACIO
            if (empty($errores)) { //en caso de que este vacio

                $resultado = $Usuario->existeUsuarioRegistro();

                // si NO existe el usuario se muestra el error
                if (!$resultado) {
                    // verificar si el usuario existe o no (mensaje de erorr)
                     //creo el token
                    $Usuario->crearToken();

                    // enviando el email
                    $email=new Email($Usuario->email, $Usuario->nombre,
                    $Usuario->apellido, $Usuario->token);
                   
                    $email->enviarConfirmacion();

                    // debuguear($Usuario);
                    $resultado=$Usuario->guardar();
                    if($resultado){
                       header('Location: /mensaje');
                    }
                } else { //si  existe el usuario
                    $errores = Usuario::getErrores();
                }
            }
        }
        $router->render('auth/siginusuario', [
            'resultado2' => $resultado2,
            'errores' => $errores,
            'no' => $no,
            'no2' => $no2
        ]);
    }
    public static function logout()
    {
        session_start();
        $_SESSION = []; //cerramos sesion
        header('Location: /');
    }

    public static function actualizar()
    {
        // $id=validarORedireccionar('/admin');
        session_start();
        $id = $_SESSION['usuario_id'];
        $no = true;
        $no2 = true;

        $usuario = Usuario::find($id);

        // $errores=Usuario::getErrores();

        // al darle boton actualizar
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // ASIGNAMOS LOS ATRIBUTOS A UNA VARIABLE
            $args = new Usuario($_POST);

            $usuario->sincronizar($args); //manda los datos que el usuario escribio a memoria

            $usuario->guardar();
        }
    }
     //  noches de los usuarios
     public static function noches(Router $router){
        $usuarios=Usuario::usuarios_noches();
    
        $no=true;
        $no2=true;
        // // MUESTRA MENSAJE CONDICIONAL
        $resultado = $_GET['resultado'] ?? null; 
        $router->render('auth/noches',[
            'resultado'=>$resultado,
            'usuarios' =>$usuarios,
            'no'=>$no,
            'no2'=>$no2
        ]);
    } 
     public static function premios(Router $router){
        $id=validarORedireccionar('/noches');
        $usuario=Usuario::find($id);
        $no=true;
        $no2=true;

        $errores=Usuario::getErrores();
        // todos los premioa registrados de ese usuario
        $premios_usu=Premios_usuario::where2('usuarios_id', $id);
       
        $premios=Premios::all();
        // me trae todas las reservas de ese usuario
        $reservas=Reserva::where2('usuarios_id', $id);
        $resultado = $_GET['resultado'] ?? null; 
        $router->render('auth/premios',[
            'resultado'=>$resultado,
            'premios_usu'=>$premios_usu,
            'errores'=>$errores,
            'reservas'=>$reservas,
            'usuario' =>$usuario,
            'premios' =>$premios,
            'no'=>$no,
            'no2'=>$no2
        ]);
    } 
     public static function crearPremio(Router $router){
        // $id=validarORedireccionar('/noches');
        // $usuario=Usuario::find($id);
        $no=true;
        $no2=true;
        $Premios_usuario=new Premios_usuario;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $errores = Premios_usuario::getErrores();
            $Premios_usuario = new Premios_usuario($_POST['premio']);
            // debuguear($Premios_usuario);
            // VALIDAR
            $errores = $Premios_usuario->validar();
        // $id=$Premios_usuario->usuarios_id;
            // REVISAR QUE EL ARREGLO ESTE VACIO. ISSET REVISA QUE UNA VARIABLE ESTE CREADA Y EMPTY SI ESTA VACIO
            if (empty($errores)) { 
                $Premios_usuario->guardar();
            }
        }
        // $router->render('auth/premios',[
        //     // 'id'=>$id,
        //     'errores'=>$errores,
        //     'no'=>$no,
        //     'no2'=>$no2
        // ]);
    } 
}
