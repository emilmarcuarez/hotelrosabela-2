<?php

namespace Model;
class Evento extends Activerecord
{
  protected static $tabla='eventos';
  protected static $pagina='eventos/mostrar';
  protected static $columnasDB = ['id', 'nombre', 'descripcion', 'imagen', 'fecha', 'horario','tipo_lugar'];
  
  public $id;
  public $nombre;
  public $descripcion;
  public $imagen;
  public $fecha;
  public $horario;
  public $tipo_lugar;

  
  

  public function __construct($args = [])
  {
      $this->id = $args['id'] ?? null;
      $this->nombre = $args['nombre'] ?? '';
      $this->descripcion = $args['descripcion'] ?? '';
      $this->imagen = $args['imagen'] ?? '';
      $this->fecha = $args['fecha'] ?? '';
      $this->horario = $args['horario'] ?? '';
      $this->tipo_lugar = $args['tipo_lugar'] ?? '';
  }

  public function validar()
  {
      if (!$this->nombre) {
          self::$errores[] = "Debes añadir un nombre";
      }
      if (!$this->descripcion) {
          self::$errores[] = "La descripcion es obligatorio";
      }
      if (!$this->fecha) {
          self::$errores[] = "La fecha es obligatorio";
      }
      if (!$this->imagen) {
          self::$errores[] = "La imagen es obligatoria";
      }
      if (!$this->horario) {
        self::$errores[] = "El horario es obligatorio";
    }
      return self::$errores;
  }
  public function eliminar()
  {
      // ELIMINAR el registro
      $query = "DELETE FROM ". static::$tabla. " WHERE id= " . self::$db->escape_string($this->id) . " LIMIT 1";
      $resultado = self::$db->query($query);
      if ($resultado) {
          $this->borrarImagen();
          // despues del link se pone un '?' y posterior el nombre de la variable que uno quiere y se iguala a un numero
          header('location: /'.static::$pagina.'?resultado=3');
      }
  }
  public function borrarImagen()
    {
        $existeArchivo = file_exists(CARPETA_IMAGENES_EV . $this->imagen);
        if ($existeArchivo) {
            unlink(CARPETA_IMAGENES_EV . $this->imagen);
        }
    }
    // para saber el nombre del restaurante del eventos
    public static function findNombreCentro($id){
        $query="SELECT centros_consumo.nombre
        FROM eventos
        JOIN centros_consumo ON eventos.centros_consumo_id = centros_consumo.id
        WHERE eventos.id=".$id.";";
       $resultado = self::consultarSQL($query);
       return array_shift($resultado); //Retornaa el primer elemento
    }

    public function guardar() {
        $resultado = '';
        if(!is_null($this->id)) {
            // actualizar
            $resultado = $this->actualizar();
        } else {
            // Creando un nuevo registro
            $resultado = $this->crear();
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
        // debuguear($resultado);
        return [
            'resultado'=>$resultado,
            'id'=>self::$db->insert_id
        ];
    }
    public function actualizar() {
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
