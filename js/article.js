
$(function(){

        $("#back").click(function(){
            $(".days").animate({'left':'+=110px'},500);
        });

        $("#next").click(function(){
            $(".days").animate({'left':'-=110px'},500);
        });
    });