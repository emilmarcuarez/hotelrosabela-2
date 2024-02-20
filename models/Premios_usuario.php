<?php

namespace Model;
class Premios_usuario extends Activerecord
{
  protected static $tabla='premios_usuario';
  protected static $pagina='premios';
  protected static $columnasDB = ['id', 'premio_id', 'usuarios_id','status', 'usado','fecha'];

  
  public $id;
  public $premio_id;
  public $usuarios_id;
  public $status;
  public $usado;
  public $fecha;

  public function __construct($args = [])
  {
      $this->id = $args['id'] ?? null;
      $this->premio_id = $args['premio_id'] ?? '';
      $this->usuarios_id = $args['usuarios_id'] ?? '';
      $this->status = $args['status'] ?? '0';
      $this->usado = $args['usado'] ?? '0';
      $this->fecha = date('Y/m/d');
  }

  public function validar()
  {
      if (!$this->premio_id) {
          self::$errores[] = "Debes añadir un premio";
      }
      if (!$this->usuarios_id) {
          self::$errores[] = "No se puede registrar un premio si no hay un usuario";
      }
      return self::$errores;
  }


  public function guardar()
    {
        if (!is_null($this->id)) {
            // actualizar
            $this->actualizar();
        } else {
            // crear un nuevo registro
            $this->crear();
        }
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
  
        if ($resultado) {

            header('location: /'.static::$pagina.'?id='.$atributos["usuarios_id"].'&resultado=4');
        }
    }
    public function actualizar()
    {
        // sanitizar los datos. siempre que se va a usar la bd
        $atributos = $this->sanitizarAtributos();

        $valores = [];
        foreach ($atributos as $key => $value) {
            $valores[] = "$key ='{$value}'";
        }
        $query = "UPDATE ". static::$tabla. " SET ";
        $query .= join(', ', $valores);
        $query .= " WHERE id = '" . self::$db->escape_string($this->id) . "' ";
        $query .= " LIMIT 1 ";

        $resultado = self::$db->query($query);
        if ($resultado) {
            //    redirecciona al usuario para que se borra la info cuando se envie
            // esto se debe hacer poco, se puede hacer un loop de muchas redirecciones
            header('location: /'.static::$pagina.'?id='.$atributos["usuarios_id"].'&resultado=5');
        }
        return $resultado;
    }

    public function actualizar2() {
        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        // Iterar para ir agregando cada campo de la BD
        $valores = [];
        foreach($atributos as $key => $value) {
            $valores[] = "{$key}='{$value}'";
        }

        // Consulta SQL
        $query = "UPDATE " . static::$tabla ." SET ";
        $query .=  join(', ', $valores );
        $query .= " WHERE id = '" . self::$db->escape_string($this->id) . "' ";
        $query .= " LIMIT 1 "; 

        // Actualizar BD
        $resultado = self::$db->query($query);
        return $resultado;
    }
}
