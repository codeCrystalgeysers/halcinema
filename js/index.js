$(function(){
    
    $('.slides li, #rankTop').click(function(){
        cinemaSelect($(this));
    });
    
    $('#cinemaToggle').click(function(){
        $('#cinemaList').slideToggle(300);
        $('#cinemaList li').click(function(){
            $(this).parent().parent().slideUp(300);
            cinemaSelect($(this));
        });
    });
    
    function cinemaSelect(get){
        
        var eigaPic = get.find('img').attr('src'),
            eigaTitle = get.find('img').attr('data-title');
        
        $.ajax({
          url: 'cinemaChoose.php',
          type:'GET',
          data: {test1 : eigaTitle
                },
          success: function(data) {
                        $('#timeLine').html(data);
                   },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
                      console.log("ng");
                      console.log(textStatus);
                 }
        });
        
        $('#sheet').css('background-image','url('+eigaPic+')');
        $('#nowDate').text('.');
        $('#nowTitle').text(eigaTitle);
    }

    
    
    
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
