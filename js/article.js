
$(function(){
        $("#back").click(function(){
            $(".days").animate({'left':'+=80px'},500);
        });

        $("#next").click(function(){
            $(".days").animate({'left':'-=80px'},500);
        });
    });