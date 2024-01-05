<?php

namespace Model;
class Usuario extends Activerecord
{
  protected static $tabla='usuarios';
  protected static $pagina='usuarios/mostrar';
  protected static $columnasDB = ['id', 'nombre', 'apellido','nro_telefono', 'email', 'contrasenia', 'pais','estado','ciudad', 'direccion', 'codigo_postal', 'identificacion' , 'n_empresa', 'i_fiscal'];

  
  public $id;
  public $nombre;
  public $apellido;
  public $nro_telefono;
  public $email;
  public $contrasenia;
  public $pais;
  public $estado;
  public $ciudad;
  public $direccion;
  public $codigo_postal;
  public $identificacion;
  public $n_empresa;
  public $i_fiscal;

  

  public function __construct($args = [])
  {
      $this->id = $args['id'] ?? null;
      $this->nombre = $args['nombre'] ?? '';
      $this->apellido = $args['apellido'] ?? '';
      $this->nro_telefono = $args['nro_telefono'] ?? '';
      $this->email = $args['email'] ?? '';
      $this->contrasenia = $args['contrasenia'] ?? '';
      $this->pais = $args['pais'] ?? '';
      $this->estado = $args['estado'] ?? '';
      $this->ciudad = $args['ciudad'] ?? '';
      $this->direccion = $args['direccion'] ?? '';
      $this->codigo_postal = $args['codigo_postal'] ?? '';
      $this->identificacion = $args['identificacion'] ?? '';
      $this->n_empresa = $args['n_empresa'] ?? '';
      $this->i_fiscal = $args['i_fiscal'] ?? '';
  }

  public function validar()
  {
      if (!$this->nombre) {
          self::$errores[] = "El nombre es obligatorio";
      }
      if (!$this->apellido) {
          self::$errores[] = "El apellido es obligatorio";
      }
      if (!$this->nro_telefono) {
          self::$errores[] = "El numero de telefono es obligatorio";
      }
      if (!$this->email) {
        self::$errores[] = "El email es obligatorio";
      }
      if (!$this->contrasenia) {
        self::$errores[] = "La contrasenia es obligatorio";
      }
      if (!$this->pais) {
        self::$errores[] = "El pais es obligatorio";
      }
      if (!$this->estado) {
        self::$errores[] = "El estado es obligatorio";
      }
      if (!$this->ciudad) {
        self::$errores[] = "La ciudad es obligatoria";
      }
      if (!$this->direccion) {
        self::$errores[] = "La direccion es obligatoria";
      }
      if (!$this->codigo_postal) {
        self::$errores[] = "El codigo postal es obligatorio";
      }
      if (!$this->identificacion) {
        self::$errores[] = "El numero de cedula o pasaporte es obligatorio";
      }
      return self::$errores;
  }
}
