$(document).ready(function (){ 

$("#gsx").click(function(event){
  $.get("select.php", function(data) {
    $("#content").html(data);
  });
  });
  
  }); 
