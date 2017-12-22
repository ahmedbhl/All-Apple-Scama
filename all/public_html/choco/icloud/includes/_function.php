<?
function check($user, $password, $url, $xml){
	$c=curl_init($url);
	curl_setopt($c, CURLOPT_HTTPHEADER, array("Depth: 1", "Content-Type: text/xml; charset='UTF-8'", "User-Agent: DAVKit/4.0.1 (730); CalendarStore/4.0.1 (973); iCal/4.0.1 (1374); Mac OS X/10.6.2 (10C540)"));
	curl_setopt($c, CURLOPT_HEADER, 0);
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($c, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($c, CURLOPT_USERPWD, $user.":".$password);
	curl_setopt($c, CURLOPT_CUSTOMREQUEST, "PROPFIND");
	curl_setopt($c, CURLOPT_POSTFIELDS, $xml);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	$Response = curl_exec($c);
	curl_close($c);
	return $Response;
} ?>