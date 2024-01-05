<?php

namespace Model;
class Evento extends Activerecord
{
  protected static $tabla='eventos';
  protected static $pagina='eventos/mostrar';
  protected static $columnasDB = ['id', 'nombre', 'descripcion', 'imagen', 'fecha', 'horario','centros_consumo_id'];

  
  public $id;
  public $nombre;
  public $descripcion;
  public $imagen;
  public $fecha;
  public $horario;
  public $centros_consumo_id;

  
  

  public function __construct($args = [])
  {
      $this->id = $args['id'] ?? null;
      $this->nombre = $args['nombre'] ?? '';
      $this->descripcion = $args['descripcion'] ?? '';
      $this->imagen = $args['imagen'] ?? '';
      $this->fecha = $args['fecha'] ?? '';
      $this->horario = $args['horario'] ?? '';
      $this->centros_consumo_id = $args['centros_consumo_id'] ?? '';
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
}
