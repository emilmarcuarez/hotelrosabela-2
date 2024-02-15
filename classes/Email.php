<?php 

namespace Classes;
use PHPMailer\PHPMailer\PHPMailer;

class Email {

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

         // create a new object
         $mail = new PHPMailer();
        //  $mail->isSMTP();
        //  $mail->Host = 'sandbox.smtp.mailtrap.io';
        //  $mail->SMTPAuth = true; 
        //  $mail->Port = 2525;
        //  $mail->Username = 'cb7609258a61b6';
        //  $mail->Password = '26311da4ffc456';
     
        //  $mail->setFrom('cuentas@hotelrosabela.com');
        //  $mail->addAddress('cuentas@hotelrosabela.com', 'Hotelrosabela.com');
        //  $mail->Subject = 'Confirma tu Cuenta';

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
        // debuguear($mail);

         // Set HTML
         $mail->isHTML(TRUE);
         $mail->CharSet = 'UTF-8';

         $contenido = '<html>';
         $contenido .= "<p><strong>Hola " . $this->nombre." " .$this->apellido.  "</strong> Has Creado tu cuenta en la Pagina oficial del Hotel RosaBela, solo debes confirmarla presionando el siguiente enlace</p>";
         $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";        
         $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
         $contenido .= '</html>';
         $mail->Body = $contenido;

         //Enviar el mail
         $mail->send();

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
        $contenido .= "<p><strong>Hola " . $this->nombre . " ".$this->apellido. "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'>Reestablecer Password</a>";        
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';
        $mail->Body = $contenido;

            //Enviar el mail
        $mail->send();
    }
    public function enviarChat() {

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
        $mail->addAddress('emilmarpatricia@gmail.com');
        $mail->Subject = 'Tienes un mensaje nuevo en el chat en liea';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola, Tienes un mensaje nuevo en el chat.</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/login'>Inciar sesion</a>";        
        // $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';
        $mail->Body = $contenido;

            //Enviar el mail
        $mail->send();
    }
    public function enviarReserva() {

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
        $mail->addAddress('emilmarpatricia@gmail.com');
        $mail->Subject = 'Tienes una RESERVA NUEVA';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola, Tienes una reserva nueva.</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/login'>Inciar sesion</a>";        
        $contenido .="<p>¡No olvides revisar y ver el estatus de las reservas!</p>";
        // $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
     
        // $contenido .= "<p><img src='ruta/a/tu/imagen.jpg' alt='Imagen'></p>"; // Ruta de la imagen
        // $contenido .= '</html>';
        $contenido .= '</html>';
        $mail->Body = $contenido;

            //Enviar el mail
        $mail->send();
    }
}