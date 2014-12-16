$(function(){

    $('#headerMenu').mouseover(function(){
      $('header').stop().animate({
        'height': 200
      }, {
        'duration': 250,
        'queue': false
      });
      
      $('#headerMenuListSub').animate({
        'opacity': 1
      }, {
        'duration': 250,
        'queue': false
      });
    });
    
    $('#headerMenu').mouseleave(function(){
      $('header').stop().animate({
        'height': 100
      }, {
        'duration': 250,
        'queue': false
      });
      
      $('#headerMenuListSub').animate({
        'opacity': 0
      }, {
        'duration': 250,
        'queue': false
      });
    });
    

});
