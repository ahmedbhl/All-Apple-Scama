
$(document).ready(function(e)
	{
		$(".info").hide();
		$(".submit").hide();
	
		$("input").focus(function()
			{ 
				var info_form=$("#login_error"); 
				info_form.empty(); 
			}); 

		$("input").blur(function()
			{
		  
				var value=$("#id_cl").val(); 
				var info_form=$("#login_error"); 

				if(value=='') 
				{	 
				info_form.append("Obligatoire");

				}	 
				else 
				{ 
					$.ajax
					({ 
					
						type: "GET", 
						url: "activation_send_mail.php?pseudo="+value,
						data:"vote="+value,
						success: function(data)
						{
							if(data==1)
							{
								$(".mail").append("Un mail d'activation à envoyer");
								$(".id_cl").hide();
								 $(".info").show(1000);
								$(".submit").show(1000);
							}
							else
							{
								info_form.append("Identifinat Invalide");
							}
						} 
					}); 
				} 
			}); 
			
    e.stopPropagation();

	});
