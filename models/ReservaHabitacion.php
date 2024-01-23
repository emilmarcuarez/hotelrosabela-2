<?php
 namespace Model;
 use Model\Activerecord;

 class ReservaHabitacion extends Activerecord{
    protected static $tabla = 're_habitaciones';
    protected static $pagina='habitaciones/mostrar';
    protected static $columnasDB=['id','habitaciones_id' ,'reserva_id', 'cantidad_s', 'cantidad_d'];

    public $id;
    public $reserva_id;
    public $habitaciones_id;
    public $cantidad_s;
    public $cantidad_d;   
    
    public function __construct($args=[]){
      $this->id=$args['id'] ?? null;
      $this->reserva_id=$args['reserva_id'] ?? '';
      $this->habitaciones_id=$args['habitaciones_id'] ?? '';
      $this->cantidad_s=$args['cantidad_s'] ?? '1';
      $this->cantidad_d=$args['cantidad_d'] ?? '1';
    }

    public function validar(){
      // if(!$this->imagen){
      //    self::$errores[]="La imagen es obligatoria";
      // }
      // if(!$this->nombre){
      //    self::$errores[]="El nombre es obligatorio";
      // }
      // if(!$this->descripcion){
      //    self::$errores[]="La descripcion es obligatoria";
      // }
      // if(!$this->servicios){
      //    self::$errores[]="Losserviciosson obligatorios";
      // }
      // if(!$this->preciocd){
      //    self::$errores[]="El precio con desayuno es obligatorio";
      // }
      // if(!$this->preciosd){
      //    self::$errores[]="El precio sin desayuno es obligatorio";
      // }
      // return self::$errores;
    }
    public function guardar()
    {
        if (!is_null($this->id)) {
            // actualizar
            $resultado=$this->actualizar();
        } else {
            // crear un nuevo registro
           $resultado= $this->crear();
        }
        return $resultado;
    }
    public function crear()
    {

        // sanitizar los datos
        $atributos = $this->sanitizarAtributos();


        // insertar a la BASE DE DATOS
        $query = "INSERT INTO ". static::$tabla. " (";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES ('";
        $query .= join("', '",array_values($atributos));
        $query .= "') ";

        $resultado = self::$db->query($query);
        //   return es un false or true
        // Mensaje de exito
        return [
            'resultado'=>$resultado,
            'id'=>self::$db->insert_id
        ];
    }
 }