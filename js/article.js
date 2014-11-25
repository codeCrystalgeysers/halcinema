
$(function(){

        $("#back").click(function(){
            $(".days").animate({'left':'+=140px'},500);
        });

        $("#next").click(function(){
            $(".days").animate({'left':'-=140px'},500);
        });
    });