<?php

/*version PHP pour envoyer un email avec la fonction mail().
Je récupère les valeurs du formulaires les vérifie si c'est correct on envoie le mail*/


/*if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
        echo "error";
    } elseif (empty($_POST['mail'])) {
        echo "error 2";
    } elseif (empty($_POST['message'])) {
        echo "error 3";
    } else {
        $to      = "charfim197@gmail.com";
     $message = $_POST['message'];
     $headers = 'From: '.$_POST['message'].'' . "\r\n" .
     'Reply-To: charfim197@gmail.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $message, $headers);
    }
}*/