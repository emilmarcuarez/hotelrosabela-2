<?php

namespace Controllers;

use MVC\Router;
use Model\Premios;
use Intervention\Image\ImageManagerStatic as Image;

class PremiosController
{

    public static function index(Router $router)
    {
        $premios = Premios::all();
        $no2 = true;
        $no = true;
        $resultado = $_GET['resultado'] ?? null;

        $router->render('premios/mostrar', [
            'premios' => $premios,
            'resultado' => $resultado,
            'no' => $no,
            'no2' => $no2,
        ]);
    }
    public static function crear(Router $router)
    {
        $no2 = true;
        $no = true;
        $errores = Premios::getErrores();
        $premio = new Premios;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errores = Premios::getErrores();

            $premio = new Premios($_POST['premio']);
            $errores = $premio->validar();
            // REVISAR QUE EL ARREGLO ESTE VACIO. ISSET REVISA QUE UNA VARIABLE ESTE CREADA Y EMPTY SI ESTA VACIO
            if (empty($errores)) {
                $premio->guardar();
            }
        }

        // render es metodo para crear una vista
        $router->render('premios/crear', [
            'premio' => $premio,
            'no' => $no,
            'no2' => $no2
        ]);
    }
    public static function actualizar(Router $router)
    {
        // redireccionar al admin
        $id = validarORedireccionar("/admin");
        $no2 = true;
        $no = true;
        $premio = Premios::find($id);
        $errores = Premios::getErrores();

        // metodo post para actualizar y mandarlo a la bd
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // asignar los atributos para que se almacenen mientras no se mandan a la base de datos
            $args = $_POST['premio'];

            $premio->sincronizar($args); //sincroniza los datos que el usuario escribio con lo que esta en memoria
            // validacion
            $errores = $premio->validar();


            if (empty($errores)) { //en caso de que este vacio

                $premio->guardar();
            }
        }

        // pasar a la vista
        $router->render('/premios/actualizar', [
            'premio' => $premio,
            'errores' => $errores,
            'no' => $no,
            'no2' => $no2
        ]);
    }
    public static function eliminar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // validar id
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if ($id) {

                $tipo = $_POST['tipo'];
                if (validarTipoContenido($tipo)) {
                    // comparar lo que se va eliminar
                    $premio = Premios::find($id);
                    $premio->eliminar();
                }
            }
        }
    }
}
