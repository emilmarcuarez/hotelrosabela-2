<?php
 namespace Model;
 use Model\Activerecord;

 class Chatbot extends Activerecord{
    protected static $tabla = 'chatbot';
    protected static $pagina='chatbot/mostrar';
    protected static $columnasDB=['id', 'queries', 'replies'];

    public $id;
    public $queries;
    public $replies;
    public function __construct($args=[]){
      $this->id=$args['id'] ?? null;
      $this->queries=$args['queries'] ?? '';
      $this->replies=$args['replies'] ?? '';
    }
    public function validar()
  {
      if (!$this->queries) {
          self::$errores[] = "Debes añadir un queries";
      }
      if (!$this->replies) {
          self::$errores[] = "El replies es obligatorio";
      }
    
      return self::$errores;
  }
}