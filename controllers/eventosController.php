<?php

namespace Controllers;

use Model\Eventos_centros_consumo;
use Model\Eventos_salon;
use MVC\Router;
use Model\Evento;
use Model\Centroconsumo;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Evento_salon;
use Model\Salon;

class eventosController
{

    public static function index(Router $router)
    {
        $eventos = Evento::all();
        $no = true;
        $no2 = true;
        // $no=true;
        // MUESTRA MENSAJE CONDICIONAL
        $resultado = $_GET['resultado'] ?? null; //sino esta el valor resultado, se le pone null y no presenta error, solo le asigna null y no falla
        //    la ubicacion de la vista que va a abrir, se pasa a render para que haga eso
        $router->render('eventos/mostrar', [
            'eventos' => $eventos,
            'resultado' => $resultado,
            'no' => $no,
            'no2' => $no2
        ]);
    }
    public static function crear(Router $router)
    {

        $no = true;
        $no2 = true;
        // ARREGLO CON MENSAJE DE ERRORES

        $errores = Evento::getErrores();
        $centro = Centroconsumo::all();
        $salon = Salon::all();
        $evento_centro = Eventos_centros_consumo::all();
        $evento_salon = Eventos_salon::all();
        $evento = new Evento;
        $evento2 = new Eventos_salon;
        $evento3 = new Eventos_centros_consumo;


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errores = Evento::getErrores();

            // para mandarlo a la clase
            // crea una nueva instancia
            $evento = new Evento($_POST['evento']);

            $salon_escogido = false;
            $centro_escogido = false;
            if ($evento->tipo_lugar === "Salon") {
                $evento2 = new Eventos_salon($_POST['evento_salon']);
                $salon_escogido = true;
            } else {
                $evento3 = new Eventos_centros_consumo($_POST['evento_centro']);
                $centro_escogido = true;
            }


            // ----------------SUBIDA DE ARCHIVOS----------------


            // GENERARA NOMBRE UNICO PARA LAS IMAGENES
            $nombreImagen = md5(uniqid(rand(), true)) .  ".jpg"; //generan numeros aleatorios


            if ($_FILES['evento']['tmp_name']['imagen']) { //si existe la imagen
                $image = Image::make($_FILES['evento']['tmp_name']['imagen']);
                $evento->setImagen($nombreImagen);
            }

            // VALIDAR
            $errores = $evento->validar();



            // REVISAR QUE EL ARREGLO ESTE VACIO. ISSET REVISA QUE UNA VARIABLE ESTE CREADA Y EMPTY SI ESTA VACIO
            if (empty($errores)) { //en caso de que este vacio

                // PARA SABER SI LA CARPETA EXISTE SE USA IS_DIR
                if (!is_dir(CARPETA_IMAGENES_EV)) { //SI NO EXISTE, SE CREA
                    mkdir(CARPETA_IMAGENES_EV); //cuando no hay errores, crea la carpeta

                }

                // Guardar la imagen en el servidor
                $image->save(CARPETA_IMAGENES_EV . $nombreImagen);

                $resultado = $evento->guardar();


                if ($resultado) {
                    // si es un centro de consumo
                    if ($centro_escogido) {
                        $evento3->setId_evento($resultado['id']);
                        $evento3->guardar();
                    // si es un salon
                    } else {
                        $evento2->setId_evento($resultado['id']);
                        $evento2->guardar();
                    }
                }
            }
        }

        // render es metodo para crear una vista
        $router->render('eventos/crear', [
            'evento' => $evento,
            'errores' => $errores,
            'centro' => $centro,
            'salon' => $salon,
            'evento_salon' => $evento_salon,
            'evento_centro' => $evento_centro,
            'no' => $no,
            'no2' => $no2
        ]);
    }
    public static function actualizar(Router $router)
    {
        // redireccionar al admin
        $id = validarORedireccionar("/admin");
        $no = true;
        $no2 = true;
        $evento = Evento::find($id);
        $centro = Centroconsumo::all();
        $errores = Evento::getErrores();
        $salon = Salon::all();
        $evento_centro = Eventos_centros_consumo::where('id_eventos', $id);
        $evento_salon = Eventos_salon::where('id_eventos', $id);
        $evento_salones = Eventos_salon::all();
        $evento_centros = Eventos_centros_consumo::all();
        // metodo post para actualizar y mandarlo a la bd
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // asignar los atributos para que se almacenen mientras no se mandan a la base de datos
            $args = $_POST['evento'];
            $args2 = $_POST['evento_centro'];
            $args3 = $_POST['evento_salon'];

            $evento->sincronizar($args); //sincroniza los datos que el usuario escribio con lo que esta en memoria
           
        if($evento->tipo_lugar==='Salon'){
            if($evento_salon){
                $evento_salon->sincronizar($args3); 
            }else{
                if($evento_centro){
                    $evento_centro->eliminare();
                    $evento_salon=new Eventos_salon($_POST['evento_salon']);
                    $evento_salon->setId_evento($evento->id);
                }
            }
        }else{
            if($evento_centro){
                $evento_centro->sincronizar($args2); 
            }else{
                if($evento_salon){
                    $evento_salon->eliminare();
                    $evento_centro=new Eventos_centros_consumo($_POST['evento_centro']);
                    $evento_centro->setId_evento($evento->id);
                }else{
                    $evento_centro=new Eventos_centros_consumo($_POST['evento_centro']);
                        debuguear($evento_centro);
                    $evento_centro->setId_evento($evento->id);
                }
            }
        }
     

            $salon_escogido = false;
            $centro_escogido = false;
            if ($evento->tipo_lugar === "Salon") {
                // $evento2 = $_POST['evento_salon'];
                $salon_escogido = true;
            } else {
                // $evento3 = $_POST['evento_centro'];
                $centro_escogido = true;
            }

            $errores = $evento->validar();

            // subida de archivos
            // GENERARA NOMBRE UNICO PARA LAS IMAGENES
            $nombreImagen = md5(uniqid(rand(), true)) .  ".jpg"; //generan numeros aleatorios

            if ($_FILES['evento']['tmp_name']['imagen']) { //si existe la imagen
                $image = Image::make($_FILES['evento']['tmp_name']['imagen']);
                $evento->setImagen($nombreImagen);
            }


            // REVISAR QUE EL ARREGLO ESTE VACIO. ISSET REVISA QUE UNA VARIABLE ESTE CREADA Y EMPTY SI ESTA VACIO

            if (empty($errores)) { //en caso de que este vacio
                if ($_FILES['evento']['tmp_name']['imagen']) {
                    // ALMACENAR IMAGEN
                    $image->save(CARPETA_IMAGENES_EV . $nombreImagen);
                }
                // debuguear($evento);
               
                if ($centro_escogido) {
                    $evento_centro->guardar();
                } else {
                    $evento_salon->guardar();
                }
                 $evento->guardar();

            }
        }

        // pasar a la vista
        $router->render('/eventos/actualizar', [
            'evento' => $evento,
            'centro' => $centro,
            'salon' => $salon,
            'evento_salon' => $evento_salon,
            'evento_centro' => $evento_centro,
            'evento_salones' => $evento_salones,
            'evento_centros' => $evento_centros,
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
                    $evento = Evento::find($id);
                    if($evento->tipo_lugar==='Salon'){
                        $evento_salon=Eventos_salon::where('id_eventos', $evento->id);
                        $evento_salon->eliminare();
                    }else{
                        $evento_centro=Eventos_centros_consumo::where('id_eventos', $evento->id);
                        $evento_centro->eliminare();
                    }
                    $evento->eliminar();
                }
            }
        }
    }
}
