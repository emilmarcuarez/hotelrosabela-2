<?php
 namespace Model;
 use Model\Activerecord;

 class Encuesta extends Activerecord{
    protected static $tabla = 'Encuesta';
    protected static $pagina='encuesta/mostrar';
    protected static $columnasDB=['id', 'nombre', 'apellido','nro_telefono'];

    public $id;
    public $nombre;
    public $apellido;
    public $nro_telefono;
    public function __construct($args=[]){
      $this->id=$args['id'] ?? null;
      $this->nombre=$args['nombre'] ?? '';
      $this->apellido=$args['apellido'] ?? '';
      $this->nro_telefono=$args['nro_telefono'] ?? '';

    }

    public function validar(){
      if(!$this->nombre){
         self::$errores[]="Debes añadirle un nombre al chef";
      }
      if(!$this->apellido){
         self::$errores[]="El apellido es obligatorio";
      }
      if(!$this->nro_telefono){
         self::$errores[]="El numero de telefono es obligatoria";
      }
      return self::$errores;
    }

 }