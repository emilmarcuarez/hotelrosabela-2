<?php

namespace Model;
use Model\Activerecord;
class Comentarios extends Activerecord{
    protected static $tabla='comentarios';
    protected static $columnasDB=['id', 'centros_consumo_id', 'usuarios_id', 'mensaje', 'creado','valor'];

    public $id;
    public $centros_consumo_id;
    public $usuarios_id;
    public $mensaje;
    public $creado;
    public $valor;
    

    public function __construct($args =[]){
        $this->id=$args['id'] ?? null;
        $this->centros_consumo_id=$args['centros_consumo_id'] ?? '';
        $this->usuarios_id=$args['usuarios_id'] ?? '';
        $this->mensaje=$args['mensaje'] ?? '';
        $this->valor =$args['valor'] ?? '';
        $this->creado = date('Y/m/d');
    
    }
    public function validar(){
        if(!$this->mensaje){
            self::$errores[]='El mensaje es obligatorio';
        }
        if(!$this->usuarios_id){
            self::$errores[]='Es necesario iniciar sesion';
        }
        return self::$errores;
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
        return [
            'resultado'=>$resultado,
            'id'=>self::$db->insert_id
        ];
    }
   
}