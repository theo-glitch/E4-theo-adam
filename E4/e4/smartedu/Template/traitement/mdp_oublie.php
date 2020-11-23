<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
require '../class/Modele/User.php';

$mail = new PHPMailer();
  $mail->isSMTP();                                            // Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  $mail->Username   = 'theoverif@gmail.com';                     // SMTP username
  $mail->Password   = 'Theo93350';                               // SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
  $mail->Port       = 587;                                    // TCP port to connect to


  $mail->setFrom('theoverif@gmail.com', 'Inscription');
  $mail->addAddress($_POST[email], 'Inscription réussie');     // Add a recipient //Recipients
   $mail->Body  =  'réinitialiser votre mot de passe: http://localhost/GIT/E4-theo-adam/E4/SmartEDU%20Free%20Website%20Template%20-%20Free-CSS.com/smartedu/Template/form_rei.php ';
  if(!$mail->Send()) {
    // Si l'envoie de mail ne s'excuté pas alors on affiche une erreur //
    echo '<body onLoad="alert(\'Erreur, mail non envoyé\')">';
  echo '<meta http-equiv="refresh" content="0;URL=../views/inscription.php">';
  } else {
    // Si l'envoie de mail est excuté alors on redirige vers la page d'accueil //

     header("location: ../form_connexion.php");
  }
  ?>
