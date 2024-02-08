<?php
 namespace Model;
 use Model\Activerecord;

 class Chat extends Activerecord{
    protected static $tabla = 'chat';
    protected static $pagina='chat/mostrar';
    protected static $columnasDB=['id', 'mensaje', 'usuarios_id','usuario_admi_id','codigo'];

    public $id;
    public $mensaje;
    public $usuarios_id;
    public $usuario_admi_id;
    public $codigo;
    public function __construct($args=[]){
      $this->id=$args['id'] ?? null;
      $this->mensaje=$args['mensaje'] ?? '';
      $this->usuarios_id=$args['usuarios_id'] ?? '';
      $this->usuario_admi_id=$args['usuario_admi_id'] ?? '1';
      $this->codigo=$args['codigo'] ?? '';
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
        return $resultado['id']; // Devolver el ID del mensaje creado
    }
    public function setCodigo($codo){
        $this->codigo=$codo;
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
        // debuguear($resultado);
        return [
            'resultado'=>$resultado,
            'id'=>self::$db->insert_id
        ];
    }
    public function getIdUsuario(){
        return $this->usuarios_id;
    }
    
}