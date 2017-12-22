<?
$_OPTIMIZATION["title"] = "Account";
$_OPTIMIZATION["description"] = "User account";
$_OPTIMIZATION["keywords"] = "Account,personnel account, the user";

include_once 'includes/login_check.php';

if(!login_check()){ Header("Location: /login");return; }

if(isset($_GET["sel"])){
		
	$smenu = strval($_GET["sel"]);
			
	switch($smenu){
		
		case "404": include("pages/_404.php"); break;  
		case "farm": include("pages/admin/_admin.php"); break; 
		case "exit": include("includes/logout.php"); return; break;
		default: @include("pages/_404.php"); break;			
	}
			
}else @include("pages/admin/_admin.php");
?>