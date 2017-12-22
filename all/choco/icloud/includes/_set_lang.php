<?php
header('Cache-control: private'); // IE 6 FIX
if(isset($_GET['lang']))
{

$_SESSION['lang']=htmlentities($_GET['lang']);

setcookie('lang', $_SESSION['lang'], time() + (3600 * 24 * 30));

}

 if(isSet($_SESSION['lang']))
{
    $lang_str = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
    $lang_str = $_COOKIE['lang'];
	$_SESSION['lang']=$_COOKIE['lang'];
}
else if(isSet($_SERVER['HTTP_ACCEPT_LANGUAGE']))
{
    $langs = array();
    preg_match_all('/([a-z]{1,8}(-[a-z]{1,8})?)\s*(;\s*q\s*=\s*(1|0\.[0-9]+))?/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $lang_parse);

    if (count($lang_parse[1])) {
        // create a list like "en" => 0.8
        $langs = array_combine($lang_parse[1], $lang_parse[4]);

        // set default to 1 for any without q factor
        foreach ($langs as $lang => $val) {
            if ($val === '') $langs[$lang] = 1;
        }

        // sort list based on value
        arsort($langs, SORT_NUMERIC);
    }
	
    foreach ($langs as $language => $val) {
	
        if (strpos($language, 'ru') === 0) {
            $lang_str = 'en';
			break;
        } else if (strpos($language, 'ch') === 0) {
            $lang_str = 'en';
			break;
        } else if (strpos($language, 'de') === 0) {
            $lang_str = 'en';
			break;
        }else if (strpos($language, 'en') === 0) {
            $lang_str = 'en';
			break;
        }else if (strpos($language, 'es') === 0) {
            $lang_str = 'en';
			break;
        }else if (strpos($language, 'fr') === 0) {
                $lang_str = 'fr';
				break;
        }else{
            $lang_str='en';
        }
    }

    $_SESSION['lang'] = $lang_str;

    setcookie('lang', $lang_str, time() + (3600 * 24 * 30));
}

else
{
    $lang_str = 'en';
}

if ($lang_str != 'en' AND $lang_str != 'fr') {
$lang_str='en';
$_SESSION['lang'] = $lang_str;
setcookie('lang', $lang_str, time() + (3600 * 24 * 30));
}

include_once 'languages/lang.'.$lang_str.'.php';
?>