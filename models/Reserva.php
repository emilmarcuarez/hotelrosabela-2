<?php
 namespace Model;
 use Model\Activerecord;

 class Reserva extends Activerecord{
    protected static $tabla = 'reserva';
    protected static $pagina='Reservas/mostrar';
    protected static $columnasDB=['id', 'fecha_i', 'fecha_e','cantidad', 'solicitudes', 'monto', 'usuarios_id', 'ninos','adultos', 'hora_ll','opcion_pago','codigo','status','imagen','traslado'];


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
    public $codigo;
    public $status;
    public $imagen;
    public $traslado;
    public function __construct($args=[]){
      $this->id=$args['id'] ?? null;
      $this->fecha_i=$args['fecha_i'] ?? '';
      $this->fecha_e=$args['fecha_e'] ?? '';
      $this->cantidad=$args['cantidad'] ?? '21';
      $this->solicitudes=$args['solicitudes'] ?? '';
      $this->monto=$args['monto'] ?? 2;
      $this->usuarios_id=$args['usuarios_id'] ?? '';
      $this->ninos=$args['ninos'] ?? '1';
      $this->adultos=$args['adultos'] ?? '1';
      $this->hora_ll=$args['hora_ll'] ?? '';
      $this->opcion_pago=$args['opcion_pago'] ?? '';
      $this->codigo=$args['codigo'] ?? '';
      $this->status=$args['status'] ?? 2;
      $this->imagen=$args['imagen'] ?? '';
      $this->traslado=$args['traslado'] ?? '';
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
        // debuguear($query);
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

      }
    }
    // busca todas las reservas de un usuario especifico
    public static function reserva_hab($id)
    {
        $query = "SELECT * FROM ". static::$tabla. " WHERE usuarios_id= ".$id." ORDER BY id DESC;";
        // se sigue el principio de active record que es tener todo en objetos
        $resultado = self::consultarSQL($query);
        return $resultado;
    }
    // cancela las reservas automaticamente
    public static function reservas(){
        $query = "UPDATE reserva SET status = 3 WHERE fecha_i < CURDATE() AND status!=1;";
        $resultado =self::$db->query($query);
        return $resultado;
    }

    public static function actstatus($id){
        $query = "UPDATE reserva SET status = 1 WHERE id=".$id.";";
        $resultado =self::$db->query($query);
        return $resultado;
    }
    public static function actstatus2($id){
        $query = "UPDATE reserva SET status = 4 WHERE id=".$id.";";
        $resultado =self::$db->query($query);
        return $resultado;
    }
  
      public function borrarImagen(){
        $existeArchivo=file_exists(CARPETA_IMAGENES_RESERVA . $this->imagen);
        if($existeArchivo){
           unlink(CARPETA_IMAGENES_RESERVA . $this->imagen);
        }
      }
 }