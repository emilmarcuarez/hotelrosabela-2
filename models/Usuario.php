<?php

namespace Model;
class Usuario extends Activerecord
{
  protected static $tabla='usuarios';
  protected static $pagina='auth/mostrarusuarios';
  protected static $columnasDB = ['id', 'nombre', 'apellido','fecha','sexo','identificacion','nro_telefono', 'email', 'contrasenia', 'pais','estado','ciudad', 'direccion', 'codigo_postal' , 'noches','no_leidos','token','confirmado', 'profesion','ocupacion'];

  
  public $id;
  public $nombre;
  public $apellido;
  public $fecha;
  public $sexo;
  public $identificacion;
  public $nro_telefono;
  public $pais;
  public $estado;
  public $ciudad;
  public $direccion;
  public $codigo_postal; 
  public $email;
  public $contrasenia;
  public $noches;
  public $no_leidos;
  public $token;
  public $confirmado;
  public $profesion;
  public $ocupacion;

  public function __construct($args = [])
  {
      $this->id = $args['id'] ?? null;
      $this->nombre = $args['nombre'] ?? '';
      $this->apellido = $args['apellido'] ?? '';
      $this->fecha = $args['fecha'] ?? '';
      $this->sexo = $args['sexo'] ?? '';
      $this->nro_telefono = $args['nro_telefono'] ?? '';
      $this->email = $args['email'] ?? '';
      $this->contrasenia = $args['contrasenia'] ?? '';
      $this->pais = $args['pais'] ?? '';
      $this->estado = $args['estado'] ?? '';
      $this->ciudad = $args['ciudad'] ?? '';
      $this->direccion = $args['direccion'] ?? '';
      $this->codigo_postal = $args['codigo_postal'] ?? '';
      $this->identificacion = $args['identificacion'] ?? '';

      $this->noches = $args['noches'] ?? '0';
      $this->no_leidos= $args['no_leidos'] ?? '0';
  
      $this->token= $args['token'] ?? '';
      $this->confirmado= $args['confirmado'] ?? '0';
      $this->profesion= $args['profesion'] ?? '';
      $this->ocupacion= $args['ocupacion'] ?? '';
  }

  public function validarRegistro()
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

  public function validar(){
    if(!$this->email){
        self::$errores[]='El email es obligatorio';
    }
    if(!$this->contrasenia){
        self::$errores[]='El Password es obligatorio';
    }

    return self::$errores;
}

public function setNoleidos(){
    $this->no_leidos+=1;
}
public function reiniciar_noleidos(){
    $this->no_leidos=0;
}
  public function setPassword($password){
    $this->contrasenia= password_hash($password, PASSWORD_BCRYPT);
}
public function setNoches($noche){
    session_start();
    $id=$_SESSION['usuario_id'];
    $query="UPDATE usuarios SET noches=".$noche." WHERE id=".$id;
}
public function getId(){
    $query="SELECT id FROM ".self::$tabla. " WHERE email = '".$this->email ."' LIMIT 1";
    $resultado=self::$db->query($query);
    return $resultado;
}
public function getName(){
    $query="SELECT * FROM ".self::$tabla. " WHERE email = '".$this->email ."' LIMIT 1";
    $resultado = self::consultarSQL($query);
    return array_shift($resultado); //Retornaa el primer elemento
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

// al actualizar un usuario administrador


public function comprobarPassword($resultado){
    $usuario=$resultado->fetch_object();

    // verifica que la copntraseña que se escribio en el formulario es la misma que esta hasheada en la base de datos
    $autenticado=password_verify($this->contrasenia, $usuario->contrasenia);
    
    if(!$autenticado){//es un bool, true o false
        self::$errores[]='La contraseña es incorrecta'; //lo agrega al final del arreglo
    }

    return $autenticado;
}


// TRAERME A LOS USUARIOS PERO ORDENANDOLOS POR NOCHE
public static function usuarios_noches(){
    $query="SELECT * FROM usuarios ORDER BY noches DESC;";
    $resultado = self::consultarSQL($query);
    return $resultado;
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
    $usu=$this->getName();
    $_SESSION['usuario_sexo']=$usu->sexo;
    $_SESSION['usuario_name']=$usu->nombre;
    $_SESSION['usuario_id']=$usu->id;
    $_SESSION['login_pag']=true;
    
    header('Location: /');
}

// para crear y guardar cada usuario

// public function guardar()
//     {
//         if (!is_null($this->id)) {
//             // actualizar
//             $resultado=$this->actualizar();

//         } else {
//             // crear un nuevo registro
//            $resultado= $this->crear();
//         }
//         return $resultado['id']; // Devolver el ID del mensaje creado
//     }
    
public function guardar() {
    $resultado = '';
    if(!is_null($this->id)) {
        // actualizar
        $resultado = $this->actualizar();
    } else {
        // Creando un nuevo registro
        $resultado = $this->crear();
    }
    return $resultado;
}
    public function crear()
    {
        // sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        // insertar a la BASE DE DATOS
        $query = "INSERT INTO ". static::$tabla. " (";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES ('";
        $query .= join("', '",array_values($atributos));
        $query .= "') ";

        $resultado = self::$db->query($query);
        //   return es un false or true
        // Mensaje de exito
        // debuguear($resultado);
        return [
            'resultado'=>$resultado,
            'id'=>self::$db->insert_id
        ];
    }
    public function actualizar() {
        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        // Iterar para ir agregando cada campo de la BD
        $valores = [];
        foreach($atributos as $key => $value) {
            $valores[] = "{$key}='{$value}'";
        }

        // Consulta SQL
        $query = "UPDATE " . static::$tabla ." SET ";
        $query .=  join(', ', $valores );
        $query .= " WHERE id = '" . self::$db->escape_string($this->id) . "' ";
        $query .= " LIMIT 1 "; 

        // Actualizar BD
        $resultado = self::$db->query($query);
        return $resultado;
    }
    public static function getNombres($id){
        $query = "SELECT usuarios.*
        FROM comentarios
        JOIN usuarios ON comentarios.usuarios_id = usuarios.id
        WHERE comentarios.centros_consumo_id = ".$id.";";
        $resultado = static::consultarSQL($query);
        return $resultado;
    }
    public static function getUsarioReserva($id){
        $query = "SELECT usuarios.*
        FROM reserva
        JOIN usuarios ON reserva.usuarios_id = usuarios.id
        WHERE reserva.id = ".$id.";";
        $resultado = static::consultarSQL($query);
        return array_shift($resultado);
    }
    public static function updateNo_leidos($id){

        $query = "UPDATE usuarios SET no_leidos = no_leidos + 1 WHERE id =".$id.";";
        $resultado =self::$db->query($query);
        return $resultado;
    }
    public static function reiniciarNo_leidos($id){
        $query = "UPDATE usuarios SET no_leidos = 0 WHERE id =".$id.";";
        $resultado = self::$db->query($query);
        return $resultado;
    }

// para traerse el usuario segun el id

public function crearToken(){
    $this->token=uniqid();
}
public function comprobarPasswordAndVerificado($contrasenia) {
    $resultado = password_verify($contrasenia, $this->contrasenia);
    
    if(!$resultado || !$this->confirmado) {
        self::$alertas['error'][] = 'Password Incorrecto o tu cuenta no ha sido confirmada';
        self::$errores[]='La contraseña es incorrecta o tu cuenta no ha sido confirmada';
    } else {
        return true;
    }
}

// validar email
public function validarEmail() {
    if(!$this->email) {
        self::$alertas['error'][] = 'El email es Obligatorio';
        self::$errores[]='El email es Obligatorio';
    }
    return self::$alertas;
}


// validar la contraseña de los usuarios
public function validarPassword() {
    if(!$this->contrasenia) {
        self::$alertas['error'][] = 'La contraseña es obligatorio';
    }
    if(strlen($this->contrasenia) < 6) {
        self::$alertas['error'][] = 'La contraseña debe tener al menos 6 caracteres';
    }

    return self::$alertas;
}

public function hashPassword() {
    $this->contrasenia = password_hash($this->contrasenia, PASSWORD_BCRYPT);
}

public static function allDesc_msj()
{
    $query = "SELECT * FROM ". static::$tabla. " ORDER BY no_leidos DESC;";

    $resultado = static::consultarSQL($query);
    return $resultado;
}
}
