<?php
 namespace Model;
 use Model\Activerecord;

 class Empleados extends Activerecord{
    protected static $tabla = 'empleados';
    protected static $pagina='empleados/mostrar';
    protected static $columnasDB=['id', 'nombre', 'cargo', 'apellido', 'imagen','descripcion'];

    public $id;
    public $nombre;
    public $cargo;
    public $apellido;
    public $imagen;
    public $descripcion;
    public function __construct($args=[]){
      $this->id=$args['id'] ?? null;
      $this->nombre=$args['nombre'] ?? '';
      $this->cargo=$args['cargo'] ?? '';
      $this->apellido=$args['apellido'] ?? '';
      $this->imagen=$args['imagen'] ?? '';
      $this->descripcion=$args['descripcion'] ?? '';
    }

    public function validar(){
      if(!$this->nombre){
         self::$errores[]="Debes añadirle un nombre al empleado";
      }
      if(!$this->apellido){
         self::$errores[]="Debes añadirle un apellidos al empleado";
      }
      if(!$this->cargo){
         self::$errores[]="Debes añadirle un cargo al empleado";
      }
      return self::$errores;
    }
    
    public function eliminar(){
      $query="DELETE FROM ".static::$tabla." WHERE id= ".self::$db->escape_string($this->id). " LIMIT 1";
      $resultado=self::$db->query($query);
      if($resultado){
         $this->borrarImagen();

         header('location: /'.static::$pagina.'?resultado=3');
      }
    }

    public function borrarImagen(){
      $existeArchivo=file_exists(CARPETA_IMAGENES_TR . $this->imagen);
      if($existeArchivo){
         unlink(CARPETA_IMAGENES_TR . $this->imagen);
      }
    }
 }