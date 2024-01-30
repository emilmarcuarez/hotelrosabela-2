<?php


namespace Controllers;
use Model\Habitaciones;
use Model\Reserva;
use Model\ReservaHabitacion;
class ApiController{
    public static function index(){
        $habitaciones = Habitaciones::all();
        echo json_encode($habitaciones);
    } 
    public static function guardar() {
      
        $cita = new Reserva($_POST);
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


        // // almacena la reserva y devuelve el id
        // $cita = new Reserva($_POST);
        // $habitacion_re = $_POST['habitaciones_re'];
    
        // $resultado = $cita->guardar();
     
        // $id = $resultado['id'];

        // // Almacena la Cita y el Servicio
        
        //     $resultado=[
        //         'habitaciones'=>$_POST['habitaciones']
              
        //     ];
        // // Almacena los Servicios con el ID de la reserva
        // $idHabitaciones = explode(",", $_POST['habitaciones']);
        // foreach($idHabitaciones as $idHabitacion) {
        //     $args = [
        //         'reserva_id' => $id,
        //         'habitaciones_id' => $idHabitacion,
        //         // 'cantidad_d' => $_POST['cantidad_d'], // Modifica según tu estructura de datos
        //         // 'cantidad_s' => $_POST['cantidad_s']  // Modifica según tu estructura de datos
        //     ];
        //     $reservaHabitacion = new ReservaHabitacion($args);
        //     $reservaHabitacion->guardar();
        // }

        // // echo json_encode($resultado);
        // $respuesta=[
        //     'resultado'=>$resultado
        // ];
        // // echo json_encode(['resultado' => $resultado]);
        // echo json_encode($respuesta);
    }

}