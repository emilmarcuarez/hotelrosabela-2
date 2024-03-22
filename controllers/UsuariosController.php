<?php

namespace Controllers;

use Model\Email;
use Model\Email_premios;
use Model\Chat;
use Model\Comentarios;
use Model\Premios;
use Model\ReservaHabitacion;
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
                    if ($usuario->comprobarPasswordAndVerificado($auth->contrasenia)) {
                        // Autenticar el usuario
                        session_start();
                        // llenamos el arreglo de las sesiones establecidas
                        $_SESSION['usuario_pag'] = $usuario->email;
                        // $usu=$usuario->getName();
                        $_SESSION['usuario_sexo'] = $usuario->sexo;
                        $_SESSION['usuario_name'] = $usuario->nombre;
                        $_SESSION['usuario_id'] = $usuario->id;
                        $_SESSION['login_pag'] = true;
                        // debuguear($_SESSION);
                        // Redireccionamiento

                        header('Location: /reservas-usuario');
                    } else {
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
                if (!$resultado) {
                    $email = new Email(
                        $Usuario->email,
                        $Usuario->nombre,
                        $Usuario->apellido,
                        $Usuario->token
                    );

                    $email->enviarConfirmacion();

                    // debuguear($Usuario);
                    $reservas = Reserva::where2('email', $Usuario->email);
                    if ($reservas) {
                        $Usuario->noches = 0;
                        foreach ($reservas as $reserva) {
                            if (intval($reserva->status) === 1) {
                                // Calcula la diferencia entre las dos fechas
                                $diferencia = date_diff(date_create($reserva->fecha_i), date_create($reserva->fecha_e));
                                $cantidad_noches = intval($Usuario->noches) + $diferencia->days;
                                $Usuario->noches = $cantidad_noches * $reserva->cantidad;
                            }
                        }
                    }


                    // Establecer el rango mínimo y máximo para el número aleatorio
                    $min = 1000; // 10^9
                    // $max = 9999999999; // 10^10 - 1
                    $max = 9999; // 10^10 - 1

                    // Generar el número aleatorio dentro del rango
                    $codigo2 = rand($min, $max);

                    // Asegurarse de que el número tenga 10 dígitos
                    $codigo2 = str_pad($codigo2, 4, '0', STR_PAD_LEFT);

                    // Combinar el número aleatorio con el ID de usuario

                    $Usuario->codigo = $codigo3;
                    $resultado = $Usuario->guardar();
                    // debuguear($resultado['id']);
                    if ($resultado) {
                        $usuario2 = Usuario::find($resultado['id']);
                        $codigo3 = $codigo2 . $usuario2->id;
                        $usuario2->codigo = $codigo3;
                        $resultado = $usuario2->actualizar();
                        session_start();
                        // llenamos el arreglo de las sesiones establecidas
                        $_SESSION['usuario_pag'] = $usuario2->email;
                        // $usu=$usuario->getName();
                        $_SESSION['usuario_sexo'] = $usuario2->sexo;
                        $_SESSION['usuario_name'] = $usuario2->nombre;
                        $_SESSION['usuario_id'] = $usuario2->id;
                        $_SESSION['login_pag'] = true;
                        header('Location: /reservas-usuario');
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
    public static function noches(Router $router)
    {
        $usuarios = Usuario::usuarios_noches();
        $premios = Premios_usuario::all();
        $no = true;
        $no2 = true;
        // // MUESTRA MENSAJE CONDICIONAL
        $resultado = $_GET['resultado'] ?? null;
        $router->render('auth/noches', [
            'resultado' => $resultado,
            'usuarios' => $usuarios,
            'premios' => $premios,
            'no' => $no,
            'no2' => $no2
        ]);
    }

    public static function premios(Router $router)
    {
        $id = validarORedireccionar('/noches');
        $usuario = Usuario::find($id);
        $no = true;
        $no2 = true;

        $errores = Usuario::getErrores();
        // todos los premioa registrados de ese usuario
        $premios_usu = Premios_usuario::where2('usuarios_id', $id);
        // debuguear(Premios_usuario::where2('usuarios_id', $id));
        $premios = Premios::all();
        // me trae todas las reservas de ese usuario
        // $reservas=Reserva::where2('usuarios_id', $id);
        $resultado = $_GET['resultado'] ?? null;

        $router->render('auth/premios', [
            'resultado' => $resultado,
            'premios_usu' => $premios_usu,
            'errores' => $errores,
            'usuario' => $usuario,
            'premios' => $premios,
            'no' => $no,
            'no2' => $no2
        ]);
    }
    // mandar premios automaticamente a los usuarios
    public static function crearPremio(Router $router)
    {

        $no = true;
        $no2 = true;
        // $Premios_usuario=new Premios_usuario;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errores = Premios_usuario::getErrores();
            // $Premios_usuario = new Premios_usuario($_POST['premio']);
            $usuarios = new Usuario;
            $usuarios = Usuario::all();
            $premios_usuario = Premios_usuario::all();
            $premios = Premios::all();
            $reservas=Reserva::all();
            // iterando sobre cada usuario
            foreach ($usuarios as $usuario) {

                // reservas mayores a 9, es decir es 10
                if (intval($usuario->noches) > 9) {
                    $encontrado = 0;
                    // revisas todos los premios registrados
                    foreach ($premios_usuario as $prem) {
                        // verifica que este asociado al usuario en particular
                        if ($prem->usuarios_id === $usuario->id) {
                            // en caso de que si, revisamos el premio al que esta relacionado
                            foreach ($premios as $premio) {
                                // encontramos el premio. ahora revisamos si el premio corresponde a 10 noches y en caso de que si, cambia el valor de la variable
                                if ($premio->id === $prem->premio_id && intval($premio->cant_noches) === 10) {
                                    $encontrado = 1;
                                }
                            }
                        }
                    }
                    // no se le ha enviado un premio de 10 noches, se envia.
                    if ($encontrado === 0) {
                        $premios_usuario2 = new Premios_usuario;
                        foreach ($premios as $premio) {
                            if (intval($premio->cant_noches) === 10) {
                                $premios_usuario2->setPremio_id($premio->id);
                                $premios_usuario2->setUsuarios_id($usuario->id);
                                $premios_usuario2->setStatus('0');
                                $premios_usuario2->setUsado('0');
                                $email = new Email_premios($usuario->email, $usuario->nombre, $usuario->apellido, '10', $premio->mensaje);
                                $email->enviarPremio();
                                $email->enviarPremioServidor();
                                $premios_usuario2->guardar();
                            }
                        }
                    }
                    // reservas mayores a 27. Es decir a partir de 28 noches
                }
                if (intval($usuario->noches) > 27) {
                    $encontrado = 0;
                    $id_premio=0;
                    // revisas todos los premios registrados
                    foreach ($premios_usuario as $prem) {
                        // verifica que este asociado al usuario en particular
                        if ($prem->usuarios_id === $usuario->id) {
                            // en caso de que si, revisamos el premio al que esta relacionado
                            foreach ($premios as $premio) {
                                // encontramos el premio. ahora revisamos si el premio corresponde a 28 noches y en caso de que si, cambia el valor de la variable
                                if ($premio->id === $prem->premio_id && intval($premio->cant_noches) === 28) {
                                    $encontrado = 1;
                                    $id_premio=intval($premio->id);
                                }
                            }
                        }
                    }

                    if ($encontrado === 1) {
                        $usuarioPremio=Premios_usuario::ultimopremio($id_premio, $usuario->id);
                        // reviso los premios enviados al usuario
    
                                foreach ($premios as $premio) {
                                    // encontramos el premio. ahora revisamos si el premio corresponde a 10 noches y en caso de que si, cambia el valor de la variable
                                    if ($premio->id === $usuarioPremio->premio_id && intval($premio->cant_noches) === 28) {
                                        // iterar entre dos dias

                                        $fechaInicio = new \DateTime($usuarioPremio->fecha);
                                        $fechaFin = new \DateTime(); // Fecha actual de HOY

                                        $intervalo = new \DateInterval('P1D'); // Intervalo de 1 día

                                        $fechaActual = clone $fechaInicio;
                                        $noches=0;
                                        foreach($reservas as $reserva){
                                            $fechaInicio_reserva = new \DateTime($reserva->fecha_i);
                                            $fechaFin_reserva = new \DateTime($reserva->fecha_e);
                                            $diferencia = $fechaInicio_reserva->diff($fechaFin_reserva);
                                            if($reserva->email===$usuario->email && intval($reserva->status)===1 && $fechaInicio_reserva > $fechaInicio){
                                              $noches+=intval($diferencia->days);
                                            
                                            }
                                        }
                                        if($noches>17){
                                            $premios_usuario2 = new Premios_usuario;
                                            foreach ($premios as $premio) {
                                                if (intval($premio->cant_noches) === 28) {
                                                    $premios_usuario2->setPremio_id($premio->id);
                                                    $premios_usuario2->setUsuarios_id($usuario->id);
                                                    $premios_usuario2->setStatus('0');
                                                    $premios_usuario2->setUsado('0');
                                                    $email = new Email_premios($usuario->email, $usuario->nombre, $usuario->apellido, '18', $premio->mensaje);
                                                    $email->enviarPremio();
                                                    $email->enviarPremioServidor();
                                                    $premios_usuario2->guardar();
                                                }
                                            }
                                        }
                                    }
                                }
                    }else if ($encontrado === 0) {
                        $premios_usuario2 = new Premios_usuario;
                        foreach ($premios as $premio) {
                            if (intval($premio->cant_noches) === 28) {
                                $premios_usuario2->setPremio_id($premio->id);
                                $premios_usuario2->setUsuarios_id($usuario->id);
                                $premios_usuario2->setStatus('0');
                                $premios_usuario2->setUsado('0');
                                $email = new Email_premios($usuario->email, $usuario->nombre, $usuario->apellido, '28', $premio->mensaje);
                                $email->enviarPremio();
                                $email->enviarPremioServidor();
                                $premios_usuario2->guardar();
                            }
                        }
                    }
                }
            }
        }
    }

    public static function enviarEncuesta(Router $router){
        $no = true;
        $no2 = true;
        
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // $errores = Premios_usuario::getErrores();
           
  
            $reservas = Reserva::all();
        //    debuguear($reservas);
            // iterando sobre cada usuario
            foreach($reservas as $reserva) {
                $fechaFin = new \DateTime($reserva->fecha_e);
                $fechaHoy = new \DateTime(); // Esto obtiene la fecha de hoy automáticamente
            
                if ($fechaHoy > $fechaFin && intval($reserva->enviado_encuesta)!==1 && intval($reserva->status)===1) {
                    $email = new Email($reserva->email, $reserva->nombres, $reserva->apellidos, '');
                    $email->enviarCorreoEncuesta();
                    $reserva->enviado_encuesta=1;
                    $reserva->actualizar2(); 
                }
            }
    }
    public static function actPremio()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id_premio_usu'];
            $premio_usuario = Premios_usuario::find($id);
            $premio_usuario->usado = 1;
            $premio_usuario->fecha_usado = date('Y-m-d');
            $premio_usuario->guardar();
        }
    }

    // eliminar usuario comun
    public static function eliminar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // validar id
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if ($id) {
                $tipo = $_POST['tipo'];

                if (validarTipoContenido($tipo)) {

                    $usuario = Usuario::find($id);
                    $premios_usuario = Premios_usuario::where2('usuarios_id', $id);

                    $chat = Chat::where2('usuarios_id', $id);
                    if ($premios_usuario) {
                        foreach ($premios_usuario as $premio) {
                            $premio->eliminare();
                        }
                    }

                    if ($chat) {
                        foreach ($chat as $c) {
                            $c->eliminare();
                        }
                    }


                    // $reservahab=ReservaHabitacion::re_habitaciones_all($id);
                    $usuario->eliminare3();
                }
            }
        }
    }

    // actualizar usuario administrador
    public static function actualizarUsuario(Router $router)
    {
        $id = validarORedireccionar('/admin');
        $no = true;
        $no2 = true;
        $no3 = true;
        $errores = [];
        // $usuario = new Admin;
        $usuario = Usuario::find($id);
        $errores = Usuario::getErrores();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $args = $_POST;
            //  debug
            $usuario->sincronizar($args);
            $usuario->setPassword($usuario->contrasenia);
            $errores = $usuario->validarRegistro();
            //   debuguear($usuario);
            if (empty($errores)) {
                // verificar si el usuario existe
                $resultado = $usuario->existeUsuarioRegistrado();

                // si existe el usuario se muestra el error
                if (!$resultado) {
                    // verificar si el usuario existe o no (mensaje de erorr)
                    $usuario->guardar2();
                } else { //si no existe el usuario
                    $errores = Usuario::getErrores();
                }
            }
        }

        $router->render('auth/actualizarUsuario', [
            'usuario' => $usuario,
            'errores' => $errores,
            'no' => $no,
            'no2' => $no2
        ]);
    }


    public static function buscar(Router $router)
    {
        $valor = $_POST['buscador'];
        $usuarios = Usuario::allUsuarios2($valor);

        $result = Reserva::reservas();
        $no2 = true;
        $no = true;
        $resultado = $_GET['resultado'] ?? null; 
        $router->render('auth/noches', [
            'resultado' => $resultado,
            'usuarios' => $usuarios,
            'no2' => $no2,
            'no' => $no
        ]);
    }
}
