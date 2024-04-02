<?php 

namespace Controllers;
use MVC\Router;
use Model\Salon;
use Intervention\Image\ImageManagerStatic as Image;

class SalonesController{
 
    public static function index(Router $router){
        $salones=Salon::all();
        $no2=true;
            $no=true;
        $resultado = $_GET['resultado'] ?? null;
     
        $router->render('salones/mostrar',[
            'salones'=>$salones,
            'resultado' =>$resultado,
            'no'=>$no,
            'no2'=>$no2,
        ]);
    }
public static function crear(Router $router){
    $no2=true;
    $no=true;
   
   // ARREGLO CON MENSAJE DE ERRORES
   
    $errores = Salon::getErrores();
    $salon=new Salon;


   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errores = Salon::getErrores();

    
    $salon = new Salon($_POST['salon']);
    // ----------------SUBIDA DE ARCHIVOS----------------

    $nombreImagen = md5(uniqid(rand(), true)) .  ".jpg"; //generan numeros aleatorios

    if ($_FILES['salon']['tmp_name']['imagen']) { //si existe la imagen
        $image = Image::make($_FILES['salon']['tmp_name']['imagen'])->fit(800, 500);
        $salon->setImagen($nombreImagen);
    }

    // VALIDAR
    $errores = $salon->validar();



    // REVISAR QUE EL ARREGLO ESTE VACIO. ISSET REVISA QUE UNA VARIABLE ESTE CREADA Y EMPTY SI ESTA VACIO
    if (empty($errores)) { 

        if (!is_dir(CARPETA_IMAGENES_SA)) { 
            mkdir(CARPETA_IMAGENES_SA); 
        }

        $image->save(CARPETA_IMAGENES_SA . $nombreImagen);

        $salon->guardar();

    }
}

    // render es metodo para crear una vista
    $router->render('salones/crear',[
        'salon'=>$salon,
        'no'=>$no,
        'no2'=>$no2
    ]);
}
public static function actualizar(Router $router){
    // redireccionar al admin
    $id= validarORedireccionar("/admin");
    $no2=true;
     $no=true;
    $salon=Salon::find($id);
    $errores=Salon::getErrores();

    // metodo post para actualizar y mandarlo a la bd
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

// asignar los atributos para que se almacenen mientras no se mandan a la base de datos
$args = $_POST['salon'];

$salon->sincronizar($args); //sincroniza los datos que el usuario escribio con lo que esta en memoria
// validacion
$errores = $salon->validar();

// subida de archivos
 // GENERARA NOMBRE UNICO PARA LAS IMAGENES
 $nombreImagen = md5(uniqid(rand(), true)) .  ".jpg"; //generan numeros aleatorios

if ($_FILES['salon']['tmp_name']['imagen']) { //si existe la imagen
    $image = Image::make($_FILES['salon']['tmp_name']['imagen'])->fit(800, 500);
    $salon->setImagen($nombreImagen);
}


// REVISAR QUE EL ARREGLO ESTE VACIO. ISSET REVISA QUE UNA VARIABLE ESTE CREADA Y EMPTY SI ESTA VACIO

if (empty($errores)) { //en caso de que este vacio
    if ($_FILES['salon']['tmp_name']['imagen']) {
        // ALMACENAR IMAGEN
        $image->save(CARPETA_IMAGENES_SA . $nombreImagen);
        
    }
    $salon->guardar();
}
}

    // pasar a la vista
    $router->render('/salones/actualizar',[
        'salon'=>$salon,
        'errores'=>$errores,
        'no'=>$no,
        'no2'=>$no2
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
              $salon=Salon::find($id);
              $salon->eliminar();
            }
        }
    }
    } 
}
