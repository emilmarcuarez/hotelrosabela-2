<?php 

namespace Controllers;
use MVC\Router;
use Model\Centroconsumo;
use Intervention\Image\ImageManagerStatic as Image;

class CentroconsumoController{
    // funcion de crear Centro de consumo

        public static function admin(Router $router){
    
            
        $router->render('admin',[
           
        ]);
    }
    public static function index(Router $router){
        $centros=Centroconsumo::all();
     
        // $no=true;
        // MUESTRA MENSAJE CONDICIONAL
        $resultado = $_GET['resultado'] ?? null; //sino esta el valor resultado, se le pone null y no presenta error, solo le asigna null y no falla
        //    la ubicacion de la vista que va a abrir, se pasa a render para que haga eso
        $router->render('centrosconsumo/mostrar',[
            'centros'=>$centros,
            'resultado' =>$resultado
        ]);
}
    public static function crear(Router $router){
        $no=true; //no mostrar el menu

        // arreglo con mensaje de errores
        $erorres= Centroconsumo::getErrores();
        $centro=new Centroconsumo;

        if($_SERVER['REQUEST_METHOD']==='POST'){
                $erorres= Centroconsumo::getErrores(); //se llaman los errores otra vez 
                // se crea una nueva instancia

                $centro=new Centroconsumo($_POST['centro']); //nombre del arreglo que SE VA A MANDAR

                // ----imagen-- nombre unico
                $nombreImagen=md5(uniqid(rand(), true)) . ".jpg";
                
            if($_FILES['centro']['tmp_name']['imagen']){
                    $image=Image::make($_FILES['centro']['tmp_name']['imagen'])->fit(800, 500);
                    $centro->setImagen($nombreImagen);
            }

                // validar otra vez
                $erorres =$centro->validar();

            if(empty($erorres)){
                if(!is_dir(CARPETA_IMAGENES_RE)){
                    mkdir(CARPETA_IMAGENES_RE);  //cuando no hay errores se crea la carpeta
                }
                        // guardar la imagen en el servidor
                $image->save(CARPETA_IMAGENES_RE. $nombreImagen);
                $centro->guardar();
            }
        }
        $router->render('centrosconsumo/crear',[
            'centro'=>$centro,
            'errores'=>$erorres,
            'no'=>$no
        ]);
    }

    // funcion actualizar centro de consumo
    public static function actualizar(Router $router){
        $id=validarORedireccionar('/admin');
        $no=true;
        $centro=Centroconsumo::find($id);

        $errores=Centroconsumo::getErrores();

        // al darle boton actualizar
        if($_SERVER['REQUEST_METHOD']==='POST'){

            // ASIGNAMOS LOS ATRIBUTOS A UNA VARIABLE
            $args=$_POST['centro'];

            $centro->sincronizar($args); //manda los datos que el usuario escribio a memoria

            $errores=$centro->validar();

            // subida de archivos
            $nombreImagen=md5(uniqid(rand(),true)) . ".jpg"; 

            if($_FILES['centro']['tmp_name']['imagen']){
                $image=Image::make($_FILES['centro']['tmp_name']['imagen'])->fit(800, 500);
                $centro->setImagen($nombreImagen);
            }

            if(empty($errores)){
                if($_FILES['centro']['tmp_name']['imagen']){
                    $image->save(CARPETA_IMAGENES_RE. $nombreImagen);
                }
                $centro->guardar();
            }
        }
        $router->render('/centrosconsumo/actualizar',[
            'centro'=>$centro,
            'errorres'=>$errores,
            'no'=>$no
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
                    $centro=Centroconsumo::find($id);
                    $centro->eliminar();
                }
            }
        }
    }


}