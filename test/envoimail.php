<?php
$TO = "admin@pmecs.fr";
$h = "From:" . $TO;
$subject = "Contact";
$message = "";
while (list($key, $val) = each($HTTP_POST)) {$message .= "$key : $val\n";}
mail($TO, $subject, $message, $h);
Header("Location: http://mour-mbengue.com/test/");
// commentaire en php,js,css.. Tout ce qui se trouve après les // n'est pas executé
// mail($TO, $subject, $message, $h);
// Header("Location: http://<URL de la page de remerciement>");
// on commente le mail et le header pour ne pas être redirigé ou envoyer inutilement
// un mail pendant les test et comme ça tu aura le temps de t'assurer que tu
// construits bien ta variable $message.
 
echo $message; // on affiche $message
?>