<?php

namespace Model;
class Premios extends Activerecord
{
  protected static $tabla='premio';
  protected static $pagina='premios/mostrar';
  protected static $columnasDB = ['id', 'descripcion', 'mensaje','cant_noches'];

  
  public $id;
  public $descripcion;
  public $mensaje;
  public $cant_noches;

  public function __construct($args = [])
  {
      $this->id = $args['id'] ?? null;
      $this->descripcion = $args['descripcion'] ?? '';
      $this->mensaje = $args['mensaje'] ?? '';
      $this->cant_noches = $args['cant_noches'] ?? '0';
  }

  public function validar()
  {
      if (!$this->descripcion) {
          self::$errores[] = "Debes añadir una descripcion";
      }
      if (!$this->mensaje) {
          self::$errores[] = "Debe añadir un mensaje para el premio";
      }
      if (!$this->cant_noches) {
          self::$errores[] = "Ingrese la cantidad de noches minimas para recibir este regalo";
      }
      return self::$errores;
  }

}
