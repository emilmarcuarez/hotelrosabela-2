<?php
 namespace Model;
 use Model\Activerecord;

 class Beneficio extends Activerecord{
    protected static $tabla = 'beneficio';
    protected static $pagina='beneficios/mostrar';
    protected static $columnasDB=['id', 'descripcion', 'noches'];

    public $id;
    public $descripcion;
    public $noches;
    public function __construct($args=[]){
      $this->id=$args['id'] ?? null;
      $this->descripcion=$args['descripcion'] ?? '';
      $this->noches=$args['noches'] ?? '';
    }

    public function validar(){
      if(!$this->descripcion){
         self::$errores[]="Debes añadirle una descripcion al beneficio";
      }
      if(!$this->noches){
         self::$errores[]="La cantidad de noches es obliatoria";
      }
    
      return self::$errores;
    }
    
 }