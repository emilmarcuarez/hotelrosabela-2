<?php
 namespace Model;
 use Model\Activerecord;

 class Reserva extends Activerecord{
    protected static $tabla = 'reserva';
    protected static $pagina='Reservas/mostrar';
    protected static $columnasDB=['id', 'fecha_i', 'fecha_e','cantidad', 'solicitudes', 'monto', 'ninos','adultos', 'hora_ll','opcion_pago','codigo','status','imagen','traslado', 'i_fiscal','n_empresa','apellidos', 'nombres', 'nro_telefono', 'email', 'fecha_pago', 'banco', 'referencia', 'monto_transferencia', 'numero_i', 'nacionalidad'];


    public $id;
    public $fecha_i;
    public $fecha_e;
    public $cantidad;
    public $solicitudes;
    public $monto;
    public $ninos;
    public $adultos;
    public $hora_ll;
    public $opcion_pago;
    public $codigo;
    public $status;
    public $imagen;
    public $traslado;
    public $i_fiscal;
    public $n_empresa;
    public $nombres;
    public $apellidos;
    public $nro_telefono;
    public $email;
    public $fecha_pago;
    public $banco;
    public $referencia;
    public $monto_transferencia;
    public $numero_i;
    public $nacionalidad;
    public function __construct($args=[]){
      $this->id=$args['id'] ?? null;
      $this->fecha_i=$args['fecha_i'] ?? '';
      $this->fecha_e=$args['fecha_e'] ?? '';
      $this->cantidad=$args['cantidad'] ?? '21';
      $this->solicitudes=$args['solicitudes'] ?? '';
      $this->monto=$args['monto'] ?? 2;
      $this->ninos=$args['ninos'] ?? '1';
      $this->adultos=$args['adultos'] ?? '1';
      $this->hora_ll=$args['hora_ll'] ?? '';
      $this->opcion_pago=$args['opcion_pago'] ?? '';
      $this->codigo=$args['codigo'] ?? '';
      $this->status=$args['status'] ?? 2;
      $this->imagen=$args['imagen'] ?? '';
      $this->traslado=$args['traslado'] ?? '';
      $this->i_fiscal=$args['i_fiscal'] ?? '0xxx';
      $this->nombres=$args['nombres'] ?? '';
      $this->apellidos=$args['apellidos'] ?? '';
      $this->nro_telefono=$args['nro_telefono'] ?? '';
      $this->email=$args['email'] ?? '';
      $this->fecha_pago=$args['fecha_pago'] ?? '';
      $this->banco=$args['banco'] ?? '';
      $this->referencia=$args['referencia'] ?? '';
      $this->banco=$args['banco'] ?? '';
      $this->monto_transferencia=$args['monto_transferencia'] ?? '';
      $this->numero_i=$args['numero_i'] ?? '';
      $this->nacionalidad=$args['nacionalidad'] ?? '';
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
        // debuguear($query);
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