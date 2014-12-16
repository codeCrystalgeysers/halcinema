
$(function(){

        $("#back").click(function(){
            $(".days").animate({'left':'+=175px'},500);
        });

        $("#next").click(function(){
            $(".days").animate({'left':'-=175px'},500);
        });

        
    });