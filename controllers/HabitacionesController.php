<?php 

namespace Controllers;
use MVC\Router;
use Model\Habitaciones;
use Intervention\Image\ImageManagerStatic as Image;

class HabitacionesController{
    // funcion de crear Centro de consumo

    public static function index(Router $router){
        $habitaciones=Habitaciones::all();
     
        // $no=true;
        // MUESTRA MENSAJE CONDICIONAL
        $resultado = $_GET['resultado'] ?? null; //sino esta el valor resultado, se le pone null y no presenta error, solo le asigna null y no falla
        //    la ubicacion de la vista que va a abrir, se pasa a render para que haga eso
        $router->render('habitaciones/mostrar',[
            'habitaciones'=>$habitaciones,
            'resultado' =>$resultado
        ]);
    }
    public static function crear(Router $router){
        $no=true; //no mostrar el menu

        // arreglo con mensaje de errores
        $erorres= Habitaciones::getErrores();
        $habitacion=new Habitaciones;

        if($_SERVER['REQUEST_METHOD']==='POST'){
                $erorres= Habitaciones::getErrores(); //se llaman los errores otra vez 
                // se crea una nueva instancia

                $habitacion=new Habitaciones($_POST['habitacion']); //nombre del arreglo que SE VA A MANDAR

                // ----imagen-- nombre unico
                $nombreImagen=md5(uniqid(rand(), true)) . ".jpg";
                
            if($_FILES['habitacion']['tmp_name']['imagen']){
                    $image=Image::make($_FILES['habitacion']['tmp_name']['imagen'])->fit(800, 500);
                    $habitacion->setImagen($nombreImagen);
            }

                // validar otra vez
                $erorres =$habitacion->validar();

            if(empty($erorres)){
                if(!is_dir(CARPETA_IMAGENES_HA)){
                    mkdir(CARPETA_IMAGENES_HA);  //cuando no hay errores se crea la carpeta
                }
                        // guardar la imagen en el servidor
                $image->save(CARPETA_IMAGENES_HA. $nombreImagen);
                $habitacion->guardar();
            }
        }
        $router->render('habitaciones/crear',[
            'habitacion'=>$habitacion,
            'errores'=>$erorres
            // 'no'=>$no
        ]);
    }

    // funcion actualizar centro de consumo
    public static function actualizar(Router $router){
        $id=validarORedireccionar('/admin');
        // $no=true;
        $habitacion=Habitaciones::find($id);

        $errores=Habitaciones::getErrores();

        // al darle boton actualizar
        if($_SERVER['REQUEST_METHOD']==='POST'){

            // ASIGNAMOS LOS ATRIBUTOS A UNA VARIABLE
            $args=$_POST['habitacion'];

            $habitacion->sincronizar($args); //manda los datos que el usuario escribio a memoria

            $errores=$habitacion->validar();

            // subida de archivos
            $nombreImagen=md5(uniqid(rand(),true)) . ".jpg"; 

            if($_FILES['habitacion']['tmp_name']['imagen']){
                $image=Image::make($_FILES['habitacion']['tmp_name']['imagen'])->fit(800, 500);
                $habitacion->setImagen($nombreImagen);
            }

            if(empty($errores)){
                if($_FILES['habitacion']['tmp_name']['imagen']){
                    $image->save(CARPETA_IMAGENES_HA. $nombreImagen);
                }
                $habitacion->guardar();
            }
        }
        $router->render('/habitaciones/actualizar',[
            'habitacion'=>$habitacion,
            'errorres'=>$errores
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
                    $habitacion=Habitaciones::find($id);
                    $habitacion->eliminar();
                }
            }
        }
    }


}