<?php 
namespace Model;
use Model\Activerecord;
class Salon extends Activerecord{
    protected static $tabla='salones';
    protected static $pagina='salones/mostrar';
    protected static $columnasDB=['id','nombre', 'imagen', 'descripcion', 'fecha_p', 'capacidad'];


    public $id;
    public $nombre;
    public $imagen;
    public $descripcion;
    public $fecha_p;
    public $capacidad;

    public function __construct($args=[]){
        $this->id=$args['id'] ?? null;
        $this->nombre=$args['nombre'] ?? null;
        $this->imagen=$args['imagen'] ?? null;
        $this->descripcion=$args['descripcion'] ?? null;
        $this->fecha_p=date('Y/m/d');
        $this->capacidad=$args['capacidad'] ?? null;
    }
    public function validar(){
        if(!$this->nombre){
           self::$errores[]="Debes añadirle un nombre al empleado";
        }
        if(!$this->imagen){
           self::$errores[]="Debes añadirle una imagen al salon";
        }
        if(!$this->descripcion){
           self::$errores[]="Debes añadirle una descripcion";
        }
        if(!$this->capacidad){
           self::$errores[]="Debes añadir la capacidad maxima del salon";
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
        $existeArchivo=file_exists(CARPETA_IMAGENES_SA . $this->imagen);
        if($existeArchivo){
           unlink(CARPETA_IMAGENES_SA . $this->imagen);
        }
      }
}