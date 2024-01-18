<?php
 namespace Model;
 use Model\Activerecord;

 class Chef extends Activerecord{
    protected static $tabla = 'Chef';
    protected static $pagina='chef/mostrar';
    protected static $columnasDB=['id', 'nombre', 'apellido','centros_consumo_id', 'imagen', 'descripcion'];

    public $id;
    public $nombre;
    public $apellido;
    public $centros_consumo_id;
    public $imagen;
    public $descripcion;
    public function __construct($args=[]){
      $this->id=$args['id'] ?? null;
      $this->nombre=$args['nombre'] ?? '';
      $this->apellido=$args['apellido'] ?? '';
      $this->centros_consumo_id=$args['centros_consumo_id'] ?? '';
      $this->imagen=$args['imagen'] ?? '';
      $this->descripcion=$args['descripcion'] ?? '';
    }

    public function validar(){
      if(!$this->nombre){
         self::$errores[]="Debes añadirle un nombre al chef";
      }
      if(!$this->apellido){
         self::$errores[]="El apellido es obligatorio";
      }
      if(!$this->imagen){
         self::$errores[]="La imagen es obligatoria";
      }
      if(!$this->centros_consumo_id){
         self::$errores[]="Debes seleccionar el centro de consumo para el cual trabaja";
      }
      if(!$this->descripcion){
         self::$errores[]="La descripcion es obligatoria";
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
      $existeArchivo=file_exists(CARPETA_IMAGENES_CH . $this->imagen);
      if($existeArchivo){
         unlink(CARPETA_IMAGENES_CH . $this->imagen);
      }
    }

    public static function findChef($id){
      $query="SELECT chef.*
      FROM centros_consumo
      JOIN chef ON chef.centros_consumo_id = centros_consumo.id
      WHERE centros_consumo.id=".$id." LIMIT 2;";
      $resultado = static::consultarSQL($query);
      return $resultado;
  }
 }