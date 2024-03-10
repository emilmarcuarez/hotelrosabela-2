<?php

namespace Model;
class Eventos_salon extends Activerecord
{
  protected static $tabla='eventos_salon';
  protected static $pagina='eventos/mostrar';
  protected static $columnasDB = ['id', 'id_eventos', 'id_salon'];

  
  public $id;
  public $id_eventos;
  public $id_salon;

  
  

  public function __construct($args = [])
  {
      $this->id = $args['id'] ?? null;
      $this->id_eventos = $args['id_eventos'] ?? '';
      $this->id_salon = $args['id_salon'] ?? '';
  }

  public function setId_evento($id){
    $this->id_eventos=$id;
  }

}
