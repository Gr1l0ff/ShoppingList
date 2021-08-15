require('./bootstrap');

$(document).ready(function(){

  $('.err-close').click(function (){
    
    $(this).parent().remove();
  
  });

  $(".heading-home").fadeIn(3000);


  $(".login").fadeIn(3000);
  $(".register").animate({opacity:1, 'min-height':"58vh"}, 1000);
  

  $(window).scroll(function(){
  
    let scroll = $(window).scrollTop();
   
    if(scroll > 130){
      $(".feature").fadeIn(3000);
    }
   
});

});