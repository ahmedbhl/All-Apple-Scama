<?php
function login_check() {
    // Check if all session variables are set 
    if (isset($_SESSION['user_id'], 
                        $_SESSION['user'], 
                        $_SESSION['login_string'],$_SESSION['time'])) {
 
        $user_id = $_SESSION['user_id'];
        $login_string = $_SESSION['login_string'];
        $username = $_SESSION['user'];
		$time=$_SESSION['time'];
		$key=$_SESSION['key'];
		
		if ((time()-$time)>7200) {
		return false;
		}
 
        // Get the user-agent string of the user.
				$user_browser = $_SERVER['HTTP_USER_AGENT'];
 
                $login_check = hash('sha512', $username. $user_browser);
				
				
                if ($login_check == $login_string) {
                    // Logged In!!!! 
                    return true;
                } else {
                    // Not logged in 
                    
					return false;
					
                }
            
            
        
        
    } else {
        // Not logged in 
		
        return false;
    }
}
?>
