<?php

namespace Model;

class Admin extends Activerecord{
    protected static $tabla='usuario_admi';
    protected static $pagina='auth/mostrar';
    protected static $columnasDB=['id', 'email', 'password','tipo','nombre'];

    public $id;
    public $email;
    public $password;
    public $tipo;
    public $nombre;

    public function __construct($args =[]){
        $this->id=$args['id'] ?? null;
        $this->email=$args['email'] ?? null;
        $this->password=$args['password'] ?? null;
        $this->tipo=$args['tipo'] ?? '';
        $this->nombre=$args['nombre'] ?? '';
    }
    public function validar(){
        if(!$this->email){
            self::$errores[]='El email es obligatorio';
        }
        if(!$this->password){
            self::$errores[]='El Password es obligatorio';
        }
        // if(!$this->tipo){
        //     self::$errores[]='El tipo es obligatorio';
        // }

        return self::$errores;
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

    public function comprobarPassword($resultado){
        $usuario=$resultado->fetch_object();

        // verifica que la copntraseña que se escribio en el formulario es la misma que esta hasheada en la base de datos
        $autenticado=password_verify($this->password, $usuario->password);
        
        if(!$autenticado){//es un bool, true o false
            self::$errores[]='El password es incorrecto'; //lo agrega al final del arreglo
        }

        return $autenticado;
    }

    public function autenticar(){
       
        // debuguear(intval($this->tipo) ===1);
        if(intval($this->tipo) ===1){
             $_SESSION['usuario']=$this->email;
            $_SESSION['login']=true;
            header('Location: /admin');
        }else if(intval($this->tipo) ===2){
            $_SESSION['usuario']=$this->email;
            $_SESSION['login_recepcion']=true;
            header('Location: /admin');
        }else if(intval($this->tipo) ===3){
            $_SESSION['usuario']=$this->email;
            $_SESSION['login_comercializacion']=true;
            header('Location: /admin');
        }else if(intval($this->tipo) ===4){
            $_SESSION['usuario']=$this->email;
            $_SESSION['login_redes']=true;
            header('Location: /admin');
        }
       
    }
    public function setPassword($password){
        $this->password= password_hash($password, PASSWORD_BCRYPT);
    }
    public function validarRegistro()
  {
      if (!$this->nombre) {
          self::$errores[] = "El nombre es obligatorio";
      }
      if (!$this->email) {
        self::$errores[] = "El email es obligatorio";
      }
      if (!$this->tipo) {
        self::$errores[] = "El tipo de usuario es obligatorio";
      }
      if (!$this->password) {
        self::$errores[] = "La contrasenia es obligatorio";
      }
      return self::$errores;
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


}