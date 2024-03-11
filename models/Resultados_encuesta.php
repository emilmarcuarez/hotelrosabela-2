<?php
 namespace Model;
 use Model\Activerecord;

 class Resultados_encuesta extends Activerecord{
    protected static $tabla = 'resultados_encuesta';
    protected static $pagina='resultados_encuesta/mostrar';
    protected static $columnasDB=['id', 'id_encuesta_respuesta', 'id_encuesta_pregunta', 'id_encuesta'];

    public $id;
    public $id_encuesta_respuesta;
    public $d_encuesta_pregunta;
    public $id_encuesta;
    public function __construct($args=[]){
      $this->id=$args['id'] ?? null;
      $this->id_encuesta_respuesta=$args['id_encuesta_respuesta'] ?? '';
      $this->d_encuesta_pregunta=$args['id_encuesta_pregunta'] ?? '';
      $this->id_encuesta=$args['id_encuesta'] ?? '';
    }

 }