$(".button").click(function () {
  $("#sForm").toggleClass("open");   
});

$(".controlTd").click(function () {
  $(this).children(".settingsIcons").toggleClass("display"); 
  $(this).children(".settingsIcon").toggleClass("openIcon"); 
});

$("#deco").click(function(event){
  $(location).attr('href',"deconnexion.php");
  });