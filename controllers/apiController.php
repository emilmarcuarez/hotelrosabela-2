<?php


namespace Controllers;
use Model\Habitaciones;
use Model\Reserva;
use Model\ReservaHabitacion;
use Model\Usuario;
use Classes\Email;
use Intervention\Image\ImageManagerStatic as Image;
class ApiController{
    public static function index(){
        $habitaciones = Habitaciones::all();
        echo json_encode($habitaciones);
    } 
    public static function guardar() {
      
        $cita = new Reserva($_POST);
       
        $nombreImagen=md5(uniqid(rand(), true)) . ".jpg";
                
        if(isset($_FILES['imagen']) && !empty($_FILES['imagen']['name'])){
                $image=Image::make($_FILES['imagen']['tmp_name'])->fit(800, 500);
                $cita->setImagen($nombreImagen);
        
                if(!is_dir(CARPETA_IMAGENES_RESERVA)){
                    mkdir(CARPETA_IMAGENES_RESERVA); 
            }
                // guardar la imagen en el servidor
              $image->save(CARPETA_IMAGENES_RESERVA. $nombreImagen);
        }

        // $email=new Email('','','','');
        // $email->enviarReserva();
        $resultado = $cita->guardar();
        $id = $resultado['id'];
    
        $habitaciones = isset($_POST['habitaciones']) ? $_POST['habitaciones'] : [];
        foreach ($habitaciones as $habitacion) {
            $idHabitacion = $habitacion['id'];
            $cantidad_d = $habitacion['cantidad_d'];
            $cantidad_s = $habitacion['cantidad_s'];
            
            // Aquí puedes almacenar las cantidades en la base de datos,
            // por ejemplo, utilizando la clase ReservaHabitacion
            $args = [
                'reserva_id' => $id,
                'habitaciones_id' => $idHabitacion,
                'cantidad_d' => $cantidad_d,
                'cantidad_s' => $cantidad_s,
            ];
            $reservaHabitacion = new ReservaHabitacion($args);
            $reservaHabitacion->guardar();
        }
    
        $respuesta = [
            'resultado' => $resultado
        ];
    
        echo json_encode($respuesta);

    // }

}
}
