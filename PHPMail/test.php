<?php

 require_once "Mail.php";





  if (isset($_POST['submit'])) {

    header('Location: ../index.php');


            /*  Paramètres récupérés depuis la page HTML */
             $nom = $_POST['name'];
             $email = $_POST['mail'];
            /*  Fin HTML  */

                 $from = 'From: '.$nom. "\r\n" .
                      'Reply-To: '.$email. "\r\n" .
                      'X-Mailer: PHP/' . phpversion();

                 $from =  $nom." ".$email;
                 $to = 'Mr.Contact contact@co-pr.net';
                 $subject = 'Demande de contact';
                 $body = $_POST['Msg'];

                 echo $from;
                 echo "<br>";
                 echo $to;
                 echo "<br>";
                 echo $subject;
                 echo "<br>";
                 echo $body;

            /* ----  Paramètres SMTP  ---- */
            $host = "ssl://smtp.office365.com";
            $port = "465";
            $username = "contact@co-pr.net";
            $password = "PasswordIntrouvable8";



            $headers = array ('From' => $from,
                              'To' => $to,
                              'Subject' => $subject);

           $smtp = Mail::factory('smtp',
             array ('host' => $host,
               'port' => $port,
               'auth' => true,
               'username' => $username,
               'password' => $password));


           $mail = $smtp->send($to, $headers, $body);


           if (PEAR::isError($mail)) {
             echo("<p>" . $mail->getMessage() . "</p>");
             header('Location: ../index.php');
            } else {
             echo("<p>Message successfully sent!</p>");
             header('Location: ../index.php');

            }

  }
  else{
    echo "PB Formulaire..";
  }


 ?>
