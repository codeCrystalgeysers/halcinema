$(function(){
    
    
    $('.slides li, #rankTop').click(function(){
        var eigaPic = $(this).find('img').attr('src'),
            eigaTitle = $(this).find('img').attr('data-title');
        /*
            eigaStart = $(this).find('img').attr('data-date-start'),
            eigaEnd = $(this).find('img').attr('data-date-end');
        */
        
        $('#sheet').css('background-image','url('+eigaPic+')');
        $('#nowDate').text('.');
        $('#nowTitle').text(eigaTitle);
        console.log(eigaPic);
    });
    $('#timeLine li').click(function(){
        var eigaDate = $(this).text();
        $('#nowDate').text(eigaDate);
    });
    
    $('.sliders li').hover(
        function(){
            $(this).find('.moviesCap').css('top','0');
        },
        function(){
            $(this).find('.moviesCap').css('top','100');
        }
    );
    
    
    
});
