<?php 

namespace Model;
use PHPMailer\PHPMailer\PHPMailer;

class Email{

    public $email;
    public $nombre;
    public $apellido;
    public $token;
    
    public function __construct($email, $nombre, $apellido, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->token = $token;
    }

    public function enviarConfirmacion() {


         $mail = new PHPMailer();
      
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'emilmarpatricia2@outlook.es'; // Tu dirección de correo de Outlook
        $mail->Password = 'pascua2102'; // Tu contraseña
        $mail->SMTPSecure = 'tls'; // Puedes cambiar a 'ssl' si es necesario
        $mail->Port = 587; // O 465 para SSL/TLS
        

        $mail->setFrom('emilmarpatricia2@outlook.es');
        $mail->addAddress($this->email); // Dirección de correo del destinatario
        $mail->Subject = 'Confirmacion de cuenta - Hotel RosaBela';

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
         $contenido .= "<body>";
         $contenido.="<h3>Hotel Rosa Bela & Convention center</h3>";
         $contenido .= "<div>";
         
         $contenido .= "<p><strong>Hola " . $this->nombre . " " . $this->apellido .  "</strong> Has Creado tu cuenta en la Pagina oficial del Hotel RosaBela, solo debes confirmarla presionando el siguiente enlace</p>";
         $contenido .= "<p>Presiona aquí: <a href='https://hotelrosabela.000webhostapp.com/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";        
         $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
         $contenido .= "</div>";
         $contenido .= "<div><img src='https://hotelrosabela.000webhostapp.com/build/img/logopng.png' alt='Imagen'></div>"; // Ruta de la imagen
       
         $contenido .= "</body>";
         $contenido .= '</html>';

         $mail->Body = $contenido;
        //  debuguear($mail->Body);
         //Enviar el mail
         $mail->send();
        // debuguear($mail->send());
    }

    public function enviarInstrucciones() {

        // create a new object
        $mail = new PHPMailer();
        // $mail->isSMTP();
        // $mail->Host = 'sandbox.smtp.mailtrap.io';
        // $mail->SMTPAuth = true; 
        // $mail->Port = 2525;
        // $mail->Username = 'cb7609258a61b6';
        // $mail->Password = '26311da4ffc456';
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'emilmarpatricia2@outlook.es'; // Tu dirección de correo de Outlook
        $mail->Password = 'pascua2102'; // Tu contraseña
        $mail->SMTPSecure = 'tls'; // Puedes cambiar a 'ssl' si es necesario
        $mail->Port = 587; // O 465 para SSL/TLS
        
        $mail->setFrom('emilmarpatricia2@outlook.es');
        $mail->addAddress($this->email);
        $mail->Subject = 'Reestablece tu password';

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
        $contenido .= "<p><strong>Hola " . $this->nombre . " ".$this->apellido. "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aquí: <a href='https://hotelrosabela.000webhostapp.com/recuperar?token=" . $this->token . "'>Reestablecer Password</a>";        
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= "</div>";
        $contenido .= "<div><img src='https://hotelrosabela.000webhostapp.com/build/img/logopng.png' alt='Imagen'></div>"; // Ruta de la imagen
      
        $contenido .= '</html>';
        $mail->Body = $contenido;

            //Enviar el mail
        $mail->send();
    }
    public function enviarChat() {

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
        $mail->addAddress('emilmarpatricia@gmail.com');
        $mail->Subject = 'Tienes un mensaje nuevo en el chat en liea';

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
        $contenido .= "<p><strong>Hola, Tienes un mensaje nuevo en el chat.</p>";
        $contenido .= "<p>Presiona aquí: <a href='https://hotelrosabela.000webhostapp.com/login'>Inciar sesion</a>";        
        // $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        
        
        $contenido .= "</div>";
        $contenido .= "<div><img src='https://hotelrosabela.000webhostapp.com/build/img/logopng.png' alt='Imagen'></div>"; // Ruta de la imagen
      
        $contenido .= '</html>';
        $mail->Body = $contenido;

            //Enviar el mail
        $mail->send();
    }
    public function enviarReserva() {

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
        $mail->addAddress('emilmarpatricia@gmail.com');
        $mail->Subject = 'Tienes una RESERVA NUEVA';

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
        $contenido .= "<p><strong>Hola, Tienes una reserva nueva.</p>";
        $contenido .= "<p>Presiona aquí: <a href='https://hotelrosabela.000webhostapp.com/login'>Inciar sesion</a>";        
        $contenido .="<p>¡No olvides revisar y ver el estatus de las reservas!</p>";
    
        $contenido .= "</div>";
        $contenido .= "<div><img src='https://hotelrosabela.000webhostapp.com/build/img/logopng.png' alt='Imagen'></div>"; // Ruta de la imagen
      
        $contenido .= '</html>';
        $mail->Body = $contenido;

            //Enviar el mail
        $mail->send();
    }

    // enviar correo ed encuesta
    public function enviarCorreoEncuesta() {


        $mail = new PHPMailer();
     
       $mail->isSMTP();
       $mail->Host = 'smtp.office365.com';
       $mail->SMTPAuth = true;
       $mail->Username = 'emilmarpatricia2@outlook.es'; // Tu dirección de correo de Outlook
       $mail->Password = 'pascua2102'; // Tu contraseña
       $mail->SMTPSecure = 'tls'; // Puedes cambiar a 'ssl' si es necesario
       $mail->Port = 587; // O 465 para SSL/TLS
       

       $mail->setFrom('emilmarpatricia2@outlook.es');
       $mail->addAddress($this->email); // Dirección de correo del destinatario
       $mail->Subject = 'ENCUESTA - Hotel RosaBela';

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
        $contenido .= "<body>";
        $contenido.="<h3>Hotel Rosa Bela & Convention center</h3>";
        $contenido .= "<div>";
        
        $contenido .= "<p><strong>Hola " . $this->nombre . " " . $this->apellido .  "</strong> ¡Gracias por hospedarte con nosotros!</p>";
        $contenido .= "<p>Nos encantaria saber como fue tu experencia, ya que tu opinión es muy valiosa para nosotros, debido a que nos ayuda a mejorar y brindar un servicio excepcional a nuestros huéspedes.
        <br>
        Por favor, tómate un momento para completar nuestra breve encuesta </p>";
        $contenido .= "<p>Presiona aquí: <a href='https://share.hsforms.com/1lQNzMai0Tru9kmjBpCzY3Qr4dug'>Realizar encuesta</a>";        
        // $contenido .= "<p>Siente la diferencia en el hotel Rosabela</p>";
        $contenido .= "</div>";
        $contenido .= "<div><img src='https://hotelrosabela.000webhostapp.com/build/img/logopng.png' alt='Imagen'></div>"; // Ruta de la imagen
      
        $contenido .= "</body>";
        $contenido .= '</html>';

        $mail->Body = $contenido;
       //  debuguear($mail->Body);
        //Enviar el mail
        $mail->send();
       // debuguear($mail->send());
   }

}