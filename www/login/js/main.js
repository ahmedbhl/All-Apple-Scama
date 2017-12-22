 jQuery(function($){
 var alert =$('#alert') ;
 if(alert.length>0)
 {
 alert.hide().slideDown(500);//.delay(3000).slideUp;
 alert.find('.fermer').click(function(e){
	e.preventDefault();
	alert.slideUp();
 })
 
 }
 
 });
 
  jQuery(function($){
 var notif =$('#notif') ;
 if(notif.length>0)
 {
 notif.hide().slideDown(500);//.delay(3000).slideUp;
 notif.find('.fermer').click(function(e){
	e.preventDefault();
	notif.slideUp();
 })
 
 }
 
 });