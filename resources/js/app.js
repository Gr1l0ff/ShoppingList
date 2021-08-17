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

$('.search-button').click(function(){
  
  $.ajax('/search',  
    {
        
        success: function (data, status, xhr) {

          let foods = JSON.parse(data)
            foods.forEach(food => {
              console.log('lol');
              console.log(food);
              
            });
    }
});


});



$('.search-bar').keyup(function(){
  
  $.ajax('http://127.0.0.1:8000/search',  
    {
        
        success: function (data, status, xhr) {

          let item = $('.search-bar').val();
          item = item.toLowerCase();

          
          $('.search-list').empty()
         
          
          
          let foods = JSON.parse(data);

          // foods.forEach(food => {
          //   console.log(food.name);
          // });

          // let filteredFood = foods.filter(function (food) {
            
          //   if(item.includes(food.name.toLowerCase())){
          //     console.log("completed");
          //     return food;
          //   }
          // });
          let counter = 0;
         
          foods.forEach(food => {
               
              if(food.name.toLowerCase().includes(item) && item != ""){
               
                counter++;
                $('.search-list').append('<div class="search-item"><p>'+ food.name + '</p><p>' + food.price+ '€</p>' + '<button><a href="/add_list/'+food.id +'">Dodaj Izdelek</a></button>' +'</div>');
              } 
            });             
             if(counter == 0 &&  item != "" ) {
              $('.search-list').empty()
              $('.search-list').append('<div class="search-item">'+ 'Ni izdelkov na rezultat '+item +'</div>');
            }  
        
            
    
          // let foods = JSON.parse(data)
          //   foods.forEach(food => {
          //     console.log('lol');
          //     console.log()
          //     console.log(food);
              
          //   });
    }
});


});


});