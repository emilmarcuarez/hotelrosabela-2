<?php

namespace Model;
class Usuario extends Activerecord
{
  protected static $tabla='usuarios';
  protected static $pagina='usuarios/mostrar';
  protected static $columnasDB = ['id', 'nombre', 'apellido','nro_telefono', 'email', 'contrasenia', 'pais','estado','ciudad', 'direccion', 'codigo_postal', 'identificacion' , 'n_empresa', 'i_fiscal'];

  
  public $id;
  public $nombre;
  public $apellido;
  public $nro_telefono;
  public $email;
  public $contrasenia;
  public $pais;
  public $estado;
  public $ciudad;
  public $direccion;
  public $codigo_postal;
  public $identificacion;
  public $n_empresa;
  public $i_fiscal;

  

  public function __construct($args = [])
  {
      $this->id = $args['id'] ?? null;
      $this->nombre = $args['nombre'] ?? '';
      $this->apellido = $args['apellido'] ?? '';
      $this->nro_telefono = $args['nro_telefono'] ?? '';
      $this->email = $args['email'] ?? '';
      $this->contrasenia = $args['contrasenia'] ?? '';
      $this->pais = $args['pais'] ?? '';
      $this->estado = $args['estado'] ?? '';
      $this->ciudad = $args['ciudad'] ?? '';
      $this->direccion = $args['direccion'] ?? '';
      $this->codigo_postal = $args['codigo_postal'] ?? '';
      $this->identificacion = $args['identificacion'] ?? '';
      $this->n_empresa = $args['n_empresa'] ?? '';
      $this->i_fiscal = $args['i_fiscal'] ?? '';
  }

  public function validar()
  {
      if (!$this->nombre) {
          self::$errores[] = "El nombre es obligatorio";
      }
      if (!$this->apellido) {
          self::$errores[] = "El apellido es obligatorio";
      }
      if (!$this->nro_telefono) {
          self::$errores[] = "El numero de telefono es obligatorio";
      }
      if (!$this->email) {
        self::$errores[] = "El email es obligatorio";
      }
      if (!$this->contrasenia) {
        self::$errores[] = "La contrasenia es obligatorio";
      }
      if (!$this->pais) {
        self::$errores[] = "El pais es obligatorio";
      }
      if (!$this->estado) {
        self::$errores[] = "El estado es obligatorio";
      }
      if (!$this->ciudad) {
        self::$errores[] = "La ciudad es obligatoria";
      }
      if (!$this->direccion) {
        self::$errores[] = "La direccion es obligatoria";
      }
      if (!$this->codigo_postal) {
        self::$errores[] = "El codigo postal es obligatorio";
      }
      if (!$this->identificacion) {
        self::$errores[] = "El numero de cedula o pasaporte es obligatorio";
      }
      return self::$errores;
  }

  public function setPassword($password){
    $this->contrasenia= password_hash($password, PASSWORD_BCRYPT);
    
}
public function getId(){
    $query="SELECT id FROM ".self::$tabla. " WHERE email = '".$this->email ."' LIMIT 1";
    $resultado=self::$db->query($query);
    return $resultado;
}
public function existeUsuario(){
    // revisamos si el susuario existe o no
    $query="SELECT * FROM ".self::$tabla. " WHERE email = '".$this->email ."' LIMIT 1";
 
    $resultado=self::$db->query($query);
    // num_rows tiene un 1 si el usuario existe, asi que si no existe es que NO EXISTE
    if(!$resultado->num_rows){
        self::$errores[]='El Usuario no existe';
        return; //se deja de ejecutar esta funcion
    }
    return $resultado;
}
public function existeUsuarioRegistro(){
    // revisamos si el susuario existe o no
    $query="SELECT * FROM ".self::$tabla. " WHERE email = '".$this->email ."' LIMIT 1";
 
    $resultado=self::$db->query($query);
    // num_rows tiene un 1 si el usuario existe, asi que si no existe es que NO EXISTE
    if(!$resultado->num_rows){
       
        return; //se deja de ejecutar esta funcion
    }
    self::$errores[]='El Usuario YA existe';
    return $resultado;
}

public function comprobarPassword($resultado){
    $usuario=$resultado->fetch_object();

    // verifica que la copntraseña que se escribio en el formulario es la misma que esta hasheada en la base de datos
    $autenticado=password_verify($this->contrasenia, $usuario->contrasenia);
    
    if(!$autenticado){//es un bool, true o false
        self::$errores[]='La contraseña es incorrecta'; //lo agrega al final del arreglo
    }

    return $autenticado;
}

public static function findId($email)
{
    $query = "SELECT * FROM ". static::$tabla. " WHERE email= '".$email."'";
    // se sigue el principio de active record que es tener todo en objetos
    $resultado = self::consultarSQL($query);
    return array_shift($resultado); //Retornaa el primer elemento
}

public function autenticar(){
    session_start();

    // llenamos el arreglo de las sesiones establecidas
    $_SESSION['usuario_pag']=$this->email;
    $_SESSION['usuario_id']=$this->getId();
    $_SESSION['login_pag']=true;

    header('Location: /');
}

// para crear y guardar cada usuario

public function guardar()
{
        // crear un nuevo registro
        $this->crear();
}
public function crear()
{
   

    // sanitizar los datos
    $atributos = $this->sanitizarAtributos();


    // insertar a la BASE DE DATOS
    $query = "INSERT INTO ". static::$tabla. " (";
    $query .= join(', ', array_keys($atributos));
    $query .= " ) VALUES (' ";
    $query .= join("', '", array_values($atributos));
    $query .= " ') ";

    $resultado = self::$db->query($query);
    //   return es un false or true
    // Mensaje de exito
    if ($resultado) {

        header('location: /siginusuario?resultado=1');
    }
}
public static function getCorreos($id){
    
    $query = "SELECT usuario_pag.email
    FROM comentario
    JOIN usuario_pag ON comentario.usuario_pag_id = usuario_pag.id
    WHERE comentario.locales_id = ".$id.";";
    $resultado = static::consultarSQL($query);
    return $resultado;
}

}
