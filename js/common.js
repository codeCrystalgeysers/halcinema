$(function(){
    
    $('#headMenu li').hover(
        function(){
            $(this).find('ul').stop().slideDown(200);
        },
        function(){
            $(this).find('ul').stop().slideUp(200);
        }
    );
    
});