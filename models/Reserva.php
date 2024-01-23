<?php
 namespace Model;
 use Model\Activerecord;

 class Reserva extends Activerecord{
    protected static $tabla = 'reserva';
    protected static $pagina='Reservas/mostrar';
    protected static $columnasDB=['id', 'fecha_i', 'fecha_e','cantidad', 'solicitudes', 'monto', 'usuarios_id', 'ninos','adultos', 'hora_ll','opcion_pago'];


    public $id;
    public $fecha_i;
    public $fecha_e;
    public $cantidad;
    public $solicitudes;
    public $monto;
    public $usuarios_id;
    public $ninos;
    public $adultos;
    public $hora_ll;
    public $opcion_pago;
    public function __construct($args=[]){
      $this->id=$args['id'] ?? null;
      $this->fecha_i=$args['fecha_i'] ?? '';
      $this->fecha_e=$args['fecha_e'] ?? '';
      $this->cantidad=$args['cantidad'] ?? '21';
      $this->solicitudes=$args['solicitudes'] ?? '';
      $this->monto=$args['monto'] ?? '';
      $this->usuarios_id=$args['usuarios_id'] ?? '1';
      $this->ninos=$args['ninos'] ?? '1';
      $this->adultos=$args['adultos'] ?? '1';
      $this->hora_ll=$args['hora_ll'] ?? '';
      $this->opcion_pago=$args['opcion_pago'] ?? '';
    }

    public function validar(){
    //   if(!$this->nombre){
    //      self::$errores[]="Debes añadirle un nombre al chef";
    //   }
    //   if(!$this->apellido){
    //      self::$errores[]="El apellido es obligatorio";
    //   }
    //   if(!$this->imagen){
    //      self::$errores[]="La imagen es obligatoria";
    //   }
    //   if(!$this->centros_consumo_id){
    //      self::$errores[]="Debes seleccionar el centro de consumo para el cual trabaja";
    //   }
    //   if(!$this->descripcion){
    //      self::$errores[]="La descripcion es obligatoria";
    //   }
    //   return self::$errores;
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
    public function eliminar(){
      $query="DELETE FROM ".static::$tabla." WHERE id= ".self::$db->escape_string($this->id). " LIMIT 1";
      $resultado=self::$db->query($query);
      if($resultado){
         $this->borrarImagen();

         header('location: /'.static::$pagina.'?resultado=3');
      }
    }
 }