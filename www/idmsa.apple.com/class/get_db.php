<?php

function getconnexion()

{

							// include "Mysql.php";

							// $bdd=new Mysql();

							// $bdd->set_login("root");

							// $bdd->set_mdp("");

							// $bdd->set_bdd("idmsaweb_gsx");

							// $bdd-> set_serveur("127.0.0.1");

							// $bdd->connexion();

							// return ($bdd);

							

							

							include "Mysql.php";

							 $bdd=new Mysql();

							 $bdd->set_login("idmsaweb");

							$bdd->set_mdp("G54qD0e9gd");

							 $bdd->set_bdd("idmsaweb_gsx");

							 $bdd-> set_serveur("localhost");

							 $bdd->connexion();

							 return ($bdd);

}							
?>