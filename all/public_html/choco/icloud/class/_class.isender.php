<?php
class isender{
    
	var $Hosts = "";
	
	/*======================================================================*\
	Function:	__construct
	Descriiption: 
	\*======================================================================*/
	function __construct(){
	
		$this->Hosts = str_replace("www.","",$_SERVER['HTTP_HOST']);
	
	}
	
	/*======================================================================*\
	Function:	SendRegKey 
	Descriiption: 
	\*======================================================================*/
	function SendRegKey($mail, $key){
	
		$text = "Envoyer votre Email a ete demande de s'inscrire dans le systeme \"".$this->Hosts."\"<BR />";
		$text.= "Si vous n'avez pas demande un lien, il suffit d'ignorer ce message. <BR /><BR />";
		$text.= "Lien pour vous inscrire: <a href='http://".$this->Hosts."/signup/key/{$key}'>";
		$text.= "http://".$this->Hosts."/signup/key/{$key}</a>";
		$subject = "L'enregistrement dans le systeme \"".$this->Hosts."\"";
		
		return $this->SendMail($mail, $subject, $text);
		
	}
	
	/*======================================================================*\
	Function:	RecoveryPassword
	Descriiption: 
	\*======================================================================*/
	function RecoveryPassword($user, $pass, $mail,$lang){
	
		$text = $lang['account_info'].": <BR />";
		$text.= "<b>".$lang['username'].":</b> {$user}<BR />";
		$text.= "<b>".$lang['password'].":</b> {$pass}<BR />";
		$text.= $lang['account_access'].": <a href='http://".$this->Hosts."'>http://".$this->Hosts."/signin</a>";
		$subject = $lang['account_info']." \"".$this->Hosts."\"";
		
		return $this->SendMail($mail, $subject, $text);
		
	}
	
	/*======================================================================*\
	Function:	SendAfterReg
	Descriiption: 
	\*======================================================================*/
	function SendAfterReg($user, $mail, $pass){
	
		$text = "Thanks for your registration in \"".$this->Hosts."\"<BR />";
		$text.= "Account informations: <BR />";
		$text.= "<b>Login:</b> {$user}<BR />";
		$text.= "<b>Password:</b> {$pass}<BR />";
		$text.= "Account access: <a href='http://".$this->Hosts."/signin'>http://".$this->Hosts."/signin</a>";
		$subject = "Successful registration \"".$this->Hosts."\"";
		
		return $this->SendMail($mail, $subject, $text);
		
	}
	
	/*======================================================================*\
	Function:	SetNewPassword  
	Descriiption: 
	\*======================================================================*/
	function SetNewPassword($user, $pass, $mail){
	
		$text = "Password has been changed successfully <BR />";
		$text.= "New account informations: <BR />";
		$text.= "<b>Login:</b> {$user}<BR />";
		$text.= "<b>New password:</b> {$pass}<BR />";
		$text.= "Account access: <a href='http://".$this->Hosts."/signin'>http://".$this->Hosts."/signin</a>";
		$subject = "New password \"".$this->Hosts."\"";
		
		return $this->SendMail($mail, $subject, $text);
		
	}
	
	
	/*======================================================================*\
	Function:	Headers
	Descriiption: 
	\*======================================================================*/
	function Headers(){
	
	$headers = "MIME-Version: 1.0\r\n";
	$headers.= "Content-type: text/html; charset=Windows-1251\r\n";
	$headers.= "Date: ".date("m.d.Y (H:i:s)",time())."\r\n";
	$headers.= "From: support@".$this->Hosts." \r\n";
	
		return $headers;
	
	}
	
	/*======================================================================*\
	Function:	SendMail
	Descriiption: 
	\*======================================================================*/
	function SendMail($recipient, $subject, $message){
	
		
		return (mail($recipient, $subject, $message, $this->Headers())) ? true : false;
	
	}
	
		function SendSupportMail($recipient, $subject, $message,$from){
	
		
		return (mail($recipient, $subject, $message, $from)) ? true : false;
	
	}
	
}
?>