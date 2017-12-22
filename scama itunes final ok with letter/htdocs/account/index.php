<?php
if(!empty($_REQUEST['$lg']))
{
require 'IDMSWebAuth/fr/authenticate.html.html';
}
else
{

require 'IDMSWebAuth/us/authenticate.html.html';
}

?>