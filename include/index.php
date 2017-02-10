<?php

	/* Récupération des valeurs des champs du formulaire */
	    $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $mail = $_POST['mail'];
      $entse = $_POST['entse'];
      $message = $_POST['message'];
	    $sujet = "Co-P'r - Formulaire de contact" ;
	/* Destinataire (ton adresse e-mail) */

	    $to = 'jorisloemba@gmail.com';

	/* En-têtes de l'e-mail */
     $headers = 'From: '.$nom.' '.$prenom.'('.$entse.')'.' <'.$mail.'>'."\r\n\r\n";


	/* Envoi de l'e-mail */
      mail($to, $sujet, $message, $headers);

      header('Location: ../index.html');
			exit();

?>
