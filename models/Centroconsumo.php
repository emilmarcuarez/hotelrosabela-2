<?php
 namespace Model;
 use Model\Activerecord;

 class Centroconsumo extends Activerecord{
    protected static $tabla = 'centros_consumo';
    protected static $pagina='centrosconsumo/mostrar';
    protected static $columnasDB=['id', 'nombre', 'descripcion', 'horario', 'imagen'];

    public $id;
    public $nombre;
    public $descripcion;
    public $horario;
    public $imagen;

    public function __construct($args=[]){
      $this->id=$args['id'] ?? null;
      $this->nombre=$args['nombre'] ?? '';
      $this->descripcion=$args['descripcion'] ?? '';
      $this->horario=$args['horario'] ?? '';
      $this->imagen=$args['iamgen'] ?? '';
    }

    public function validar(){
      if(!$this->nombre){
         self::$errores[]="Debes añadirle un nombre al centro de consumo";
      }
      if(!$this->descripcion){
         self::$errores[]="La descripcion es obligatoria";
      }
      if(!$this->horario){
         self::$errores[]="Debes ingresar el horario del restaurante";
      }
      if(!$this->imagen){
         self::$errores[]="La imagen es obligatoria";
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
      $existeArchivo=file_exists(CARPETA_IMAGENES_RE . $this->imagen);
      if($existeArchivo){
         unlink(CARPETA_IMAGENES_RE . $this->imagen);
      }
    }
 }