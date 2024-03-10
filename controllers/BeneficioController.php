<?php 

namespace Controllers;
use MVC\Router;
use Model\Beneficio;
use Model\Reserva;
use Model\ReservaHabitacion;

class BeneficioController{
    // funcion de crear Centro de consumo

    public static function index(Router $router){
        $beneficios=Beneficio::all();
     
        $no=true;
        $no2=true;
        // MUESTRA MENSAJE CONDICIONAL
        $resultado = $_GET['resultado'] ?? null; //sino esta el valor resultado, se le pone null y no presenta error, solo le asigna null y no falla
        //    la ubicacion de la vista que va a abrir, se pasa a render para que haga eso
        $router->render('beneficios/mostrar',[
            'beneficios'=>$beneficios,
            'resultado' =>$resultado,
            'no'=>$no,
            'no2'=>$no2
        ]);
}
    public static function crear(Router $router){
        $no=true; //no mostrar el menu
        $no2=true; //no mostrar el menu

        // arreglo con mensaje de errores
        $erorres= Beneficio::getErrores();
        $beneficio=new Beneficio;

        if($_SERVER['REQUEST_METHOD']==='POST'){
                $erorres= Beneficio::getErrores();

                $beneficio=new Beneficio($_POST['beneficio']); 
            if(empty($erorres)){
                $beneficio->guardar();
            }
        }
        $router->render('beneficios/crear',[
            'beneficio'=>$beneficio,
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
        $beneficio=Beneficio::find($id);

        $errores=Beneficio::getErrores();

        // al darle boton actualizar
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $args=$_POST['beneficio'];

            $beneficio->sincronizar($args); //manda los datos que el usuario escribio a memoria

            $errores=$beneficio->validar();

            if(empty($errores)){
             
                $beneficio->guardar();
            }
        }
        $router->render('/beneficios/actualizar',[
            'beneficio'=>$beneficio,
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
                    $beneficio=Beneficio::find($id);
                    $bene_reserva=Reserva::where2('id_beneficio', $id);
                   if($bene_reserva){
                    foreach($bene_reserva as $reserva){
                        $reserv_hab=ReservaHabitacion::where2('reserva_id', $reserva->id);
                        foreach($reserv_hab as $hab){
                            $hab->eliminare();
                        }
                        $reserva->eliminare();
                    }
                   }
                    
                    $beneficio->eliminar();
                }
            }
        }
    }


}