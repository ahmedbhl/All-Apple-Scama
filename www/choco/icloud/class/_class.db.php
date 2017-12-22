<?PHP

class db{


	private $con = false; 
	private $Queryes = 0; 
	private $MySQLErrors = array(); 
	private $TimeQuery = 0; 
	private $MaxExTime = 0; 
	private $ListQueryes = ""; 
	private $HardQuery = ""; 
	private $LastQuery = false; 
	private $ConnectData = array(); 
	
	/*======================================================================*\
	Function:	__construct
	Descriiption: 
	\*======================================================================*/
	public function __construct($host, $user, $pass, $base){
		$this->Connect($host, $user, $pass, $base);
		$this->query("SET NAMES 'cp1251'");
		$this->query("SET CHARACTER SET 'cp1251'");
	}
	
	/*======================================================================*\
	Function:	Stats
	Descriiption: 
	\*======================================================================*/
	public function Stats(){
		
		$sD = array();
		$sD["TimeQuery"] = $this->TimeQuery;
		$sD["MaxExTime"] = $this->MaxExTime;
		$sD["ListQueryes"] = $this->ListQueryes;
		$sD["HardQuery"] = $this->HardQuery;
		$sD["Queryes"] = $this->Queryes;
		return $sD;
	}

	/*======================================================================*\
	Function:	GetError
	Descriiption: 
	\*======================================================================*/
	private function GetError($TextError){
		$this->MySQLErrors[] = $TextError;
		die($TextError);
	}
	
	
	/*======================================================================*\
	Function:	query
	Descriiption: 
	\*======================================================================*/	
	public function query($query, $FreeMemory = false, $write_last = true){
		
		$TimeA = $this->get_time();
		$xxt_res = mysqli_query($this->con, $query) or $this->GetError(mysqli_error($this->con));
		
		if($write_last) $this->LastQuery = $xxt_res;
		
		$TimeB = $this->get_time() - $TimeA;
		$this->TimeQuery += $TimeB;
		
			if($TimeB > $this->MaxExTime){$this->HardQuery = $query; $this->MaxExTime = $TimeB;}
			
				if( empty($this->ListQueryes) ) $this->ListQueryes = $query; else $this->ListQueryes .= "\n".$query;
			
		$this->Queryes++;
		
		if(!$FreeMemory){
			return $this->LastQuery;
		}else return $this->FreeMemory();
		
		
	}

	/*======================================================================*\
	Function:	Connect
	Descriiption: 
	\*======================================================================*/	
	private function Connect($host, $user, $pass, $base){
		$this->con =  @mysqli_connect($host, $user, $pass, $base) or $this->GetError(mysqli_connect_error());
	} 
	
	
	/*======================================================================*\
	Function:	MultiQuery
	Descriiption: 
	\*======================================================================*/	
	function MultiQuery($query){
	
		$TimeA = $this->get_time();

		mysqli_multi_query($this->con, $query) or $this->GetError(mysqli_connect_error());
    	$TimeB = $this->get_time() - $TimeA;	
		$ret_data = array();
		$counter = 0;
			do{
        
				if ($result = mysqli_store_result($this->con)) {
					
					while ($row = mysqli_fetch_array($result)) {
					$ret_data[$counter][] = $row;
					}
					mysqli_free_result($result);
					$counter++;
				}

				
    		}while(mysqli_next_result($this->con));

		
		
		$this->TimeQuery += $TimeB;
			
			if($TimeB > $this->MaxExTime){$this->HardQuery = $query; $this->MaxExTime = $TimeB;}
			
				if( empty($this->ListQueryes) ) $this->ListQueryes = $query; else $this->ListQueryes .= "\n".$query;
			
		$this->Queryes++;
		
		return $ret_data;
	}
	
	/*======================================================================*\
	Function:	get_time
	Descriiption: 
	\*======================================================================*/	
	private function get_time()
	{
		list($seconds, $microSeconds) = explode(' ', microtime());
		return ((float) $seconds + (float) $microSeconds);
	}
	
	/*======================================================================*\
	Function:	__destruct
	Descriiption: 
	\*======================================================================*/
	function __destruct(){
		
		if( !count($this->MySQLErrors) ) mysqli_close($this->con);
	
	}
	
	/*======================================================================*\
	Function:	FreeMemory
	Descriiption: 
	\*======================================================================*/
	function FreeMemory()
	{
		$tr = ($this->LastQuery) ? true : false;
		@mysqli_free_result($this->LastQuery);
		return $tr;
	}
	
	/*======================================================================*\
	Function:	RealEscape
	Descriiption: 
	\*======================================================================*/
	function RealEscape($string)
	{
		if ($this->con) return mysqli_real_escape_string ($this->con, $string);
		else return mysql_escape_string($string);
	}
	
	/*======================================================================*\
	Function:	NumRows
	Descriiption: 
	\*======================================================================*/
	function NumRows()
	{
		return mysqli_num_rows($this->LastQuery);
	}
	
	/*======================================================================*\
	Function:	fetch_array
	Descriiption: 
	\*======================================================================*/
	function FetchArray(){
		//if($this->LastQuery)
		return mysqli_fetch_array($this->LastQuery);
	}
	
	/*======================================================================*\
	Function:	NumRows
	Descriiption: 
	\*======================================================================*/
	function FetchRow(){
		$xres = mysqli_fetch_row($this->LastQuery);
		
		return (count($xres) > 1) ? $xres :  $xres[0];
	}
	
	/*======================================================================*\
	Function:	LastInsert()
	Descriiption: 
	\*======================================================================*/
	function LastInsert(){
		
		return @mysqli_insert_id($this->con);
		
	}
	
}
?>