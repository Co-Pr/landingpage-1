<?php
if(isset($_POST['email'])){

	/* Récupération des valeurs des champs du formulaire */
	    $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $mail = $_POST['email'];
      $entse = $_POST['entse'];
      $message = $_POST['message'];
	    $sujet = "Co-P'r - Demande de contact" ;
	/* Destinataire (ton adresse e-mail) */

	    $to = 'contact@co-pr.net';

	/* En-têtes de l'e-mail */
    $headers = 'From: '.$nom.' '.$prenom.'('.$entse.')'.' <'.$mail.'>'."\r\n\r\n";


	/* Envoi de l'e-mail */
      mail($to, $sujet, $message, $headers);

      header('Location: ../index.html');

}
else{
	header('Location: ../index.html');
}


?>
