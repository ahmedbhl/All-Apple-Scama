<?PHP
class func{

	public $UserIP = "Undefined"; 
	public $UserCode = "Undefined"; 
	public $TableID = -1; 
	public $UserAgent = "Undefined"; 

	/*======================================================================*\
	Function:	__construct
	Output:		
	Descriiption: 
	\*======================================================================*/
	public function __construct(){
		$this->UserIP = $this->GetUserIp();
		$this->UserCode = $this->IpCode();
		$this->UserAgent = $this->UserAgent();
	}
	
	/*======================================================================*\
	Function:	__destruct
	Output:		
	Descriiption: 
	\*======================================================================*/
	public function __destruct(){
	
	}
	
	
	
	/*======================================================================*\
	Function:	IpToLong
	Descriiption: 
	\*======================================================================*/
	public function IpToInt($ip){ 
	
		$ip = ip2long($ip); 
		($ip < 0) ? $ip+=4294967296 : true; 
		return $ip; 
	}
	
	
	/*======================================================================*\
	Function:	IpToLong
	Descriiption: 
	\*======================================================================*/
	public function IntToIP($int){ 
  		return long2ip($int);  
	}
	
	
	/*======================================================================*\
	Function:	GetUserIp
	Output:		UserIp
	Descriiption: 
	\*======================================================================*/
	public function GetUserIp(){
	
		if($this->UserIP == "Undefined"){
			
			if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) AND !empty($_SERVER['HTTP_X_FORWARDED_FOR']))
   			{
				
			$client_ip = ( !empty($_SERVER['REMOTE_ADDR']) ) ? $_SERVER['REMOTE_ADDR'] : ( ( !empty($_ENV['REMOTE_ADDR']) ) ? $_ENV['REMOTE_ADDR'] : "unknown" );
      		$entries = split('[, ]', $_SERVER['HTTP_X_FORWARDED_FOR']);

      		reset($entries);
				
				while (list(, $entry) = each($entries))
				{
				$entry = trim($entry);
					if ( preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $entry, $ip_list) )
				 	{
					
					$private_ip = array(
						  '/^0\./',
						  '/^127\.0\.0\.1/',
						  '/^192\.168\..*/',
						  '/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/',
						  '/^10\..*/');
		
						$found_ip = preg_replace($private_ip, $client_ip, $ip_list[1]);
		
						if ($client_ip != $found_ip)
						{
					   	$client_ip = $found_ip;
					   	break;
						}
						
					}
					
				}
			
			$this->UserIP = $client_ip;
			return $client_ip;
			
			}else return ( !empty($_SERVER['REMOTE_ADDR']) ) ? $_SERVER['REMOTE_ADDR'] : ( ( !empty($_ENV['REMOTE_ADDR']) ) ? $_ENV['REMOTE_ADDR'] : "unknown" );
		
		}else return $this->UserIP;
	
	}
	
	
	/*======================================================================*\
	Function:	IsLogin
	Output:		True / False
	Input:		
	Descriiption: 
	\*======================================================================*/
	public function IsLogin($login, $mask = "/^[a-zA-Z0-9_]", $len = "{4,10}"){
		
		return (is_array($login)) ? false : (preg_match("{$mask}{$len}$/", $login)) ? $login : false;
	
	
	}
	
	/*======================================================================*\
	Function:	IsPassword
	Output:		True / False
	Input:		
	Descriiption: 
	\*======================================================================*/
	public function IsPassword($password, $len = "/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"){
		
		return (is_array($password)) ? false : (preg_match("{$len}$/", $password)) ? $password : false;
	
	}
	
	
	/*======================================================================*\
	Function:	IsWM
	Output:		True / False
	Input:		TYPE: 0 - WMID, 1 - WMR, 2 - WMZ, 3 - WME, 4 - WMU 
	Descriiption: 
	\*======================================================================*/
	public function IsWM($data, $type = 0){
		
		$FirstChar = array( 1 => "R",
							2 => "Z",
							3 => "E",
							4 => "U");
		
		if(strlen($data) < 12 && strlen($data) > 12 && $type < 0 && $type > count($FirstChar)) return false;
			if($type == 0) return (is_array($data)) ? false : ( ereg("^[0-9]{12}$", $data) ? $data : false );
				if( substr(strtoupper($data),0,1) != $FirstChar[$type] or !ereg("^[0-9]{12}", substr($data,1)) ) return false;
			
			return $data;
	}
	
	/*======================================================================*\
	Function:	IsMail
	Output:		True / False
	Input:		Email 
	Descriiption: 
	\*======================================================================*/
	public function IsMail($mail){
		
		if(is_array($mail) && empty($mail) && strlen($mail) > 255 && strpos($mail,'@') > 64) return false;
			return ( ! filter_var($mail, FILTER_VALIDATE_EMAIL)) ? false : $mail;
			
	}
	
	/*======================================================================*\
	Function:	IpCode
	Output:		String, Example 255025502550255
	Input:		- 
	Descriiption: 
	\*======================================================================*/
	public function IpCode(){
		
		$arr_mask = explode(".",$this->GetUserIp());
		return $arr_mask[0].".".$arr_mask[1].".".$arr_mask[2].".0";

	}
	
	/*======================================================================*\
	Function:	GetTime
	Descriiption: 
	\*======================================================================*/
	public function GetTime($tis = 0, $unix = true, $template = "d.m.Y H:i:s"){
		
		if($tis == 0){
			return ($unix) ? time() : date($template,time());
		}else return date($template,$unix);
	}
	
	/*======================================================================*\
	Function:	UserAgent
	Descriiption: 
	\*======================================================================*/
	public function UserAgent(){
		
		return $this->TextClean($_SERVER['HTTP_USER_AGENT']);
		
	}
	
	/*======================================================================*\
	Function:	TextClean
	Descriiption: 
	\*======================================================================*/
	public function TextClean($text){
		
		$array_find = array("`", "<", ">", "^", '"', "~", "\\");
		$array_replace = array("&#96;", "&lt;", "&gt;", "&circ;", "&quot;", "&tilde;", "");
		
		
		
		return str_replace($array_find, $array_replace, $text);
		
	}
	
	/*======================================================================*\
	Function:	ShowError
	Descriiption: 
	\*======================================================================*/
	public function ShowError($errorArray = array(), $title = "Corrigez les erreurs suivantes"){
		
		if(count($errorArray) > 0){
		
		$string_a = "<div class='Error'><div class='ErrorTitle'>".$title."</div><ul>";
		
			foreach($errorArray as $number => $value){
				
				$string_a .= "<li>".($number+1)." - ".$value."</li>";
				
			}
			
		$string_a .= "</ul></div><BR />";
		return $string_a;
		}else return "erreur inconnue :(";
		
	}
	
	
	/*======================================================================*\
	Function:	ComissionWm
	Descriiption: 
	\*======================================================================*/
	public function ComissionWm($sum, $com_payee, $com_payysys){
		
		$a = ceil(ceil($sum * $com_payee * 100) / 10000*100) / 100;
		$b = ceil(ceil($sum * str_replace("%","",$com_payysys) * 100) / 10000*100) / 100;
		return $a+$b;
	}
	
	/*======================================================================*\
	Function:	md5Password
	Descriiption: 
	\*======================================================================*/
	public function md5Password($pass){
		$pass = strtolower($pass);
		return md5("shark_md5"."-".$pass);
		
	}
	
	
	
	/*======================================================================*\
	Function:	ControlCode
	Descriiption: 
	\*======================================================================*/
	public function ControlCode($time = 0){
		
		return ($time > 0) ? date("Ymd", $time) : date("Ymd");
		
	}
	
	
	/*======================================================================*\
	Function:	SumCalc
	Descriiption: 
	\*======================================================================*/
	public function SumCalc($per_h, $sum_tree, $last_sbor){
		
		if($last_sbor > 0){
		
			if($sum_tree > 0 AND $per_h > 0){
			
				$last_sbor = ($last_sbor < time()) ? (time() - $last_sbor) : 0;
			
				$per_sec = $per_h / 3600;
				
				return round( ($per_sec * $sum_tree) * $last_sbor);
				
			}else return 0;
		
		}else return 0;
		
	}
	
	/*======================================================================*\
	Function:	SumCalc11
	Descriiption: 
	\*======================================================================*/
	public function SumCalc11($per_h, $sum_tree, $last_sbor, $date_mort){
		
		if($last_sbor > 0){
		
			if($sum_tree > 0 AND $per_h > 0){
			
				$last_sbor = ($last_sbor < $date_mort) ? ($date_mort - $last_sbor) : 0;
			
				$per_sec = $per_h / 3600;
				
				return round( ($per_sec * $sum_tree) * $last_sbor);
				
			}else return 0;
		
		}else return 0;
		
	}
	
	
	
	
	/*======================================================================*\
	Function:	SellItems
	Descriiption: 
	\*======================================================================*/
	public function SellItems($all_items, $for_one_coin){
		
		if($all_items <= 0 OR $for_one_coin <= 0) return 0;
		
		return sprintf("%.2f", ($all_items / $for_one_coin));
		
	}
	
	

}
?>