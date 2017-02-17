<?php

    require_once "Mail.php";
    include "Mail.php";

    /* -----  Paramètres récupérés dans le form html  ------  */
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Message: $message";
    $recipient = "contact@co-pr.net";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";


    /* ----  Paramètres SMTP  ---- */
    $host = "ssl://smtp.office365.com";
    $port = "465";
    $username = "contact@co-pr.net";
    $password = "PasswordIntrouvable8";

    /* ---   --- */
    $headers = array ('From' => $name,
                      'To' => $recipient,
                      'Subject' => $subject);
    /* ----   ---- */
   $smtp = Mail::factory(
        array ('host' => $host,
       'port' => $port,
       'auth' => true,
       'username' => $username,
       'password' => $password));

   $mail = $smtp->send($to, $headers, $message);

   if (PEAR::isError($mail)) {
     echo("<p>" . $mail->getMessage() . "</p>");
    } else {
     echo("<p>Message successfully sent!</p>");

    }


  /*  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";*/

?>
