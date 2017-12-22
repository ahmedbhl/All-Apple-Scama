<?php
session_start();

 if (isset($_SESSION['user']) AND isset($_SESSION['pass']))

 {
 ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>SFR</title>

<link rel="stylesheet" href="css/accueil.css">
   <script src="css/jquery.js"></script>
	<script src="css/script.js"></script>
	   <script src="css/check_imei.js"></script>

  
  </head>

  <body>


<div class="menu2">
    <a href="accueil.php"  id="home">HOME</a>
    <a href="#" id="check_acc">Check Account</a>
    <a href="#" id="check_imei" >Check IMEI</a>
    <a href="#" id="unlock">Unlock</a>
    <a class="dummy"> </a>
	<a href="deconnexion.php" class="logout">Logout</a>
	<a href="#" class="logout"><?php echo $_SESSION['user'];?></a>
	<a href="#" class="logout"><?php echo $_SESSION['imei_ctr'];?></a>
	<a href="#" class="logout"><?php echo $_SESSION['nck']; ?></a>
</div>
<div id="content">

</div>



  </body>
</html>
<?php
}
else
{

print("<script type=\"text/javascript\">setTimeout('location=(\"login.php\")' ,0);</script>");

}
?>
