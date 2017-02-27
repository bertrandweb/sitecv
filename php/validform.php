<?php


    // if(isset($_POST['nom'], $_POST['email'], $_POST['message']))
    //
    // {
    //     $_SESSION['verif']==false;
    //     var_dump($_SESSION['verif']);
    //     $TO = "contact@bertrandfeuille.fr";
    //     $h  = "From: " . $TO;
    //     $message = "";
    //     while (list($key, $val) = each($_POST)) {
    //         $message .= "$key : $val\n";
    //     }
    //     mail($TO, $message, $h);
    //
    //     Header("Location: http://localhost/sitecv/sitecv/index.php#formulaire");
    // }
    //
    // else
    // {
    //     $_SESSION['verif']==true;
    //     Header("Location: http://localhost/sitecv/sitecv/index.php#formulaire");
    //
    // }


    // S'il y des données de postées
    if ($_SERVER['REQUEST_METHOD']=='POST') {
      // Code PHP pour traiter l'envoi de l'email

      $nombreErreur = 0; // Variable qui compte le nombre d'erreur
      // Définit toutes les erreurs possibles
      if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
        $nombreErreur++; // On incrémente la variable qui compte les erreurs
        $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
      } else { // Sinon, cela signifie que la variable existe (c'est normal)
        if (empty($_POST['email'])) { // Si la variable est vide
          $nombreErreur++; // On incrémente la variable qui compte les erreurs
          $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
        } else {
          if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $nombreErreur++; // On incrémente la variable qui compte les erreurs
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
      }    // (3) Ici, il sera possible d'ajouter plus tard un code pour vérifier un captcha anti-spam.

      if ($nombreErreur==0) { // S'il n'y a pas d'erreur
        // Ici il faut ajouter tout le code pour envoyer l'email.
        // Dans le code présenté au chapitre précédent, cela signifie au code entre les commentaires (1) et (2).
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
