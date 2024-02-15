<?php

namespace Controllers;
use Classes\Email;
use MVC\Router;
use Model\Usuario;

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



                    // para borrar-----------------------
                    // verificar el password
                    // $autenticado = $auth->comprobarPassword($resultado);

                    // if ($autenticado) {
                    //     // autenticar el usuario

                    //     $auth->autenticar();
                    // } else {
                    //     // Password incorrecto: mensaje de error.
                    //     $errores = Usuario::getErrores(); //si no coincide la contraseña, se muestra el error
                    // }
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
}
