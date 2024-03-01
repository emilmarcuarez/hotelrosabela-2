<?php 

namespace Classes;
use PHPMailer\PHPMailer\PHPMailer;

class Email_premios {

    public $email;
    public $nombre;
    public $apellido;
    public $noches;
    public $mensaje;
    
    public function __construct($email, $nombre, $apellido, $noches, $mensaje)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->noches = $noches;
        $this->mensaje = $mensaje;
    }
    public function enviarPremio() {

        // create a new object
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'emilmarpatricia2@outlook.es'; // Tu dirección de correo de Outlook
        $mail->Password = 'pascua2102'; // Tu contraseña
        $mail->SMTPSecure = 'tls'; // Puedes cambiar a 'ssl' si es necesario
        $mail->Port = 587; // O 465 para SSL/TLS
        
        $mail->setFrom('emilmarpatricia2@outlook.es');
        $mail->addAddress($this->email);
        $mail->Subject = '¡FELICIDADES! El hotel RosaBela te premia.';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<head>";
        $contenido .= "<style>";
        $contenido .= "p,h3 {font-family: Arial, sans-serif; font-size: 16px; color: #333;}";
        $contenido .= "h3 {text-align: center; color: white; background: #be315c; padding: 1rem; margin:0;}";
        $contenido .= "img {display: block; max-width: 200px; height: auto; display:flex; justify-content:center; align-items:center; margin: auto;}";
        $contenido .= "div {padding:1rem; background-color: #e6e6e6;}";
        $contenido .= "</style>";
        $contenido .= "</head>";
        $contenido.="<h3>Hotel Rosa Bela & Convention center</h3>";
        $contenido .= "<div>";
        $contenido .= "<p><strong>¡Hola ".$this->nombre."! Premiamos tu fidelidad y por ello, te tenemos un premio por tener mas de ".$this->noches." noches con nosotros.<strong></p>";
        $contenido .= "<p>".$this->mensaje."</p>";            
        $contenido .="<p>¡Ingrese a su cuenta de fidelizacion y compruebe su premio! Lo esperamos</p>";
        $contenido .= "</div>";
        $contenido .= "<div><img src='https://hotelrosabela.000webhostapp.com/build/img/logopng.png' alt='Imagen'></div>"; // Ruta de la imagen
        $contenido .= '</html>';
        $mail->Body = $contenido;
            //Enviar el mail
        $mail->send();
    }

    // enviar premio al big boss
    public function enviarPremioServidor() {

        // create a new object
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'emilmarpatricia2@outlook.es'; // Tu dirección de correo de Outlook
        $mail->Password = 'pascua2102'; // Tu contraseña
        $mail->SMTPSecure = 'tls'; // Puedes cambiar a 'ssl' si es necesario
        $mail->Port = 587; // O 465 para SSL/TLS
        
        $mail->setFrom('emilmarpatricia2@outlook.es');
        $mail->addAddress('emilmarpatricia2@outlook.es');
        $mail->Subject = '¡ENHORABUENA! se ha enviado un premio';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<head>";
        $contenido .= "<style>";
        $contenido .= "p,h3 {font-family: Arial, sans-serif; font-size: 16px; color: #333;}";
        $contenido .= "h3 {text-align: center; color: white; background: #be315c; padding: 1rem; margin:0;}";
        $contenido .= "img {display: block; max-width: 200px; height: auto; display:flex; justify-content:center; align-items:center; margin: auto;}";
        $contenido .= "div {padding:1rem; background-color: #e6e6e6;}";
        $contenido .= "</style>";
        $contenido .= "</head>";
        $contenido.= "<h3>Hotel Rosa Bela & Convention center</h3>";
        $contenido .= "<div>";
        $contenido .= "<p><strong>¡Hola ".$this->nombre."! Premiamos tu fidelidad y por ello, te tenemos un premio por tener mas de ".$this->noches." noches con nosotros.<strong></p>";
        $contenido .= "<p>".$this->mensaje."</p>";            
        $contenido .="<p>¡Ingrese a su cuenta de fidelizacion y compruebe su premio! Lo esperamos</p>";
        $contenido .= "</div>";
        $contenido .= "<div><img src='https://hotelrosabela.000webhostapp.com/build/img/logopng.png' alt='Imagen'></div>"; // Ruta de la imagen
        $contenido .= '</html>';
        $mail->Body = $contenido;
            //Enviar el mail
        $mail->send();
    }
}