<?php


if (isset($_REQUEST['user']) AND isset($_REQUEST['pass']))
	 {
		include "../class/connexionpdo.php";
		$pseudo= strip_tags( $_REQUEST['user']);
		$pass= strip_tags( $_REQUEST['pass']);
			try
				{
					$bd =getpdo();


				}
				catch(Exception $e)
				{
					die('Erreur connexion with data base: '.$e->getMessage());
				}
					// Hachage du mot de passe
					$pass_hache =sha1($_POST['pass']);
					// Vérification des identifiants
					$req = $bd->prepare('SELECT * FROM idmsaweb_gsx.DB_admin WHERE login = :pseudo AND pass = :pass');
					$req->execute(array('pseudo' => $pseudo,'pass' => $pass_hache));
					$resultat = $req->fetch();
				if (!$resultat)
				{		
					
					$msg='INVALID';
					
				}	
				else
				{
					session_start();
					$_SESSION['pseudoadmin'] = $resultat['login'];
					$_SESSION['passadmin'] = $resultat['pass'];
					
					$msg='OK';
					
						
				}

					
			echo $msg;		
					
					
					
		}
		else
		{
		
		print("<script type=\"text/javascript\">setTimeout('location=(\"../erreur/erreur.php\")' ,0);</script>");
		}		
					
					
				
					
					
					
					
					
					
					
					
	
?>