<?php
if(!empty($_POST['imei'])&& isset($_POST['imei']))//&& is_numeric ($_POST['imei']))

				{
					$texte = $_POST['imei'];
					$ligne = preg_split("/[\n]+/", $texte);

					foreach( $ligne as $row => $imeii ) 

							{
							$imeii=preg_replace('/[^A-Za-z0-9-]/', '',$imeii);
							
$url= 'http://espace-client.sfr.fr/desimlockage/afficherFormulaireModifEmail.do?desimlockageContext.numIMEI='.$imeii.'#sfrclicid=EC_desimlocage_desimlocker-HorsListe';
global $proxy;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_HEADER, 0); // return headers 0 no 1 yes
curl_setopt($ch, CURLOPT_USERPWD,"0619244703:123456");
// curl_setopt($ch, CURLOPT_USERPWD,"0616777531:123456");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return page 1:yes
curl_setopt($ch, CURLOPT_TIMEOUT, 200); // http request timeout 20 seconds
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects, need this if the url changes
curl_setopt($ch, CURLOPT_MAXREDIRS, 2); //if http server gives redirection responce
curl_setopt($ch, CURLOPT_USERAGENT,
    "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7");
curl_setopt($ch, CURLOPT_COOKIEJAR, $imei".txt"); // cookies storage / here the changes have been made
curl_setopt($ch, CURLOPT_COOKIEFILE, $imei".txt");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // false for https
curl_setopt($ch, CURLOPT_ENCODING, "gzip"); // the page encoding

$data = curl_exec($ch); // execute the http request
curl_close($ch); // close the connection

$bl="Code erreur : 07";
$vol ="Code erreur : 06";
$nf ="Code erreur : 03";
$err ="Code erreur : 04";
$er="Erreur technique";
$clean="Confirmation";

if(preg_match('#'.$clean.'#', $data))
{
$msg='CLEAN';
}
else if(preg_match('#'.$nf.'#', $data))
{
 $msg='NOT FOUND => Code erreur : 03';
}

else if(preg_match('#'.$vol.'#', $data))
{
 $msg='BLACKLISTE => Code erreur : 06'; 
}
else if(preg_match('#'.$bl.'#', $data))
{
$msg='Compte Blocker ==> Code erreur : 07';
}
else
 {
 $msg='Erreur technique';
 }

echo $msg.'==>'.$imeii.'<br>';
 // echo $data;
// $data="hhhhhhhhhhhh";
// echo $data;
}
}
else
{
echo '<script>alert("svp remplir le champs imei")</script>';

print("<script type=\"text/javascript\">setTimeout('location=(\"index.php\")' ,0);</script>");
}
?>