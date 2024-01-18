<?php
 namespace Model;
 use Model\Activerecord;

 class Habitaciones extends Activerecord{
    protected static $tabla = 'habitaciones';
    protected static $pagina='habitaciones/mostrar';
    protected static $columnasDB=['id', 'imagen', 'nombre', 'descripcion', 'servicios','preciosd','preciocd','ninos', 'adultos', 'tipo'];

    public $id;
    public $imagen;
    public $nombre;
    public $descripcion;
    public $servicios;
    public $preciosd;
    public $preciocd;
    public $ninos;
    public $adultos;
    public $tipo;
    public function __construct($args=[]){
      $this->id=$args['id'] ?? null;
      $this->imagen=$args['imagen'] ?? '';
      $this->nombre=$args['nombre'] ?? '';
      $this->descripcion=$args['descripcion'] ?? '';
      $this->servicios=$args['servicios'] ?? '';
      $this->preciosd=$args['preciosd'] ?? '';
      $this->preciocd=$args['preciocd'] ?? '';
      $this->ninos=$args['ninos'] ?? '';
      $this->adultos=$args['adultos'] ?? '';
      $this->tipo=$args['tipo'] ?? '';
    }

    public function validar(){
      if(!$this->imagen){
         self::$errores[]="La imagen es obligatoria";
      }
      if(!$this->nombre){
         self::$errores[]="El nombre es obligatorio";
      }
      if(!$this->descripcion){
         self::$errores[]="La descripcion es obligatoria";
      }
      if(!$this->servicios){
         self::$errores[]="Losserviciosson obligatorios";
      }
      if(!$this->preciocd){
         self::$errores[]="El precio con desayuno es obligatorio";
      }
      if(!$this->preciosd){
         self::$errores[]="El precio sin desayuno es obligatorio";
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
      $existeArchivo=file_exists(CARPETA_IMAGENES_HA . $this->imagen);
      if($existeArchivo){
         unlink(CARPETA_IMAGENES_HA . $this->imagen);
      }
    }
 }