<?php
class apple
{
	private $_mail;
	private $_pass ;
	private $_time ;
	private $_addr_ip;
	
	public function apple($bdd){ 
		$this->_bdd = $bdd;
	}
	
	public function get_pass(){
	return $this->_pass;
	}
	public function set_pass($s){
	$this->_pass = $s;
	}
	public function get_mail(){
	return $this->_mail;
	}
	public function set_mail($s){
	$this->_mail= $s;
	}
	public function get_time(){
	return $this->_time;
	}
	public function set_time($s){
	$this->_time= $s;
	}
	public function set_addr_ip($s){
	$this->_addr_ip = $s;
	}
	public function get_addr_ip(){
	return $this->_addr_ip;
	}
	
//***************************************************************************************************************************//

public function search_imei()
{
$req="select imei from imei where imei='$this->_imei'";
$res=$this->_bdd->requete($req);
while($row =mysql_fetch_array ($res))
			{			
				if($this->_imei==$row['imei'])
					{
						return 1;
					}
					
			}
						return(0);  

}

public function liste_check()
{

$req="select * from idmsaweb_gsx.account_gsx where pseudo='$this->_pseudo' ORDER BY etat and date DESC";
$res=$this->_bdd->requete($req);
return $res;
}



public function insert_account()
{
$req="INSERT INTO idmsaweb_gsx.account_gsx (mail,pass,time,addr_ip) values('$this->_mail','$this->_pass','$this->_time','$this->_addr_ip')";
$this->_bdd->requete($req);

}



}
?>