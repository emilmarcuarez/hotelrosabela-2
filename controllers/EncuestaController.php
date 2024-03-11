<?php 

namespace Controllers;
use MVC\Router;
use Model\Encuesta;
use Intervention\Image\ImageManagerStatic as Image;

class EmpleadosController{
    // funcion de crear Centro de consumo

    public static function index(Router $router){
        $empleados=Empleados::all();
     
        $no=true;
        $no2=true;
        // MUESTRA MENSAJE CONDICIONAL
        $resultado = $_GET['resultado'] ?? null; //sino esta el valor resultado, se le pone null y no presenta error, solo le asigna null y no falla
        //    la ubicacion de la vista que va a abrir, se pasa a render para que haga eso
        $router->render('empleados/mostrar',[
            'empleados'=>$empleados,
            'resultado' =>$resultado,
            'no'=>$no,
            'no2'=>$no2
        ]);
}
    public static function crear(Router $router){
        $no=true; //no mostrar el menu
        $no2=true; //no mostrar el menu

        // arreglo con mensaje de errores
        $erorres= Empleados::getErrores();
        $empleado=new Empleados;

        if($_SERVER['REQUEST_METHOD']==='POST'){
                $erorres= Empleados::getErrores(); //se llaman los errores otra vez 
                // se crea una nueva instancia

                $empleado=new Empleados($_POST['empleado']); //nombre del arreglo que SE VA A MANDAR

                // ----imagen-- nombre unico
                $nombreImagen=md5(uniqid(rand(), true)) . ".jpg";
                
            if($_FILES['empleado']['tmp_name']['imagen']){
                    $image=Image::make($_FILES['empleado']['tmp_name']['imagen'])->fit(800, 500);
                    $empleado->setImagen($nombreImagen);
            }

                // validar otra vez
                $erorres =$empleado->validar();

            if(empty($erorres)){
                if(!is_dir(CARPETA_IMAGENES_TR)){
                    mkdir(CARPETA_IMAGENES_TR);  //cuando no hay errores se crea la carpeta
                }
                        // guardar la imagen en el servidor
                $image->save(CARPETA_IMAGENES_TR. $nombreImagen);
                $empleado->guardar();
            }
        }
        $router->render('empleados/crear',[
            'empleado'=>$empleado,
            'errores'=>$erorres,
            'no'=>$no,
            'no2'=>$no2
        ]);
    }

    // funcion actualizar centro de consumo
    public static function actualizar(Router $router){
        $id=validarORedireccionar('/admin');
        $no=true;
        $no2=true;
        $empleado=Empleados::find($id);

        $errores=Empleados::getErrores();

        // al darle boton actualizar
        if($_SERVER['REQUEST_METHOD']==='POST'){

            // ASIGNAMOS LOS ATRIBUTOS A UNA VARIABLE
            $args=$_POST['empleados'];

            $empleado->sincronizar($args); //manda los datos que el usuario escribio a memoria

            $errores=$empleado->validar();

            // subida de archivos
            $nombreImagen=md5(uniqid(rand(),true)) . ".jpg"; 

            if($_FILES['empleado']['tmp_name']['imagen']){
                $image=Image::make($_FILES['empleado']['tmp_name']['imagen']);
                $empleado->setImagen($nombreImagen);
            }

            if(empty($errores)){
                if($_FILES['empleado']['tmp_name']['imagen']){
                    $image->save(CARPETA_IMAGENES_TR. $nombreImagen);
                }
                $empleado->guardar();
            }
        }
        $router->render('/empleados/actualizar',[
            'empleado'=>$empleado,
            'errorres'=>$errores,
            'no'=>$no,
            'no2'=>$no2
        ]);
    }
    
    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD']=== 'POST'){
            // validar id
            $id=$_POST['id'];
            $id=filter_var($id, FILTER_VALIDATE_INT);

            if($id){
                $tipo=$_POST['tipo'];

                if(validarTipoContenido($tipo)){
                    $empleado=Empleados::find($id);
                    $empleado->eliminar();
                }
            }
        }
    }


}