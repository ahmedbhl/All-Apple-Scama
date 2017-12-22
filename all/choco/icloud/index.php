<?PHP
function TimerSet(){
	list($seconds, $microSeconds) = explode(' ', microtime());
	return $seconds + (float) $microSeconds;
}
$_timer_a = TimerSet();


session_start();
@ob_start();
include("includes/_set_lang.php");

$_OPTIMIZATION = array();
$_OPTIMIZATION["title"] = "iCloud";
$_OPTIMIZATION["description"] = "iCloud makes sure you always have the latest versions of your most important things — documents, photos, notes, contacts, and more — on all your devices. It can even help you locate a missing iPhone, iPad, iPod touch or Mac.";
$_OPTIMIZATION["keywords"] = "icloud, free, apple";


define("CONST_RUFUS", true);

function __autoload($name){ include("class/_class.".$name.".php");}

$config = new config;
$func = new func;
$db = new db($config->HostDB, $config->UserDB, $config->PassDB, $config->BaseDB);

include("includes/_set_referer.php");
if(isset($_GET["menu"]))
{	
	$menu = strval($_GET["menu"]);	
	switch($menu)
	{
		case "404": include("pages/_404.php"); break; 
		case "welcom": include("pages/_welcom.php"); break;
		case "login": include("pages/_login.php"); break;
		case "admin": include("pages/_admin_panel.php"); break;
		default: @include("pages/_404.php"); break;
			
	}		
}
else @include("pages/_index.php");

$content = ob_get_contents();
ob_end_clean();
		 
	$content = str_replace("{!TITLE!}",$_OPTIMIZATION["title"],$content);
	$content = str_replace('{!DESCRIPTION!}',$_OPTIMIZATION["description"],$content);
	$content = str_replace('{!KEYWORDS!}',$_OPTIMIZATION["keywords"],$content);
	$content = str_replace('{!GEN_PAGE!}', sprintf("%.5f", (TimerSet() - $_timer_a)) ,$content);	
	
echo $content;
?>








