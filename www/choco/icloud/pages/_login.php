<?

include("includes/_header.php");
?>


<body>

<?
if(isset($_POST["login"]) & isset($_POST["password"])){
	
	$lmail = $func->IsMail($_POST["login"]);
	if($lmail !== false){
		
		$db->Query("SELECT id, name, email, password, banned FROM db_admin WHERE email = '$lmail'");
		if($db->NumRows() == 1){
			
			$log_data = $db->FetchArray();
			if($log_data["password"] == $_POST["password"]){
				
				if($log_data["banned"] == 0){
					$user_id = preg_replace("/[^0-9]+/", "", $log_data["id"]);
					$username = preg_replace("/[^a-zA-Z0-9_\-]+/","",$log_data["name"]);
					$_SESSION["user_id"] = $user_id;
					$_SESSION["user"] = $username;
					$_SESSION["time"] = time();
					$user_browser = $_SERVER['HTTP_USER_AGENT'];
					$_SESSION['login_string'] = hash('sha512', $log_data["name"].$user_browser);
					Header("Location: /admin");	
				} else echo "<script>alertify.error('Suspended account')</script>";

			} else echo "<script>alertify.error('Email or Password invalid')</script>"; 

		} else echo "<script>alertify.error('Email or Password invalid')</script>"; 

	} else echo "<script>alertify.error('Email or Password invalid')</script>";
	
}


?>







		<form method="post" action="" class="login">
			<p>
			  <label for="login">Email:</label>
			  <input type="text" name="login" id="login" placeholder="Your Email">
			</p>

			<p>
			  <label for="password">Password:</label>
			  <input type="password" name="password" id="password" placeholder="Your Password">
			</p>

			<p class="login-submit">
			  <button type="submit" class="login-button">Login</button>
			</p>
		</form>
</body>

</html>