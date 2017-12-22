<?php
class Mysql
{
private $_serveur;
private $_login;
private $_motpasse;
private $_nombd;
private $_idbd;
public function set_serveur($s){
	$this->_serveur=$s;
	}
public function set_login($s){
	$this->_login=$s;
	}
public function set_mdp($s){
	$this->_motpasse=$s;
	}
public function set_bdd($s)
{
	$this->_nombd=$s;
	}
public function connexion(){
$this->_idbd=(mysql_connect($this->_serveur,$this->_login,$this->_motpasse)) or die(mysql_error());
 mysql_select_db ($this->_nombd)or die(mysql_error());
}

public function get_cnx(){
	return $this->_idbd;
	}
public function deconnexion(){
	mysql_close($this->_idbd); }
	
public function requete($q)
{
		try
		{
			$res=mysql_query($q)or die(mysql_error() ." / sql = $q");
			return $res; 
		}
	
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
				
		}	
}
}
	
?>
