<?php


    if ($_SERVER['REQUEST_METHOD']=='POST') {
      // Code PHP pour traiter l'envoi de l'email

      $nombreErreur = 0;
      // Définit toutes les erreurs possibles
      if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
        $nombreErreur++;
        $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
      } else {
        if (empty($_POST['email'])) {
          $nombreErreur++;
          $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
        } else {
          if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $nombreErreur++;
            $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
          }
        }
      }

      if (!isset($_POST['message'])) {
        $nombreErreur++;
        $erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
      } else {
        if (empty($_POST['message'])) {
          $nombreErreur++;
          $erreur5 = '<p>Vous avez oublié de mettre un message.</p>';
        }
      }    // Plus tard un code pour vérifier un captcha anti-spam.

      if ($nombreErreur==0) { // S'il n'y a pas d'erreur
        // Ici il faut ajouter tout le code pour envoyer l'email.

          // Récupération des variables et sécurisation des données
          $nom     = htmlentities($_POST['nom']);
          $email   = htmlentities($_POST['email']);
          $message = htmlentities($_POST['message']);

          // Variables concernant l'email

          $destinataire = 'contact@bertrandfeuille.fr';
          $sujet = 'Nouveau message du site CV !';
          $contenu = '<html><head><title>Titre du message</title></head><body>';
          $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
          $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
          $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
          $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)


          $headers = 'MIME-Version: 1.0'."\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

          // Envoyer l'email
          mail($destinataire, $sujet, $contenu, $headers);


        echo '<div style="border:1px solid rgb(87, 181, 34); padding:5px;">';
        echo '<p style="color:rgb(87, 181, 34);">Votre message a bien été envoyé.';
      } else { // S'il y a un moins une erreur

        echo '<div style="border:1px solid #ff0000; padding:5px;">';
        echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s).</p>';
        if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
        if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
        if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
        if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
        if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';

      }
    }
?>
