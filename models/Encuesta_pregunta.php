<?php
 namespace Model;
 use Model\Activerecord;

 class Encuesta_pregunta extends Activerecord{
    protected static $tabla = 'encuesta_pregunta';
    protected static $pagina='encuesta_pregunta/mostrar';
    protected static $columnasDB=['id', 'texto'];

    public $id;
    public $texto;
   
    public function __construct($args=[]){
      $this->id=$args['id'] ?? null;
      $this->texto=$args['texto'] ?? '';
    }

    public function validar(){
      if(!$this->texto){
         self::$errores[]="Debes añadirencuesta_pregunta la pregunta";
      }
      return self::$errores;
    }

 }