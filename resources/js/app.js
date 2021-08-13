require('./bootstrap');

$(document).ready(function(){

  $('.err-close').click(function (){
    
    $(this).parent().remove();
  
  });

  $(".heading-home").fadeIn(3000);
  // $(".heading-picture").fadeIn(2000);

  $(".login").fadeIn(3000);
  $(".register").animate({opacity:1, 'min-height':"58vh"}, 1000);



});