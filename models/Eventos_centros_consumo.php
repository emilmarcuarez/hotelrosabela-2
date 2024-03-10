<?php

namespace Model;
class Eventos_centros_consumo extends Activerecord
{
  protected static $tabla='eventos_centros_consumo';
  protected static $pagina='eventos/mostrar';
  protected static $columnasDB = ['id', 'id_eventos', 'id_centros_consumo'];

  
  public $id;
  public $id_eventos;
  public $id_centros_consumo;

  public function __construct($args = [])
  {
      $this->id = $args['id'] ?? null;
      $this->id_eventos = $args['id_eventos'] ?? '';
      $this->id_centros_consumo = $args['id_centros_consumo'] ?? '';
  }
  public function setId_evento($id){
    $this->id_eventos=$id;
  }

}
