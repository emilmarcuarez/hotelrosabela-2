<?php
 namespace Model;
 use Model\Activerecord;

 class Chatbot extends Activerecord{
    protected static $tabla = 'chatbot';
    protected static $pagina='/';
    protected static $columnasDB=['id', 'queries', 'replies'];

    public $id;
    public $queries;
    public $replies;
    public function __construct($args=[]){
      $this->id=$args['id'] ?? null;
      $this->queries=$args['queries'] ?? '';
      $this->replies=$args['replies'] ?? '';
    }
}