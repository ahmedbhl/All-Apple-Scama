<?php
class admin
{
	private $_pseudo;
	private $_pass ;
	
	
	public function admin($bdd){ 
		$this->_bdd = $bdd;
	}
	
	public function get_pass(){
	return $this->_pass;
	}
	public function set_pass($s){
	$this->_pass = $s;
	}
	public function get_pseudo(){
	return $this->_mail;
	}
	public function set_pseudo($s){
	$this->_mail= $s;
	}
	
//***************************************************************************************************************************//

public function search_account()
{
$req="select mail from idmsaweb_gsx.account_gsx where mail='$this->_mail'";
$res=$this->_bdd->requete($req);
while($row =mysql_fetch_array ($res))
			{			
				if($this->_mail==$row['mail'])
					{
						return 1;
					}
					
			}
						return(0);  

}

public function liste_account()
{

$req="select * from idmsaweb_gsx.account_gsx ORDER BY time DESC";
$res=$this->_bdd->requete($req);
return $res;
}


function sql_inject($str) {
	if (get_magic_quotes_gpc()) {
		$sanitize = mysql_real_escape_string(stripslashes($str));	 
	} else {
		$sanitize = mysql_real_escape_string($str);	
	} 
	return $sanitize;
}

}
?>