<?php
session_start();
// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();
// Suppression des cookies de connexion automatique

setcookie('mot_de_passe','');

//echo'<script> alert ("merci pour votre visite")</script>';
?> <script type="text/javascript" src="../js/notif.js"></script>
<?php
print("<script type=\"text/javascript\">setTimeout('location=(\"Login.html\")' ,0);</script>");
?>