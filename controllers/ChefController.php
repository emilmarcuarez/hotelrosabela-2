<?php


namespace Controllers;
use MVC\Router;
use Model\Centroconsumo;
use Model\Chef;
use Intervention\Image\ImageManagerStatic as Image;


class ChefController{
    // funcion de crear Centro de consumo

    public static function index(Router $router){
        $chef=Chef::all();
        $no=true;
        $no2=true;
       
        // $no=true;
        // MUESTRA MENSAJE CONDICIONAL
        $resultado = $_GET['resultado'] ?? null; //sino esta el valor resultado, se le pone null y no presenta error, solo le asigna null y no falla
        //    la ubicacion de la vista que va a abrir, se pasa a render para que haga eso
        $router->render('chef/mostrar',[
            'chef'=>$chef,
            'resultado' =>$resultado,
            'no'=>$no,
            'no2'=>$no2
        ]);
}
    public static function crear(Router $router){
        $no=true; //no mostrar el menu
        $no2=true; //no mostrar el menu

        // arreglo con mensaje de errores
        $erorres= Chef::getErrores();
        $centro=Centroconsumo::all();
        $chef=new Chef;

        if($_SERVER['REQUEST_METHOD']==='POST'){
                $erorres= Chef::getErrores(); //se llaman los errores otra vez 
                // se crea una nueva instancia

                $chef=new Chef($_POST['chef']); //nombre del arreglo que SE VA A MANDAR

                // ----imagen-- nombre unico
                $nombreImagen=md5(uniqid(rand(), true)) . ".jpg";
                
            if($_FILES['chef']['tmp_name']['imagen']){
                    $image=Image::make($_FILES['chef']['tmp_name']['imagen']);
                    $chef->setImagen($nombreImagen);
            }

                // validar otra vez
                $erorres =$chef->validar();

            if(empty($erorres)){
                if(!is_dir(CARPETA_IMAGENES_CH)){
                    mkdir(CARPETA_IMAGENES_CH);  //cuando no hay errores se crea la carpeta
                }
                        // guardar la imagen en el servidor
                $image->save(CARPETA_IMAGENES_CH. $nombreImagen);
                $chef->guardar();
            }
        }
        $router->render('chef/crear',[
            'chef'=>$chef,
            'errores'=>$erorres,
            'centro'=>$centro,
            'no'=>$no,
            'no2'=>$no2
        ]);
    }

    // funcion actualizar centro de consumo
    public static function actualizar(Router $router){
        $id=validarORedireccionar('/admin');
        $no=true;
        $no2=true;
        $chef=Chef::find($id);

        $errores=Chef::getErrores();
        $centro= Centroconsumo::all();
        
        // al darle boton actualizar
        if($_SERVER['REQUEST_METHOD']==='POST'){

            // ASIGNAMOS LOS ATRIBUTOS A UNA VARIABLE
            $args=$_POST['chef'];

            $chef->sincronizar($args); //manda los datos que el usuario escribio a memoria

            $errores=$chef->validar();

            // subida de archivos
            $nombreImagen=md5(uniqid(rand(),true)) . ".jpg"; 

            if($_FILES['chef']['tmp_name']['imagen']){
                $image=Image::make($_FILES['chef']['tmp_name']['imagen']);
                $chef->setImagen($nombreImagen);
            }

            if(empty($errores)){
                if($_FILES['chef']['tmp_name']['imagen']){
                    $image->save(CARPETA_IMAGENES_CH. $nombreImagen);
                }
                $chef->guardar();
            }
        }
        $router->render('/chef/actualizar',[
            'chef'=>$chef,
            'centro'=>$centro,
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
                    $chef=Chef::find($id);
                    $chef->eliminar();
                }
            }
        }
    }

}