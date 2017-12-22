<?PHP 
if(isset($_GET["key"])){
	$_rid = $_GET["key"];
	setcookie("key",$_rid,time()+259200);
	header("Location: /");
}
?>