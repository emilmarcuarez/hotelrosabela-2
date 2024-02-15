<?php

namespace Model;
class Premios extends Activerecord
{
  protected static $tabla='premios';
  protected static $pagina='auth/noches';
  protected static $columnasDB = ['id', 'premio', 'usuarios_id'];

  
  public $id;
  public $premio;
  public $usuarios_id;

  public function __construct($args = [])
  {
      $this->id = $args['id'] ?? null;
      $this->premio = $args['nombre'] ?? '';
      $this->usuarios_id = $args['descripcion'] ?? '';
  }

  public function validar()
  {
      if (!$this->premio) {
          self::$errores[] = "Debes añadir un premio";
      }
      if (!$this->usuarios_id) {
          self::$errores[] = "No se puede registrar un premio si no hay un usuario";
      }

      return self::$errores;
  }

}
