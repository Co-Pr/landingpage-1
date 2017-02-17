<?php

    //require_once('Mail.php');

    /* -----  Paramètres récupérés dans le form html  ------  */
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $message = $_POST['message'];

    /*   Test d'affichage des données reçues  */
      /*
    echo $name;'<br>';
    echo $email.'<br>';
    echo $company.'<br>';
    echo $message;
      */

    /* $formcontent="From: $name \n Message: $message"; */
    $recipient = "contact@co-pr.net";
    $subject = "Contact Form";
    /*$mailheader = "From: $email \r\n"; */


    /* ----  Paramètres SMTP  ---- */
    $host = "ssl://smtp.office365.com";
    $port = "465";
    $username = "contact@co-pr.net";
    $password = "PasswordIntrouvable8";

    /* ----   ---- */
    /* Objet SMTP pour la connexion à Exchange Server  */
   /*$smtp = Mail::factory($host ,$port ,$username ,$password);*/

      /*   Envoi du Mail      */
  /* $mail = $smtp->send($recipient, $subject, $message);*/

    mail($email, $recipient, $subject, $message);


   /*if (PEAR::isError($mail)) {
     echo("<p>" . $mail->getMessage() . "</p>");
    } else {
     echo("<p>Message successfully sent!</p>");

   }*/


  /*  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";*/

?>
