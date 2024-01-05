<?php 

namespace Controllers;
use MVC\Router;
use Model\Evento;
use Model\Centroconsumo;
use Intervention\Image\ImageManagerStatic as Image;

class eventosController{
 
    public static function index(Router $router){
        $eventos=Evento::all();
     
        // $no=true;
        // MUESTRA MENSAJE CONDICIONAL
        $resultado = $_GET['resultado'] ?? null; //sino esta el valor resultado, se le pone null y no presenta error, solo le asigna null y no falla
        //    la ubicacion de la vista que va a abrir, se pasa a render para que haga eso
        $router->render('eventos/mostrar',[
            'eventos'=>$eventos,
            'resultado' =>$resultado
        ]);
}
public static function crear(Router $router){
   
   
   $no=true;
   // ARREGLO CON MENSAJE DE ERRORES
   
    $errores = Evento::getErrores();
    $centro= Centroconsumo::all();
    $evento=new Evento;


   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errores = Evento::getErrores();

    // para mandarlo a la clase
    // crea una nueva instancia
    $evento = new Evento($_POST['evento']);
    // ----------------SUBIDA DE ARCHIVOS----------------


    // GENERARA NOMBRE UNICO PARA LAS IMAGENES
    $nombreImagen = md5(uniqid(rand(), true)) .  ".jpg"; //generan numeros aleatorios

    // SETEAR LA IMAGEN
    // Realiza un resize a la imagen con intervention
    // debuguear($_FILES['imagen']['tmp_name']);
    if ($_FILES['evento']['tmp_name']['imagen']) { //si existe la imagen
        $image = Image::make($_FILES['evento']['tmp_name']['imagen'])->fit(800, 500);
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

        $evento->guardar();

    }
}

    // render es metodo para crear una vista
    $router->render('eventos/crear',[
        'evento'=>$evento,
        'errores'=>$errores,
        'centro'=>$centro,
        'no'=>$no
    ]);
}
public static function actualizar(Router $router){
    // redireccionar al admin
    $id= validarORedireccionar("/admin");
    $no=true;
    $evento=Evento::find($id);
    $centro= Centroconsumo::all();
    $errores=Evento::getErrores();

    // metodo post para actualizar y mandarlo a la bd
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

// asignar los atributos para que se almacenen mientras no se mandan a la base de datos
$args = $_POST['evento'];

$evento->sincronizar($args); //sincroniza los datos que el usuario escribio con lo que esta en memoria
// validacion
$errores = $evento->validar();

// subida de archivos
 // GENERARA NOMBRE UNICO PARA LAS IMAGENES
 $nombreImagen = md5(uniqid(rand(), true)) .  ".jpg"; //generan numeros aleatorios

if ($_FILES['evento']['tmp_name']['imagen']) { //si existe la imagen
    $image = Image::make($_FILES['evento']['tmp_name']['imagen'])->fit(800, 500);
    $evento->setImagen($nombreImagen);
}


// REVISAR QUE EL ARREGLO ESTE VACIO. ISSET REVISA QUE UNA VARIABLE ESTE CREADA Y EMPTY SI ESTA VACIO

if (empty($errores)) { //en caso de que este vacio
    if ($_FILES['evento']['tmp_name']['imagen']) {
        // ALMACENAR IMAGEN
        $image->save(CARPETA_IMAGENES_EV . $nombreImagen);
        
    }
    $evento->guardar();
}
}

    // pasar a la vista
    $router->render('/eventos/actualizar',[
        'evento'=>$evento,
        'centro'=>$centro,
        'errores'=>$errores,
        'no'=>$no
    ]);
}
public static function eliminar(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // validar id
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
    
        if ($id) {
        
            $tipo=$_POST['tipo'];
            if(validarTipoContenido($tipo)){
                // comparar lo que se va eliminar
              $evento=Evento::find($id);
              $evento->eliminar();
            }
        }
    }
    } 
}
